<?php

namespace App\Http\Livewire\Processo;

use App\Models\Processo;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TabelaProcesso extends DataTableComponent
{
    protected $model = Processo::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('avaliar-processo', ['p' => $row]);
            });
        $this->setSearchEnabled();
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
            Column::make('Número do Processo', 'nr')
                ->sortable()
                ->searchable(),
            Column::make('Finalidade', 'finalidade')
                ->searchable(),
            Column::make('Tipo de Pedido', 'tipo_pedido')
                ->searchable(),
            Column::make('Orçamentso pedido', 'orcamento')
                ->sortable()
                ->searchable(),
            Column::make('Data da submissão', 'data_submissao')
                ->sortable()
                ->searchable(),
            Column::make('Data do prazo', 'data_prazo')
                ->sortable()
                ->searchable(),
        ];
    }
}
