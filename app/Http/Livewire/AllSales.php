<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AllSales extends Component
{ 
    public $x=0;
    public $tr = [
        ' <tr>
                <td class="text-center"> <span style="cursor:pointer;" wire:click="removeTr(0)"  class=" text-danger material-icons">
                        delete
                        </span></td>
                <td>
                <div class="form-group col-3" style="margin: 20px;">
                    <div class="dropdown" style="border-radius: 4px;color: #616161;width: 150px;padding: 1px;margin-top: 0px;border: 1px solid #ccc;">
                        <span style="margin-left: 10px;
                        margin-top: 10px;" tabindex="0">choose Item<span style="margin-left: 40px;"><i class="fa fa-angle-down" aria-hidden="true"></i></span></span>
                        <div class="less-sticky">
                            <ul>
                            <li>
                            <ul>
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
                            </li>
                  
                            
                            </ul>
                        </div>
                    </div>
                </div>
                </td>














                <td>
                <div class="form-group col-3" style="margin: 20px;">
                <div class="dropdown" style="border-radius: 4px;color: #616161;width: 200px;padding: 1px;margin-top: 0px;border: 1px solid #ccc;">
                    <span style="margin-left:0px;
                    margin-top: 10px;" tabindex="0">choose Supplier<span style="margin-left: 40px;"><i class="fa fa-angle-down" aria-hidden="true"></i></span></span>
                    <div class="less-sticky">
                        <ul>
                            <li class="cb-item"><table class="table table-bordered">
                                <tr>
                                    <td>supplier</td>
                                    <td>product</td>
                                    <td>stock</td>
                                    <td>purchase price</td>
                                    <td>sale price</td>
                                </tr>
                                <tr>
                                <td>madonna</td>
                                <td>iphone 12 pro</td>
                                <td>12</td>
                                <td>20,000</td>
                                <td>24,000</td>
                            </tr>
                            </table></li>
                              <li class="cb-item"><table>
                              <tr>
                                  <td>supplier</td>
                                  <td>product</td>
                                  <td>stock</td>
                                  <td>purchase price</td>
                                  <td>sale price</td>
                              </tr>
                              <tr>
                              <td>madonna</td>
                              <td>iphone 12 pro</td>
                              <td>12</td>
                              <td>20,000</td>
                              <td>24,000</td>
                          </tr>
                          </table></li>
                        
                        </ul>
                    </div>
                </div>
            </div>
                </td>
                <td>
                    <input type="number" name="" id="">
                </td>
            
                <td>
                    <input type="text" name="" id="">
                </td>
                <td>
                    <input type="text" name="" id="">
                </td>
            
    </tr>',
    ];

    public function addTr($newId){ 
            $newTr =
            ' <tr>
            <td> <span style="cursor:pointer;" wire:click="removeTr('.$newId.')" class=" text-danger material-icons">
                    delete
                    </span></td>
            
            <td>
       
            <div class="form-group col-3" style="margin: 20px;">
            <div class="dropdown" style="border-radius: 4px;color: #616161;width: 150px;padding: 1px;margin-top: 0px;border: 1px solid #ccc;">
                <span style="margin-left: 10px;
                margin-top: 10px;" tabindex="0">choose Item<span style="margin-left: 40px;"><i class="fa fa-angle-down" aria-hidden="true"></i></span></span>
                <div class="less-sticky">
                    <ul>
                    <li>
                    <ul>
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
                    </li>
          
                    
                    </ul>
                </div>
            </div>
        </div>
            </td>
            <td>
            <div class="form-group col-3" style="margin: 20px;">
            <div class="dropdown" style="border-radius: 4px;color: #616161;width: 200px;padding: 1px;margin-top: 0px;border: 1px solid #ccc;">
                <span style="margin-left: 10px;
                margin-top: 10px;" tabindex="0">choose Supplier <span style="margin-left: 40px;"><i class="fa fa-angle-down" aria-hidden="true"></i></span></span>
                <div class="less-sticky">
                    <ul>
                        <li class="cb-item"><table class="table table-bordered">
                            <tr>
                                <td>supplier</td>
                                <td>product</td>
                                <td>stock</td>
                                <td>purchase price</td>
                                <td>sale price</td>
                            </tr>
                            <tr>
                            <td>madonna</td>
                            <td>iphone 12 pro</td>
                            <td>12</td>
                            <td>20,000</td>
                            <td>24,000</td>
                        </tr>
                        </table></li>
                          <li class="cb-item"><table>
                          <tr>
                              <td>supplier</td>
                              <td>product</td>
                              <td>stock</td>
                              <td>purchase price</td>
                              <td>sale price</td>
                          </tr>
                          <tr>
                          <td>madonna</td>
                          <td>iphone 12 pro</td>
                          <td>12</td>
                          <td>20,000</td>
                          <td>24,000</td>
                      </tr>
                      </table></li>
                    
                    </ul>
                </div>
            </div>
        </div>
            </td>
            <td>
                <input type="number" name="" id="">
            </td>

            <td>
                <input type="text" name="" id="">
            </td>
            <td>
                <input type="text" name="" id="">
            </td>
        </tr>';
    array_push($this->tr ,$newTr);
}

public function removeTr($id){

    unset($this->tr[$id]);
}
    public function render()
    {
        return view('livewire.all-sales');
    }
}
