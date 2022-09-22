<?php

namespace App\Http\Livewire\Departamento;

use App\Models\Departamento;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TabelaDepartamento extends DataTableComponent
{
    protected $model = Departamento::class;

    public $regiao;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('exibir-departamento', ['d' => $row]);
            });;
        $this->setSearchEnabled();
    }

    public function builder(): Builder
    {
        if($this->regiao != null)
        {
            return Departamento::query()
                    ->where('regiao_id', $this->regiao)
                    ->select();
        }
       
        return Departamento::query();
    }

    public function columns(): array
    {

        if($this->regiao != null)
        {
            return [
                Column::make('ID', 'id')
                    ->sortable()
                    ->searchable(),
                Column::make('Departamento', 'departamento')
                    ->sortable()
                    ->searchable(),
                Column::make('Orçamento', 'orcamento')
                    ->format(
                        fn($value, $row, Column $column) => number_format($row->orcamento, 2) . ' MT'
                    )
                    ->sortable()
                    ->searchable(),
            ];
        }

        return [
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Departamento', 'departamento')
                ->sortable()
                ->searchable(),
            Column::make('Região', 'regiao.regiao')
                ->sortable()
                ->searchable(),
            Column::make('Orçamento', 'orcamento')
                ->format(
                    fn($value, $row, Column $column) => number_format($row->orcamento, 2) . ' MT'
                )
                ->sortable()
                ->searchable(),
            Column::make('Actualizado em', 'updated_at')
                ->sortable()
                ->searchable(),
            Column::make('Criado em', 'created_at')
                ->sortable()
                ->searchable(),
        ];
    }

}
