<?php

namespace App\Http\Livewire\Processo;

use App\Models\Processo;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

use Carbon\Carbon;
use Illuminate\Support\Str;

class TabelaProcesso extends DataTableComponent
{
    protected $model = Processo::class;
    public $departamento;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('avaliar-processo', ['p' => $row]);
            });
        $this->setSearchEnabled();
    }

    public function builder(): Builder
    {
        if($this->departamento != null)
        {
            return Processo::query()
                    ->where('departamento_id', $this->departamento)
                    ->select();
        }

        return Processo::query();
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Referência', 'referencia')
                ->sortable()
                ->searchable(),
            Column::make('Número', 'nr')
                ->sortable()
                ->searchable(),
            Column::make('Finalidade', 'finalidade')
                ->format(
                    fn($value, $row, Column $column) => Str::limit($row->finalidade, 25)
                )
                ->searchable(),
            Column::make('Tipo de Pedido', 'tipo_pedido')
                ->sortable()
                ->searchable(),
            Column::make('Orçamento', 'orcamento')
                ->format(
                    fn($value, $row, Column $column) => number_format($row->orcamento, 2) . ' MT'
                )
                ->sortable()
                ->searchable(),
            Column::make('Data da submissão', 'data_submissao')
                ->format(
                    fn($value, $row, Column $column) => Carbon::parse( $row->data_submissao )->format('d-m-Y')
                )
                ->sortable()
                ->searchable(),
            Column::make('Data do prazo', 'data_prazo')
                ->format(
                    fn($value, $row, Column $column) => Carbon::parse( $row->data_prazo )->format('d-m-Y')
                )
                ->sortable()
                ->searchable(),
        ];
    }
}
