<?php

namespace App\Http\Livewire\Utilizador;

use App\Models\User;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TabelaUtilizador extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'desc');
        $this->setSearchEnabled();
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Nome', 'name')
                ->sortable()
                ->searchable(),
            Column::make('Email ')
                ->sortable()
                ->searchable(),
            Column::make('Criado em', 'created_at')
                ->sortable()
                ->searchable(),
        ];
    }
}
