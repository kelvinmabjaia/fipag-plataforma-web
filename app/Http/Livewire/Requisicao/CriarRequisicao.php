<?php

namespace App\Http\Livewire\Requisicao;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

use App\Models\Artigo;
use App\Models\Centro;
use App\Models\Fornecedor;
use App\Models\Orcamento;

class CriarRequisicao extends Component
{
    public $fornecedores;
    public $artigos;

    public $centro = '';
    public $centro_desc = '';
    
    public $select_fornecedor = '';
    public $data_doc;
    public $data_venc;

    public $select_artigo = '';
    public $input_quant = 0;
    public $input_preco = 0;

    public $total_semIVA = 0;
    public $total_IVA = 0;
    public $total_comIVA = 0;
    
    public $linhas = [];
    public $_custo = [];
    public $_necessidade = [];

    public function mount()
    {
        $this->fornecedores = Fornecedor::all();
        
        $this->artigos = Artigo::all();

        $this->setCentro();
        $this->setDataInicial();
    }

    public $hydrated = false;
    public function hydrate()
    {
        if (!$this->hydrated) 
        {
            $this->getToken();
            $this->hydrated = true;
        }
    }

    private function setCentro()
    {
        $_centro = Auth::user()::with('Centros')->first()->Centros[0];

        $this->centro = $_centro['centro'];
        $this->centro_desc = Centro::where('Centro', $_centro['centro'])->first()->Descricao;
    }

    private function setDataInicial()
    {
        $this->data_doc = Carbon::now()->format('Y-m-d');
        $this->data_venc = Carbon::now()->addMonth()->format('Y-m-d');
    }

    public function adicionarLinha()
    {
        $this->validate([
            'select_artigo' => 'required',
        ]);

        $this->linhas[] = [
            'NumLinha' => count($this->linhas) + 1,
            'Artigo' => $this->select_artigo,
            'IVA' => 16,
            'CCustoCBL' => $this->centro,
            'ContaCBL' => Artigo::where('Artigo', $this->select_artigo)->first()->CDU_ContaCBL,
            'Quantidade' => $this->input_quant,
            'PrecUnit' => $this->input_preco,
            'Total' => ( ($this->input_quant * $this->input_preco) + ( ($this->input_quant * $this->input_preco) * 0.16 ) )
        ];

        $this->calcularTotal();

        $this->limparCampoLinha();

        $this->calcularCusto();
        $this->calcularNecessidade();
    }

    public function removerLinha($index)
    {
        unset($this->linhas[$index]);
        $this->linhas = array_values($this->linhas);

        $this->calcularTotal();

        $this->calcularCusto();
        $this->calcularNecessidade();
    }

    public function calcularCusto()
    {

        $this->_custo = []; $this->_necessidade = [];

        foreach ($this->linhas as $key => $linha) 
        {
            $_existe_conta = false;

            for ($i = 0; $i < count($this->_custo); $i++) 
            {   $item = $this->_custo[$i];

                if ($item["centro"] == $linha['CCustoCBL'] && $item["conta"] == $linha['ContaCBL']) 
                {
                    // incrementa o valor do elemento encontrado
                    $item["valor"] += $linha['Total'];

                    $this->_custo[$i] = $item; // atualiza o elemento no array original
                    $_existe_conta = true;
                    break;
                }
            }

            if (!$_existe_conta) 
            {
                $this->_custo[] = [
                    "centro" => $linha['CCustoCBL'],
                    "conta" => $linha['ContaCBL'],
                    "valor" => $linha['Total']
                ];
            }

        }
    }

    public function calcularNecessidade()
    {
        $mes = date("m",strtotime($this->data_doc));

        foreach($this->_custo as $item){
            // Orçamento
            $orcamento = Orcamento::where('Centro', $item["centro"])
                ->where('Conta', $item["conta"])
                ->where('Ano', "2023")->select("Mes" . $mes . " as valor")->first()->valor;

            $diff = $orcamento - $item["valor"];

            if($diff < 0){
                $this->_necessidade[] = [
                    "centro" => $item["centro"],
                    "conta" => $item["conta"],
                    "valor" => $diff
                ];
            }
        }
    }

