@extends('layouts.app', ['activePage' => 'createclientWalletTransaction', 'titlePage' =>
__('translation.website.sidebar.Create Transaction')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="card card-mode">
                            <div class="card-header card-header-text card-header-primary">
                                <div class="card-text">
                                    <h4 class="card-title">{{ __('translation.website.sidebar.Create Transaction') }}</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="d-flex justify-content-between">
                                        <div class="form-group m-4 col-4">
                                            <p class="font-weight-bold" for="inputAddress">
                                                {{ __('translation.walletTransaction.Reason') }}</p>
                                            <input type="text" name="reason" class="form-control inputbackgroundDark" id="inputAddress" required
                                                placeholder="Please enter transaction reason">
                                        </div>

                                        <div class="form-group m-4 col-4">
                                            <p class="font-weight-bold" name="client_name" for="selUser" f>
                                                {{ __('translation.clients.Client Name') }}</p>
                                            <select id='selUser' class="w-100 select" >
                                                <option  value='0'>Select User</option>
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
                                    </div>

                                    <div  class="d-flex justify-content-between">
                                        <div class="form-group m-4 col-4">
                                            <p class="font-weight-bold" for="inputAddress">
                                                {{ __('translation.walletTransaction.Date') }}</p>
                                            <input type="date" name="date" class="form-control inputbackgroundDark" id="inputAddress" required
                                                placeholder="please choose transaction date">
                                        </div>

                                        <div class="form-group m-4 col-4">
                                            <p class="font-weight-bold" for="selTrans">
                                                {{ __('translation.walletTransaction.Transaction') }}</p>
                                            <select id='selTrans' class="w-100">
                                                {{-- class="selectbox" --}}
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
                                            <br />
                                            <div id='result'></div>
                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-between">
                                        <div class="form-group m-4 col-4">
                                            <p class="font-weight-bold" for="selTransType">
                                                {{ __('translation.walletTransaction.Transaction Type') }}</p>
                                            <select id='selTransType' class="w-100">
                                                {{-- class="selectbox" --}}
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

                                        <div class="form-group m-4 col-4">
                                            <p class="font-weight-bold" for="inputAddress">
                                                {{ __('translation.walletTransaction.Amount') }}</p>
                                            <input type="number" name="amount" class="form-control inputbackgroundDark" id="inputAddress" required
                                                placeholder="please enter transaction amount ">
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-lg-4">
                                            <button type="submit"
                                                class="btn btn-primary ">{{ __('translation.website.crud.create') }}</button>
                                            <button type="submit"
                                                class="btn btn-primary ">{{ __('translation.website.crud.Create & New') }}</button>
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
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            // Initialize select2
            $("#selUser").select2();
        });
    </script>
    <script>
        $(document).ready(function() {
            // Initialize select2
            $("#selTrans").select2();
        });
    </script>
    <script>
        $(document).ready(function() {
            // Initialize select2
            $("#selTransType").select2();
        });
    </script>
@endpush




{{-- <div class="col-lg-2 offset-6">
    <button type="submit" class="btn btn-danger">{{__('translation.website.crud.Cancel')}}</button>
</div> --}}
