@extends('layouts.app', ['activePage' => 'addPurchase', 'titlePage' => __('translation.website.sidebar.add Purchase')])

@section('content')
    @livewireStyles
    <!-- Modal -->
    {{-- <div class="modal fade" style="z-index: 1000000" id="installment_form" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Installment Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <livewire:modals.modal-installment-details />
            </div>
        </div>
    </div>
</div> --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.add Purchase') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="container">
                                    <div class="row justify-content-between">
                                        <div class="form-group col-4" style="margin: 20px;">
                                            <select style="width: 50%" class="supplier_dropdown" name="supplier-name">
                                                <option value="0"> {{ __('translation.purchase.select supplier') }}</option>
                                                <option value="1">supplier 1 1</option>
                                                <option value="2">supplier 2</option>
                                            </select>
                                            <div   onclick="getCreateSupBodyModal()" data-toggle="modal" style="display: inline; cursor:pointer;"
                                                data-target="#exampleModalLong" class="text-primary ml-3" ><i
                                                    class="fa fa-plus" aria-hidden="true" ></i>
                                                    {{ __('translation.purchase.new supplier') }}
                                            </div>
                                        </div>
                                        <div class="form-group col-4">
                                            <p class="font-weight-bold" style="color:black; display:inline;"
                                                for="inputAddress">
                                                {{ __('translation.sales.Invoice Number') }} :</p>
                                            <p style="display:inline;">5</p>
                                            <br>
                                            <p class="font-weight-bold" style="color:black; display:inline;"
                                                for="inputAddress">
                                                {{ __('translation.sales.Order Date') }} :</p>
                                            <input style="display: inline;padding-left: 11px;color: #616161;padding-right: 7px;border-radius: 4px;border: #ccc solid 1px;" type="date" name="" id="">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                        <livewire:all-purchases />
                        <div class="usersale mt-5">
                            {{-- d-flex justify-content-between col-sm-12 --}}
                            <div class="form-group col-sm-2 col-md-5 col-lg-5 m-4" >
                                <p class="font-weight-bold form-group" for="inputAddress">
                                    {{ __('translation.sales.Payment Type') }}</p>
                                <select onclick="payment()"  id="payment_drop" class="payment_dropdown border border-dark rounded w-50" name="payment">
                                    <option value='0'>Select payment Type</option>
                                    <option value="cash">Cash</option>
                                    <option value="install">Install</option>
                                </select>
                                <p class="form-group" for="inputAddress">
                                    {{ __('translation.sales.Note') }}</p>
                                <textarea name="note" rows="5" cols="27" class=" border border-dark rounded w-50"></textarea>
                            </div>
                            <div class="form-group col-sm-2 col-md-5 col-lg-5 m-4 text-right" >
                                <div>
                                    <p class="font-weight-bold d-inline" for="inputAddress">
                                        {{ __('translation.sales.Discount') }} :</p>
                                    <input type="text" class="border border-dark rounded text-right w-25" placeholder="  %  ">
                                    - <input type="text" class="border border-dark rounded text-right w-25" placeholder="  LE  ">
                                </div>
                                <br>
                                <p class="font-weight-bold d-inline" for="inputAddress">
                                    {{ __('translation.sales.Total') }} :</p>
                                <input type="text" name="" class="border border-dark rounded ml-4 w-50">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <button type="submit" class="btn btn-primary m-4" >{{__('translation.website.crud.create')}}</button>
                                <button type="submit" class="btn btn-primary m-4" >{{__('translation.website.crud.Create & New')}}</button>
                            </div>
                            <div class="col-lg-2 offset-6">
                                <button type="submit" class="btn btn-danger m-4">{{__('translation.website.crud.Cancel')}}</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <br>
    @livewireScripts
    @include('layouts.includes.modal',
    ['modalSize'=>"modal-lg",
    'modalTitleColor'=>"",
    'modalTitle'=>"first modal",
    ])

    {{-- dynamic Modals --}}
    {{-- add supplier modal  body --}}
      <div class="container-fluid d-none" id="create-supplier-content" style="margin:0px; padding:0px;">
        <livewire:modals.add-supplier />
        </div>
    {{-- add product modal  body --}}
      <div class="container-fluid d-none" id="create-product-content" style="margin:0px; padding:0px;">
        <livewire:modals.addproduct />
          </div>
    {{-- create tran modal action  --}}
    <div class=" d-none" id="create-modal-action">
          <button class='btn btn-primary'>Save Changes</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>


@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $(".supplier_dropdown").select2();
        });
        $(document).ready(function() {
            $(".payment_dropdown").select2();
        });


        function getCreateSupBodyModal(){
        var form_s = document.getElementById('create-supplier-content');
        document.getElementById('modal-body').innerHTML = form_s.innerHTML;
        var showAction=document.getElementById('create-modal-action');
        document.getElementById('modal-action').innerHTML = showAction.innerHTML;
}
function getCreateProductBodyModal(){
        var form_p = document.getElementById('create-product-content');
        document.getElementById('modal-body').innerHTML = form_p.innerHTML;
        var showAction=document.getElementById('create-modal-action');
        document.getElementById('modal-action').innerHTML = showAction.innerHTML;
}


    </script>
@endpush
