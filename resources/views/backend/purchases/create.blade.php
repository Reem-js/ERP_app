@extends('layouts.app', ['activePage' => 'addPurchase', 'titlePage' => __('translation.website.sidebar.add Purchase')])

@section('content')
    @livewireStyles
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
                                    <div class="row">
                                        <div class="form-group col" style="margin: 20px;">
                                            <select style="width: 200px" class="supplier_dropdown" name="supplier-name">
                                                <option value="0"> {{ __('translation.purchase.select supplier') }}</option>
                                                <option value="1">supplier 1 1</option>
                                                <option value="2">supplier 2</option>
                                            </select>
                                            <div onclick="getCreateSupBodyModal()" data-toggle="modal" style="display: inline; cursor:pointer;"
                                                data-target="#exampleModalLong" class="text-primary ml-3" ><i
                                                    class="fa fa-plus" aria-hidden="true" ></i>
                                                    {{ __('translation.purchase.new supplier') }}
                                            </div>
                                        </div>
                                        <div class="form-group col">
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
                        <livewire:all-purchases />

                        <div class="container" style="margin-top: 60px;">
                            <div class=" row ">
                                <div class="form-group col " style="margin: 20px; ">
                                    <p class="font-weight-bold form-group" style="color:black; padding-bottom:0px;"
                                        for="inputAddress">
                                        {{ __('translation.sales.Payment Type') }}</p>
                                        <select style="width: 200px" class="supplier_dropdown" name="supplier-name">
                                            <option value="0">select payment type</option>
                                            <option value="1">Cash</option>
                                            <option value="2">Instsall</option>
                                        </select>
                                    <p class="form-group" style="color:black;" for="inputAddress">
                                        {{ __('translation.sales.Note') }}</p>
                                    <textarea name="note" rows="5" cols="28" style="border:#ccc solid 1px;"></textarea>
                                </div>
                                <div class="form-group col">
                                    <div>
                                        <p class="font-weight-bold" style="display:inline;" for="inputAddress">
                                            {{ __('translation.sales.Discount') }} :</p>
                                        <input type="number"
                                            style="width:90px; border-radius: 20px;text-align:right;border:#ccc solid 1px;"
                                            placeholder="  %  "> - <input type="number"
                                            style="width:90px; border-radius: 20px; text-align:right; border:#ccc solid 1px;"
                                            placeholder="  LE  ">
                                    </div>
                                    <br>
                                    <p class="font-weight-bold" style=" display:inline; " for="inputAddress">
                                        {{ __('translation.sales.Total') }} :</p>
                                    <input type="number" name=""
                                        style="border:#ccc solid 1px; border-radius: 20px; text-align:right;">
                                </div>
                            </div>
                        </div>


                        <div class="row" style="margin: 50px;">
                            <div class="col-lg-4">
                                <button type="submit"
                                    class="btn btn-primary">{{ __('translation.website.crud.create') }}</button>
                                <button type="submit"
                                    class="btn btn-primary">{{ __('translation.website.crud.Create & New') }}</button>
                            </div>
                            <div class="col-lg-2 offset-6">
                                <button type="submit"
                                    class="btn btn-danger">{{ __('translation.website.crud.Cancel') }}</button>
                            </div>
                        </div>

                        </form>
                    </div>



                </div>
            </div>

        </div>
    </div>
    </div>
    @livewireScripts
    @include('layouts.includes.modal',
    ['modalSize'=>"modal-lg",
    'modalTitleColor'=>"",
    'modalTitle'=>"first modal",
    ])
      {{-- add supplier modal  body --}}
      <div class="container-fluid d-none" id="create-supplier-content" style="margin:0px; padding:0px;">
        <livewire:modals.add-supplier />
      </div>
       {{-- create tran modal action  --}}
       <div class=" d-none" id="createSupplier-modal-action">
          <button class='btn btn-primary'>Save Changes</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $(".supplier_dropdown").select2();
        });

        function getCreateSupBodyModal(){
        var form = document.getElementById('create-supplier-content');
        document.getElementById('modal-body').innerHTML = form.innerHTML;
        var showAction=document.getElementById('createSupplier-modal-action');
        document.getElementById('modal-action').innerHTML = showAction.innerHTML;
}
    </script>
@endpush
