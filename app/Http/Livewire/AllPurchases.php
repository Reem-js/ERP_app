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
                <td class="text-center"><input type="text"  class="form-control" id="pricelistname"
                        required></td>
                <td class="text-center"><input type="text"  name="quantity" class="form-control" id="pricelistname"
                        required></td>
                <td class="text-center"><input type="text" name="t" class="form-control" id="pricelistname"
                        required></td>
                <td class="text-center"><input type="text" name="pricelistname" class="form-control"
                        id="pricelistname" required></td>
                <td class="text-center"><input type="text" name="pricelistname" class="form-control"
                        id="pricelistname" required></td>
            </tr>',
        ];

public function addTr($newId)
{

    $newTr =
    '<tr>
        <td> <span style="cursor:pointer;" wire:click="removeTr('.$newId.')" class=" text-danger material-icons">
            delete
            </span></td>
        <td><input type="text" name="date" class="form-control" id="pricelistname"
                required></td>
        <td><input type="text" name="quantity" class="form-control" id="pricelistname"
                required></td>
        <td><input type="text" name="t" class="form-control" id="pricelistname"
                required></td>
        <td><input type="text" name="pricelistname" class="form-control"
                id="pricelistname" required></td>
        <td><input type="text" name="pricelistname" class="form-control"
                id="pricelistname" required></td>
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
