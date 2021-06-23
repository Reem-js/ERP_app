<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;

class ModalShowSupplier extends Component
{
    // public $radio_value;
    // public static $l_radio_value;
    public function render()
    {
        // session()->put('radio_value', $this->radio_value);
        // self::$l_radio_value = $this->radio_value;
        // dd(self::$l_radio_value);
        return view('livewire.modals.modal-show-supplier');
    }
}
