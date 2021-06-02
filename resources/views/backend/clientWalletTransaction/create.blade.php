@extends('layouts.app', ['activePage' => 'createclientWalletTransaction', 'titlePage' => __('translation.website.sidebar.Create Transaction')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-text card-header-primary">
                                <div class="card-text">
                                    <h4 class="card-title">{{ __("translation.website.sidebar.Create Transaction") }}</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black;"
                                            for="inputAddress">{{ __('translation.walletTransaction.Reason') }}</p>
                                        <input type="text" name="reason" class="form-control" id="inputAddress" required
                                            placeholder="Please enter transaction reason">
                                    </div>

                                    <div class="form-group" style="margin: 20px;">
                                        <p class="font-weight-bold" name="client_name"style="color:black;" for="selUser"
                                        f>{{ __('translation.clients.Client Name') }}</p>
                                            <select id='selUser' style='width:100%'>
                                                <option value='0'>Select User</option> 
                                                <option value='1'>Yogesh singh</option> 
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

                                    {{-- <div class="form-group" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black;"
                                            for="inputAddress">{{ __('translation.clients.Client Name') }}</p>
                                            <select class="form-group form-control" name="trans_type" style="width: 100%;" required>
                                                <option value="0">Select client name:</option>
                                                <option value="1">Audi</option>
                                                <option value="2">BMW</option>
                                                <option value="3">Citroen</option>
                                                <option value="4">Ford</option>
                                                <option value="5">Honda</option>
                                            </select>
                                    </div> --}}

                                    <div class="form-group" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black;"
                                            for="inputAddress">{{ __('translation.walletTransaction.Date') }}</p>
                                        <input type="date" name="date" class="form-control" id="inputAddress" required
                                            placeholder="please choose transaction date">
                                    </div>

                                    <div class="form-group" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black;"
                                            for="selTrans">{{ __('translation.walletTransaction.Transaction') }}</p>
                                        <select id='selTrans' style='width:100%'>
                                            <option value='0'>Select Transaction</option> 
                                            <option value='1'>Transaction 1</option> 
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
                                        <br/>
                                        <div id='result'></div>
                                    </div>

                                    <div class="form-group" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black;"
                                            for="selTransType">{{ __('translation.walletTransaction.Transaction Type') }}</p>
                                            <select id='selTransType' style='width:100%'>
                                                <option value='0'>Select Transaction Type</option> 
                                                <option value='1'>Transaction Type 1</option> 
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

                                    <div class="form-group" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black;"
                                            for="inputAddress">{{ __('translation.walletTransaction.Amount') }}</p>
                                        <input type="number" name="amount" class="form-control" id="inputAddress" required
                                            placeholder="please enter transaction amount ">
                                    </div>

                                    <div class="form-group" style="margin: 20px;">
                                        <button type="submit" class="btn btn-primary" style="margin: 20px;">{{__('translation.website.crud.create')}}</button>
                                        <button type="submit" class="btn btn-primary" style="margin: 20px;">{{__('translation.website.crud.Create & New')}}</button>                            </form>
                                        <button type="submit" class="btn btn-danger"  style="margin: 20px; float:{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}">{{__('translation.website.crud.Cancel')}}</button> 
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
@endsection
@push('js')
    <script>
        $(document).ready(function(){
            // Initialize select2
            $("#selUser").select2();
          });
    </script>
    <script>
        $(document).ready(function(){
            // Initialize select2
            $("#selTrans").select2();
          });
    </script>
    <script>
        $(document).ready(function(){
            // Initialize select2
            $("#selTransType").select2();
          });
    </script>
@endpush
