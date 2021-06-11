<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AllPurchases extends Component
{

    // public $name;
        public $tr = [
            '<tr class="text-center">
                <td class="text-center"> <span style="cursor:pointer;" wire:click="removeTr(0)"  class=" text-danger material-icons">
                    delete
                    </span></td>
                <td class="text-center"><input type="text"
                        required></td>
                <td class="text-center"><input type="text"  name=""
                        required></td>
                <td class="text-center"><input type="text" name=""
                        required></td>
                <td class="text-center"><input type="text" name=""
                        required></td>
                <td class="text-center"><input type="text" name=""
                        required></td>
            </tr>',
        ];

public function addTr($newId)
{

    $newTr =
    '<tr>
        <td> <span style="cursor:pointer;" wire:click="removeTr('.$newId.')" class=" text-danger material-icons">
            delete
            </span></td>
        <td><input type="text" name=""
                required></td>
        <td><input type="text" name=""
                required></td>
        <td><input type="text" name=""
                required></td>
        <td><input type="text" name=""
                 required></td>
        <td><input type="text" name="" 
                 required></td>
    </tr>';
    array_push($this->tr ,$newTr);
}

public function removeTr($id){

    unset($this->tr[$id]);
}

    public function render()
    {
        return view('livewire.all-purchases');
    }
}
