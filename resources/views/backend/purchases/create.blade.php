@extends('layouts.app', ['activePage' => 'addPurchase', 'titlePage' => __('translation.website.sidebar.Create
Purchases')])


@section('content')
    @livewireStyles
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title ">{{ __('translation.website.sidebar.Create Purchases') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form novalidate>







                                <div class="container">
                                    <div class="row">
                                        <div class="form-group col" style="margin: 20px;">
                                            <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                                {{ __('translation.pricelists.Supplier') }}</label>

                                                <select class="form-group form-control " style="width: 25%;">
                                                    <option value="0">
                                                        {{ __('translation.pricelists.select supplier') }}
                                                    </option>
                                                    <option><i class="fa fa-plus-circle"
                                                            aria-hidden="true"></i>{{ __('translation.purchase.add row') }}
                                                    </option>
                                                    <option value="2">BMW</option>
                                                    <option value="3">Citroen</option>
                                                    <option value="4">Ford</option>
                                                    <option value="5">Honda</option>
                                                    <option value="6">Jaguar</option>

                                                </select>
                                        </div>

                                        <div class="form-group col" style="margin: 20px;">
                                            <p class="font-weight-bold" style="color:black; display:inline;"
                                                for="inputAddress"> {{ __('translation.sales.Order Date') }} :</p>
                                            <input
                                                style="display: inline;padding-left: 11px;color: #616161;padding-right: 7px;border-radius: 4px;border: #ccc solid 1px;"
                                                type="number" name="" id="">


                                            <br>
                                            <br>
                                            <p class="font-weight-bold" style="color:black; display:inline;"
                                                for="inputAddress">
                                                {{ __('translation.sales.Order Date') }} :</p>


                                            <input
                                                style="display: inline;padding-left: 11px;color: #616161;padding-right: 7px;border-radius: 4px;border: #ccc solid 1px;"
                                                type="date" name="" id="">
                                        </div>
                                    </div>
                                </div>
                                <livewire:all-purchases />

                                <div class="container">
                                    <div class="row">
                                        <div class="form-group col" style="margin: 20px;">
                                            <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                                {{ __('translation.pricelists.Supplier') }}</label>

                                                <select class="form-group form-control " style="width: 25%;">
                                                    <option value="0">
                                                        {{ __('translation.pricelists.select supplier') }}
                                                    </option>
                                                    <option value="2">Credit</option>
                                                    <option value="3">Cash</option>


                                                </select>
                                        </div>
                                        <div class="form-group col" style="margin:20px;">

                                                <p class="font-weight-bold" style="display:inline;" for="inputAddress">
                                                    {{ __('translation.sales.Discount') }} :</p>
                                                <input type="text"
                                                    style="width:90px; border-radius: 20px;text-align:right;border:#ccc solid 1px;"
                                                    placeholder="  %  "> -
                                                <input type="text"
                                                    style="width:90px; border-radius: 20px; text-align:right; border:#ccc solid 1px;"
                                                    placeholder="  LE  ">
                                            
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <p class="form-group" style="color:black;" for="inputAddress">
                                                {{ __('translation.sales.Note') }}</p>
                                            <textarea name="note" rows="5" cols="35"
                                                style="border:#ccc solid 1px;"></textarea>
                                        </div>
                                        <div class="form-group col" style="margin: 20px;">

                                            <p class="font-weight-bold" style=" display:inline; " for="inputAddress">
                                                {{ __('translation.sales.Total') }} :</p>
                                            <input type="text" name="" style="border:#ccc solid 1px;">
                                        </div>
                                    </div>
                                </div>





                                <div class="row">
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
    </div>



    </div>
    </div>
    </div>
    @livewireScripts
@endsection