    private function calcularTotal()
    {
        $this->total_semIVA = 0;
        $this->total_IVA = 0;
        $this->total_comIVA = 0;

        foreach ($this->linhas as $linha) {
            $this->total_semIVA += ($linha['Quantidade'] * $linha['PrecUnit']);
        }

        $this->total_IVA = $this->total_semIVA * 0.16;
        $this->total_comIVA = $this->total_semIVA + $this->total_IVA;
    }

    private function limparCampoLinha()
    {
        $this->select_artigo = '';
        $this->input_quant = 0;
        $this->input_preco = 0;
    }

    /** Web API */
    private function getToken()
    {

        $header = ['Content-Type: application/x-www-form-urlencoded'];

        $params = [
            'username' => env('API_USERNAME'),
            'password' => env('API_PASSWORD'),
            'company' => env('API_COMPANY'),
            'instance' => env('API_INSTANCE'),
            'grant_type' => env('API_GRAND_TYPE')
        ]; $body = http_build_query($params);

        $route = env('API_URL') . 'token';

        try {
            
            $tkn = curl_init();  

                curl_setopt($tkn, CURLOPT_TIMEOUT, 60);

                curl_setopt($tkn, CURLOPT_URL, $route);
                curl_setopt($tkn, CURLOPT_POST, 1);
                curl_setopt($tkn, CURLOPT_HTTPHEADER, $header);
                curl_setopt($tkn, CURLOPT_POSTFIELDS, $body);
                curl_setopt($tkn, CURLOPT_RETURNTRANSFER, true);

                $response = json_decode( curl_exec($tkn) , true);

            curl_close($tkn);

            if ($response === null ) {
                return dd('Erro no servidor');
            } else {
                
                $env = file(app()->environmentFilePath());
                
                $token = $response['access_token'];
                foreach ($env as &$line) {
                    if (str_starts_with($line, 'API_TOKEN=')) {
                        $line = "API_TOKEN=$token\n";
                        break;
                    } 
                }
        
                // Grava as alterações no arquivo .env
                file_put_contents(app()->environmentFilePath(), implode('', $env));
        
                // Recarrega as variáveis de ambiente
                app()->loadEnvironmentFrom('.env');
    
            }

        } catch (\Exception $e) {
            // Trate qualquer erro de solicitação ou autenticação
            // Aqui você pode exibir uma mensagem de erro ou realizar outra ação necessária
        }
    }

    /** Submit */
    public function requisitar()
    {
        $estado = (count($this->_necessidade) > 0) ? "R" : "P";

        // Body
        $body = json_encode([
            "Linhas" => $this->linhas,
            "Tipodoc" => "REC",
            "Serie" => "2023",
            "TipoEntidade" => "F",
            "Entidade" => $this->select_fornecedor,
            "DataIntroducao" => $this->data_doc,
            "DataDoc" => $this->data_doc,
            "DataVenc" => $this->data_venc,
            "Estado" => $estado,
            "User" => Auth::user()->name,
            "CondPag" => "2", "Fluxo" => ""
        ]);

        // Header
        $header = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . env('API_TOKEN'),
            'Content-Length: ' . strlen($body)
        ];

        $route = 'ComprasExterno/CriarDocumento'; 

        $curl = curl_init();  

            curl_setopt($curl, CURLOPT_URL, env('API_URL') . $route);
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = json_decode( curl_exec($curl) , true);

        curl_close($curl);

        if($response === null)
        { 
            return redirect()->route('listar-requisicao')->with('error', "Erro na conexão");
        } else 
        {
            if($response['StatusCode'] == 200)
            {
                return redirect()->route('listar-requisicao')->with('success', "A Requisição foi submetida com sucesso.");
            } else 
            return redirect()->back()->with('error', "Falha na operação: ". $response['Result']);
        }


    }

    public function render()
    {
        return view('livewire.requisicao.criar-requisicao', [
            'artigos' => $this->artigos,
            'fornecedores' => $this->fornecedores,
        ]);
    }
}
