<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InstallmentsTable extends Component
{

    public $table = '';
    protected $listeners = ['installLivewire' => 'getinstallTable'];


    public function getinstallTable()
    {
        $this->table =
            "<tr>
                <td>3</td>
                <td>Andrew Mike</td>
                <td>6 months</td>
                <td>may 2021</td>
                <td>50,000 EG</td>
                <td class='td-actions'>
                <div class='btn btn-info' rel='tooltip' href='#'
                title='{{ __('.translation.installments.show trans.') }}'
                style='color:white;'><i class='material-icons'>visibility</i></div>

                <div href='{{ route('.priceLists.create.') }}' rel='tooltip'
                title='{{ __('translation.installments.add trans') }}'
                class='btn btn-primary' style='color:white;'><i
                class='fa fa-plus-circle' aria-hidden='true'></i></div>
                </td>
            </tr>";
    }

    public function render()
    {
        return view('livewire.installments-table');
    }
}
