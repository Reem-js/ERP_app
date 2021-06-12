<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AllPurchases extends Component
{
    // public $name;
        public $tr = [
            '<tr class="text-center">
                <td class="text-center">1<span style="cursor:pointer;" wire:click="removeTr(0)"  class=" text-danger material-icons">
                    delete
                    </span></td>
                <td class="text-center"><input type="date"
                        required></td>
                <td class="text-center">
                        <div class="dropdown"
                        style="border-radius: 4px;color: #616161;width: 150px;padding: 1px;margin-top: 0px;border: 1px solid #ccc;">
                        <span style="margin-left: 10px;
                                        margin-top: 10px;"
                            tabindex="0">add product<span
                                style="margin-left: 40px;"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i></span></span>
                        <div class="less-sticky">
                            <ul>

                                <li class="cb-item"><button type="button" class="btn btn-primary"
                                        data-toggle="modal" data-target="#exampleModalLong">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                        add product
                                    </button></li>
                                <li class="cb-item"><a href="http://yes.net">home page</a></li>
                                <li class="cb-item"><a href="http://test.net">My home page</a></li>
                                <li class="cb-item"><a href="#">Stay on this page</a></li>
                                <li class="cb-item"><a href="#">Stay on this page</a></li>
                                <li class="cb-item"><a href="#">Stay on this page</a></li>
                                <li class="cb-item"><a href="#">Stay on this page</a></li>
                                <li class="cb-item"><a href="#">Stay on this page</a></li>
                                <li class="cb-item"><a href="#">fd gddsfgpage</a></li>
                                <li class="cb-item"><a href="#">457567456756 757this page</a></li>
                                <li class="cb-item"><a href="#">Stay on this page</a></li>
                            </ul>
                        </div>
                    </div>
                        </td>
                <td class="text-center"><input type="number" name=""
                        required></td>
                <td class="text-center"><input type="number" name=""
                        required></td>
                <td class="text-center"><input type="number" name=""
                        required></td>
            </tr>',
        ];

public function addTr($newId)
{

    $newTr =
    '<tr>
        <td><span style="cursor:pointer;" wire:click="removeTr('.$newId.')" class=" text-danger material-icons">
            delete
            </span></td>
        <td><input type="date" name=""
                required></td>
        <td><input type="text" name=""
                required></td>
        <td><input type="number" name=""
                required></td>
        <td><input type="number" name=""
                 required></td>
        <td><input type="number" name=""
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
