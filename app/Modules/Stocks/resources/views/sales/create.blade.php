@extends('layouts.app', ['activePage' => 'addSale', 'titlePage' => __('translation.website.sidebar.Add Sale')])
@section('content')
    @livewireStyles
    <div class="content">
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-content-mode">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @livewire('modals.modal-add-client')
                        {{-- <livewire:modals.modal-add-client /> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="add_supplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-content-mode">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- @livewire('modals.modal-add-client') --}}
                        <livewire:modals.modal-show-supplier />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="installment_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-content-mode">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Installment Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- @livewire('modals.modal-add-client') --}}
                        <livewire:modals.modal-installment-details />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Add Sale') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="m-5">
                                {{-- <div id="supplier_id_show">ekfmewmewmpogm</div> --}}
                                <form>
                                    <div class="usersale mb-5">
                                        {{-- d-flex justify-content-between --}}
                                        <div class="form-group col-sm-2 col-md-5 col-ld-5 m-4 ">
                                            <p class="font-weight-bold mb-0" for="inputAddress">
                                                {{ __('translation.clients.Name') }}</p>
                                            <select class="client_dropdown w-50" name="client_name">
                                                <option value="0">{{ __('Select client') }}</option>
                                                <option value="1">client 1</option>
                                                <option value="2">client 2</option>
                                            </select>

                                            <a href="#" data-toggle="modal" data-target="#exampleModalLong"
                                                class="text-primary ml-3 link"><i class="fa fa-plus" aria-hidden="true"></i>
                                                Add
                                                Client</a>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-3 col-lg-3 w-50">
                                            <p class="font-weight-bold d-inline" for="inputAddress">
                                                {{ __('translation.sales.Invoice Number') }} :</p>
                                            <p class="d-inline">5</p>
                                            <br>
                                            <p class="font-weight-bold d-inline" for="inputAddress">
                                                {{ __('translation.sales.Order Date') }} :</p>
                                            <input
                                                class="d-inline pl-2 text-black pr-1 border border-dark rounded backgroundcolor"
                                                type="date" name="" id="">
                                        </div>
                                    </div>
                                    {{-- <livewire:all-sales /> --}}
                                    <div id="supplier_id_show">hhhhhhhhh</div>
                                    @php
                                        $temp_supplier = '3';
                                    @endphp
                                    @livewire('all-sales', ['chosen_supplier_id' => $temp_supplier])
                                    <div class="usersale mt-5">
                                        {{-- d-flex justify-content-between col-sm-12 --}}
                                        <div class="form-group col-sm-2 col-md-5 col-lg-5 m-4">
                                            <p class="font-weight-bold form-group" for="inputAddress">
                                                {{ __('translation.sales.Payment Type') }}</p>
                                            <select onclick="payment()" id="payment_drop"
                                                class="payment_dropdown border border-dark rounded w-50" name="payment">
                                                <option value='0'>Select payment Type</option>
                                                <option value="cash">Cash</option>
                                                <option value="install">Install</option>
                                            </select>
                                            <p class="form-group" for="inputAddress">
                                                {{ __('translation.sales.Note') }}</p>
                                            <textarea name="note" rows="5" cols="27"
                                                class=" border border-dark rounded w-50 backgroundcolor"></textarea>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-5 col-lg-5 m-4 text-right">
                                            <div>
                                                <p class="font-weight-bold d-inline" for="inputAddress">
                                                    {{ __('translation.sales.Discount') }} :</p>
                                                <input type="text"
                                                    class="border border-dark rounded text-right w-25 backgroundcolor"
                                                    placeholder="  %  ">
                                                - <input type="text"
                                                    class="border border-dark rounded text-right w-25 backgroundcolor"
                                                    placeholder="  LE  ">
                                            </div>
                                            <br>
                                            <p class="font-weight-bold d-inline" for="inputAddress">
                                                {{ __('translation.sales.Total') }} :</p>
                                            <input type="text" name=""
                                                class="border border-dark rounded ml-4 w-50 backgroundcolor">
                                        </div>
                                    </div>
                                    @include('crudButtons.create-buttons')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    @livewireScripts
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            // Initialize select2
            var choosen_supplier_id = 0;
            $(".selItem").select2();
            $(".js-example-basic-single").select2();
            $(".client_dropdown").select2();
            $(".payment_dropdown").select2();
            $(".item_dropdown").select2();

            $("#payment_drop").change(function() {
                var check = $(this).val();
                if (check == 'install') {
                    $('#installment_form').modal('show');
                }
            });

            $('.supplier_choosen_radio').click(function() {
                var choosen_supplier_id = 0;
                var theCars = document.getElementsByName("customRadio");
                var i = theCars.length;
                while (i--) {
                    if (theCars[i].checked){
                        $('#add_supplier').modal('hide');
                        choosen_supplier_id = theCars[i].value;
                        alert(choosen_supplier_id); 
                    }
                        
                }
                document.getElementById('supplier_id_show').innerHTML = choosen_supplier_id;
                console.log(choosen_supplier_id);
            });
        });
        
        
    </script>
@endpush
