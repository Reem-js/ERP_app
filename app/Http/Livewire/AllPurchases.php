<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AllPurchases extends Component
{
    // public $name;
    public $tr = [
        '<tr class="text-center">
                <td  class="text-center"><span style="cursor:pointer;" wire:click="removeTr(0)"  class=" text-danger material-icons">
                    delete
                    </span></td>
                <td class="text-center">
                <div class="container">
                    <div class="row">
                      <div class=" col" style="padding:0px;" >
                        <select  class="form-control supplier_dropdown" name="supplier-name">
                            <option value="0">select</option>
                            <option value="1">supplier 1 1</option>
                            <option value="2">supplier 2</option>
                        </select>
                        <div onclick="getCreateSupBodyModal()" data-toggle="modal" style="display: inline; cursor:pointer;"
                            data-target="#exampleModalLong" class="text-primary " ><i
                                class="fa fa-plus" aria-hidden="true" ></i>
                               Add
                        </div>
                    </div>
                </div>
                </td>
                <td class="text-center"><input class="form-control"  type="number" name=""
                        required></td>
                <td class="text-center"><input class="form-control"  type="number" name=""
                        required></td>
                <td class="text-center"><input class="form-control"  type="number" name=""
                        required></td>
                <td class="text-center"><input class="form-control"  type="number" name=""
                       required></td>
            </tr>',
    ];

    public function addTr($newId)
    {

        $newTr =
            '<tr>
        <td ><span style="cursor:pointer;" wire:click="removeTr(' . $newId . ')" class=" text-danger material-icons">
            delete
            </span></td>
            <td class="text-center">
            <div class="container">
                <div class="row">
                  <div class=" col" style="padding:0px;" >
                    <select  class="form-control supplier_dropdown" name="supplier-name">
                        <option value="0">select</option>
                        <option value="1">supplier 1 1</option>
                        <option value="2">supplier 2</option>
                    </select>
                    <div onclick="getCreateSupBodyModal()" data-toggle="modal" style="display: inline; cursor:pointer;"
                        data-target="#exampleModalLong" class="text-primary " ><i
                            class="fa fa-plus" aria-hidden="true" ></i>
                           Add
                    </div>
                </div>
            </div>
            </td>
        <td><input class="form-control"  type="text" name=""
                required></td>
        <td><input class="form-control"  type="number" name=""
                required></td>
        <td><input class="form-control"  type="number" name=""
                 required></td>
        <td><input class="form-control"  type="number" name=""
                 required></td>
    </tr>';
        array_push($this->tr, $newTr);
    }

    public function removeTr($id)
    {

        unset($this->tr[$id]);
    }

    public function render()
    {
        return view('livewire.all-purchases');
    }
}
