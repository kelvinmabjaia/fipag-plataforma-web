<?php

namespace App\Http\Livewire\Requisicao;

use App\Models\Requisicao;
use App\Models\Fornecedor;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

class TabelaRequisicao extends DataTableComponent
{

    protected $model = Requisicao::class;
    public array $perPageAccepted = [5,15,25];

    public $estado = null;

    public function configure(): void
    {
        $this->setPrimaryKey('Id')
            ->setTableRowUrl(function($row) 
            {
                return route('avaliar-requisicao', ['rec' => $row->Documento]);
            });
        $this->setDefaultSort('NumDoc', 'desc');
        $this->setSearchEnabled();
    }

    public function builder(): Builder
    {
        if ($this->estado != null)
            return Requisicao::query()->where('CDU_Estado', $this->estado); 
        else 
        return Requisicao::query(); 
        
       
    }

    public function columns(): array
    {
        return [
            Column::make('Tipo', 'TipoDoc')
                ->sortable()
                ->searchable()
                ->deselected(),
            Column::make('Serie', 'Serie')
                ->sortable()
                ->searchable()
                ->deselected(),
            Column::make('Documento', 'Documento')
                ->sortable()
                ->searchable(),
            Column::make('Data Documento', 'DataDoc')
                ->format( 
                    fn ($value, $row, Column $column) => 
                        date("d/m/Y", strtotime($value))
                )
                ->sortable()
                ->searchable(),
            Column::make('Fornecedor', 'Entidade')
                ->format(
                    function ($value, $row, Column $column)
                    {
                        return Fornecedor::where('Fornecedor', $value)->first()->Nome;
                    }
                )
                ->sortable()
                ->searchable(),
            Column::make('Estado', 'CDU_Estado')
                ->format( 
                    function ($value, $row, Column $column) 
                    {
                        switch ($value) {
                            case 'A':
                                $line = '<span class="badge badge-success"> Aprovado </span>';
                                break;

                            case 'R':
                                $line = '<span class="badge badge-info"> Requer Aprovação </span>';
                                break;

                            case 'F':
                                $line = '<span class="badge badge-danger"> Fechado </span>';
                                break;
                            
                            default:
                                $line = '<span class="badge badge-secondary"> Pendente </span>';
                                break;
                        }

                        return $line;
                    }
                )
                ->html()
                ->sortable()
                ->searchable(),
            Column::make('Total (Sem IVA)', 'TotalMerc')
                ->format(
                    fn($value, $row, Column $column) => 
                    '<span>' . number_format($value, 2) . ' MT</span>' 
                )->html()
                ->sortable()
                ->searchable()
                ->deselected(),
            Column::make('Total IVA', 'TotalIVA')
                ->format(
                    fn($value, $row, Column $column) => 
                        '<span>' . number_format($value, 2) . ' MT</span>' 
                )->html()
                ->sortable()
                ->searchable()
                ->deselected(),
            Column::make('Total Documento', 'TotalDocumento')
                ->format(
                    fn($value, $row, Column $column) => 
                    '<span>' . number_format($value, 2) . ' MT</span>' 
                )->html()
                ->sortable()
                ->searchable(),
        ];
    }
}
