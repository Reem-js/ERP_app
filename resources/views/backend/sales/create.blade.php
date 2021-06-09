@extends('layouts.app', ['activePage' => 'addSale', 'titlePage' => __('translation.website.sidebar.Add Sale')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Add Sale') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                @php
                                    $x=
                                    '<form>
                                        <div class="form-group" style="margin: 20px;">
                                            <p class="font-weight-bold"   style="color:black;" for="inputAddress">{{ __("translation.clients.Name") }}</p>
                                            <input type="text" name="name" class="form-control" id="inputAddress" required
                                                placeholder="1234 Main St">
                                        </div>
                            
                                        <div class="form-group" style="margin: 20px;">
                                            <p class="font-weight-bold" style="color:black;"
                                                for="inputAddress">{{ __("translation.clients.Nickname") }}</label>
                                            <input type="email" name="email" class="form-control" id="inputAddress" required
                                                placeholder="1234 Main St">
                                        </div>
                            
                                        <div class="form-group" style="margin: 20px;">
                                            <p class="font-weight-bold" style="color:black;"
                                                for="inputAddress">{{ __("translation.clients.Phone") }}</label>
                                            <input type="text" name="phone" class="form-control" id="inputAddress" required
                                                placeholder="1234 Main St">
                                        </div>
                            
                                        <div class="form-group" style="margin: 20px;">
                                            <p class="font-weight-bold" style="color:black;"
                                                for="inputAddress">{{ __("translation.clients.Email") }}</label>
                                            <input type="password" name="password" class="form-control" id="inputAddress" required
                                                placeholder="1234 Main St">
                                        </div>
                            
                                        <div class="form-group" style="margin: 20px;">
                                            <p class="font-weight-bold" style="color:black;"
                                                for="inputAddress">{{ __("translation.clients.Address") }}</label>
                                            <input type="password" name="confirmpassword" class="form-control" id="inputAddress"
                                                required placeholder="1234 Main St">
                                        </div>
                                 
                                    </form>';
                                @endphp
                                   @include('layouts.includes.modal',
        ['modalSize'=>"modal-lg",
        'modalTitleColor'=>"",
        'modalTitle'=>"Add Client",
        'modalBody'=>$x,
        'modalActions'=>"<button class='btn btn-primary'>Add Client</button>"
        ])
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
            Open Modal
        </button>
                                <div class="d-flex justify-content-between" style="margin-bottom:100px;">
                                    <div class="form-group col-3" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                            {{ __('translation.clients.Name') }}</p>
                                        <select id='selClient' style='width:100%'>
                                            <option value='0'>Select User</option>

                                            <option value='1'> </option>
                                            <option value='2'>Sonarika Bhadoria</option>
                                            <option value='3'>Anil Singh</option>
                                            <option value='4'>Vishal Sahu</option>
                                            <option value='5'>Mayank Patidar</option>
                                            <option value='6'>Vijay Mourya</option>
                                            <option value='7'>Rakesh sahu</option>
                                            <option value='8'>Madonna Mikhail</option>
                                            <option value='9'>Glal Husseiny</option>
                                            <option value='10'>Menna Glal</option>
                                            <option value='11'>Reem</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-3" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black; display:inline;" for="inputAddress">
                                            {{ __('translation.sales.Invoice Number') }} :</p>
                                        <p style="display:inline;">5</p>
                                        <br>
                                        <p class="font-weight-bold" style="color:black; display:inline;" for="inputAddress">
                                            {{ __('translation.sales.Order Date') }} :</p>
                                        <input style="display:inline;border:#ccc solid 1px;" type="date" name="" id="">

                                    </div>
                                </div>
                                    
                                <table class="table table-striped table-bordered" id="table_field">
                                    <thead>
                                        <tr>
                                            <th class="text-center">{{ __('translation.sales.ID') }}</th>
                                            <th >{{ __('translation.sales.Item') }}</th>
                                            <th>{{ __('translation.sales.Supplier') }}</th>
                                            <th>{{ __('translation.sales.QTY') }}</th>
                                            <th>{{ __('translation.sales.Price/item') }}</th>
                                            <th>{{ __('translation.sales.Amount') }}</th>
                                            <th>{{ __('translation.website.crud.Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">2</td>
                                            
                                            <td >
                                                <select id='selItem' style='width:100%'>
                                                    <option value='0'>Select Item</option>
                                                    <option value='2'>Sonarika Bhadoria</option>
                                                    <option value='3'>Anil Singh</option>
                                                    <option value='4'>Vishal Sahu</option>
                                                    <option value='5'>Mayank Patidar</option>
                                                    <option value='6'>Vijay Mourya</option>
                                                    <option value='7'>Rakesh sahu</option>
                                                    <option value='8'>Madonna Mikhail</option>
                                                    <option value='9'>Glal Husseiny</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select id='selSupplier' style='width:100%'>
                                                    <option value='7'>Rakesh sahu</option>
                                                    <option value='8'>Madonna Mikhail</option>
                                                    <option value='9'>Glal Husseiny</option> 
                                                </select>

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
                                            <th>
                                                <input class="btn btn-primary" type="button" name="add" id="add" value="Add">
                                            </th>
                                        </tr>


                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-between" style="margin-top: 100px;">
                                    <div class="form-group col-4" style="margin: 20px;">
                                        <p class="font-weight-bold form-group" style="color:black;" for="inputAddress">
                                            {{ __('translation.sales.Payment Type') }}</p>
                                        <select class="form-group form-control" name="payment">
                                            <option value='0'>Select payment Type</option>
                                            <option value="cash">Cash</option>
                                            <option value="install">Install</option>
                                        </select>
                                        <p class="form-group" style="color:black;" for="inputAddress">
                                            {{ __('translation.sales.Note') }}</p>
                                        <textarea name="note" rows="5" cols="35" style="border:#ccc solid 1px;">

                                            </textarea>
                                    </div>

                                    <div class="form-group col-3" style="margin:20px;">
                                        <div>
                                            <p class="font-weight-bold" style="display:inline;" for="inputAddress">
                                                {{ __('translation.sales.Discount') }} :</p>
                                            <input type="text"
                                                style="width:90px; border-radius: 20px;text-align:right;border:#ccc solid 1px;"
                                                placeholder="  %  "> - <input type="text"
                                                style="width:90px; border-radius: 20px; text-align:right; border:#ccc solid 1px;"
                                                placeholder="  LE  ">
                                        </div>

                                        <br>
                                        <p class="font-weight-bold" style=" display:inline; " for="inputAddress">
                                            {{ __('translation.sales.Total') }} :</p>
                                        <input type="text" name="" style="border:#ccc solid 1px;">
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            // Initialize select2
            $("#selClient").select2();
        });

    </script>
    <script>
        $(document).ready(function() {
            // Initialize select2
            $("#selItem").select2();
        });

    </script>
    <script>
        $(document).ready(function() {
            // Initialize select2
            $("#selSupplier").select2();
        });

    </script>
@endpush
