<?php

namespace App\Http\Livewire\Regiao;

use App\Models\Regiao;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TabelaRegiao extends DataTableComponent
{
    protected $model = Regiao::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'asc');
        $this->setSearchEnabled();
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Região', 'regiao')
                ->sortable()
                ->searchable(),
        ];
    }

}
