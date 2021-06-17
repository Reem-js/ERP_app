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
                                <div class="row" style="margin-bottom:50px;">
                                    <div class="form-group col" style="margin: 20px;">
                                        <select style="width: 200px" class="client_dropdown" name="client_name">
                                            <option value="0">{{ __('Select client') }}</option>
                                            <option value="1">client 1</option>
                                            <option value="2">client 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <p class="font-weight-bold" style="color:black; display:inline;" for="inputAddress">
                                            {{ __('translation.sales.Invoice Number') }} :</p>
                                        <p style="display:inline;">5</p>
                                        <br>
                                        <p class="font-weight-bold" style="color:black; display:inline;" for="inputAddress">
                                            {{ __('translation.sales.Order Date') }} :</p>
                                        <input style="display: inline;
                                                    padding-left: 11px;
                                                    color: #616161;
                                                    padding-right: 7px;border-radius: 4px;
                                                    border: #ccc solid 1px;" type="date" name="" id="">
                                    </div>
                                </div>

                                <livewire:all-purchases />

                                <div class="container" style="margin-top: 60px;">
                                    <div class=" row ">
                                        <div class="form-group col " style="margin: 20px; ">
                                            <p class="font-weight-bold form-group" style="color:black; padding-bottom:0px;"
                                                for="inputAddress">
                                                {{ __('translation.sales.Payment Type') }}</p>
                                            <select class="form-group form-control" name="payment"
                                                style="width: 50%; margin-top:0px; margin-bottom:20px;">
                                                <option value='0'>Select payment Type</option>
                                                <option value="cash">Cash</option>
                                                <option value="install">Install</option>
                                            </select>
                                            <p class="form-group" style="color:black;" for="inputAddress">
                                                {{ __('translation.sales.Note') }}</p>
                                            <textarea name="note" rows="5" cols="28"
                                                style="border:#ccc solid 1px;"></textarea>
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
@endsection
@push('js')
<script>
    $(document).ready(function() {
     $(".client_dropdown").select2();
    });
</script>
@endpush
