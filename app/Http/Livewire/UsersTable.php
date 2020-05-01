<?php

namespace App\Http\Livewire;

use App\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\TableComponent;

class UsersTable extends TableComponent
{

    public $perPageOptions = [5, 10, 15];

    public function query() : Builder
    {
        return \App\ContactUs::query();
    }

    public function columns() : array
    {
        return [
            Column::make('ID')
                ->searchable()
                ->sortable(),
            Column::make('First Name','first_name')
                ->searchable()
                ->sortable(),
            Column::make('Last Name','last_name')
                ->searchable()
                ->sortable(),
            Column::make('E-mail', 'email')
                ->searchable()
                ->sortable(),
            Column::make('Message', 'message')
                ->searchable()
                ->sortable(),
        ];
    }
}