@extends('layouts.app', ['activePage' => 'editwalletTransaction', 'titlePage' => __('translation.website.sidebar.Edit
Transaction')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="card card-mode">
                            <div class="card-header card-header-text card-header-info">
                                <div class="card-text">
                                    <h4 class="card-title">{{ __('translation.website.sidebar.Edit Transaction') }}</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group m-4">
                                        <p class="font-weight-bold" for="inputAddress">
                                            {{ __('translation.walletTransaction.Reason') }}</p>
                                        <input type="text" name="reason" class="form-control" id="inputAddress" required
                                            placeholder="Please enter transaction reason">
                                    </div>

                                    <div class="form-group m-4">
                                        <p class="font-weight-bold" for="inputAddress">
                                            {{ __('translation.suppliers.Supplier') }}</label>
                                            <br>
                                            <select class="form-group form-control w-100">
                                                <option value="0">Select supplier:</option>
                                                <option value="1">Audi</option>
                                                <option value="2">BMW</option>
                                                <option value="3">Citroen</option>
                                                <option value="4">Ford</option>
                                                <option value="5">Honda</option>
                                                <option value="6">Jaguar</option>

                                            </select>
                                    </div>

                                    <div class="form-group m-4">
                                        <p class="font-weight-bold" for="inputAddress">
                                            {{ __('translation.walletTransaction.Date') }}</p>
                                        <input type="date" name="date" class="form-control" id="inputAddress" required
                                            placeholder="please choose transaction date">
                                    </div>

                                    <div class="form-group m-4">
                                        <p class="font-weight-bold" for="inputAddress">
                                            {{ __('translation.walletTransaction.Transaction') }}</p>
                                        <br>
                                        <select class="form-group form-control w-100">
                                            <option value="0">Select transaction:</option>
                                            <option value="1">Audi</option>
                                            <option value="2">BMW</option>
                                            <option value="3">Citroen</option>
                                            <option value="4">Ford</option>
                                            <option value="5">Honda</option>
                                            <option value="6">Jaguar</option>

                                        </select>
                                    </div>

                                    <div class="form-group m-4">
                                        <p class="font-weight-bold" for="inputAddress">
                                            {{ __('translation.walletTransaction.Transaction Type') }}</p>
                                        <select class="form-group form-control w-100" name="trans_type" required>
                                            <option value="0">Select transaction type:</option>
                                            <option value="1">Audi</option>
                                            <option value="2">BMW</option>
                                            <option value="3">Citroen</option>
                                            <option value="4">Ford</option>
                                            <option value="5">Honda</option>
                                        </select>
                                    </div>

                                    <div class="form-group m-4">
                                        <p class="font-weight-bold" for="inputAddress">
                                            {{ __('translation.walletTransaction.Amount') }}</p>
                                        <input type="number" name="amount" class="form-control" id="inputAddress" required
                                            placeholder="please enter transaction amount ">
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-lg-4 d-flex">
                                            <button type="submit"
                                                class="btn btn-info m-4">{{ __('translation.website.crud.update') }}</button>
                                            <button type="submit"
                                                class="btn btn-info m-4">{{ __('translation.website.crud.Update & Return') }}</button>
                                        </div>
                                        <div class="col-lg-2 offset-6">
                                            <button type="submit"
                                                class="btn btn-danger m-4">{{ __('translation.website.crud.Cancel') }}</button>
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
@endsection
