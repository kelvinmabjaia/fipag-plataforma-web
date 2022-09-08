<?php

namespace App\Http\Livewire;

use App\Models\User;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    protected $listeners = [
        'actualizarListaUtilizadores'
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setSearchEnabled();
    }

    public function actualizarListaUtilizadores(){
        $this->emit('refreshDatatable');
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
        ];
    }
}