<?php

namespace App\Http\Livewire\Departamento;

use App\Models\Departamento;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TabelaDepartamento extends DataTableComponent
{
    protected $model = Departamento::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSearchEnabled();
    }

    public function columns(): array
    {
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
