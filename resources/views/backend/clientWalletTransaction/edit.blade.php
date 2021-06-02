@extends('layouts.app', ['activePage' => 'editwalletTransaction', 'titlePage' => __('translation.clients.common.Edit Client-Transaction')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-text card-header-primary">
                                <div class="card-text">
                                    <h4 class="card-title">{{ __('translation.clients.common.Edit Client-Transaction') }}</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black;"
                                            for="inputAddress">{{ __('translation.users.transaction.Reason') }}</p>
                                        <input type="text" name="reason" class="form-control" id="inputAddress" required
                                            placeholder="Please enter transaction reason">
                                    </div>

                                    <div class="form-group" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black;"
                                            for="inputAddress">{{ __('translation.users.transaction.Date') }}</p>
                                        <input type="date" name="date" class="form-control" id="inputAddress" required
                                            placeholder="please choose transaction date">
                                    </div>

                                    <div class="form-group" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black;"
                                            for="inputAddress">{{ __('translation.users.transaction.Transaction') }}</p>
                                        <br>
                                        <select class="form-group form-control " style="width: 100%;">
                                            <option value="0">Select transaction:</option>
                                            <option value="1">Audi</option>
                                            <option value="2">BMW</option>
                                            <option value="3">Citroen</option>
                                            <option value="4">Ford</option>
                                            <option value="5">Honda</option>
                                            <option value="6">Jaguar</option>

                                        </select>
                                    </div>

                                    <div class="form-group" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black;"
                                            for="inputAddress">{{ __('translation.users.transaction.Transaction Type') }}</p>
                                            <select class="form-group form-control" name="trans_type" style="width: 100%;" required>
                                                <option value="0">Select transaction type:</option>
                                                <option value="1">Audi</option>
                                                <option value="2">BMW</option>
                                                <option value="3">Citroen</option>
                                                <option value="4">Ford</option>
                                                <option value="5">Honda</option>
                                            </select>
                                    </div>

                                    <div class="form-group" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black;"
                                            for="inputAddress">{{ __('translation.users.transaction.Amount') }}</p>
                                        <input type="number" name="amount" class="form-control" id="inputAddress" required
                                            placeholder="please enter transaction amount ">
                                    </div>

                                    <button type="submit" class="btn btn-success" style="margin: 20px;">{{__('translation.website.crud.update')}}</button>
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
