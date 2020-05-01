<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\TableComponent;

class ContactTable extends TableComponent
{
    public $perPageOptions = [2, 4, 6];

    public $perPage = 2;
    
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

    // public function render()
    // {
    //     return view('livewire.contact-table');
    //     // return view('livewire.contact-table',['contacts' => $this->contacts]);
    // }
}
