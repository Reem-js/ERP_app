@extends('layouts.app', ['activePage' => 'edituserwalletTransaction', 'titlePage' =>
__('translation.website.sidebar.Edit
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
                                    <div class="row">
                                        <div class=" col form-group ">
                                            <p for="inputAddress">
                                                {{ __('translation.walletTransaction.Reason') }}</p>
                                            <input type="text" name="reason" class="form-control" id="inputAddress" required
                                                placeholder="Please enter transaction reason">
                                        </div>

                                        <div class="col form-group ">
                                            <p for="inputAddress">
                                                {{ __('translation.walletTransaction.Date') }}</p>
                                            <input type="date" name="date" class="form-control" id="inputAddress" required
                                                placeholder="please choose transaction date">
                                        </div>
                                        <div class="col form-group ">
                                            <p for="inputAddress">
                                                {{ __('translation.walletTransaction.Amount') }}</p>
                                            <input type="number" name="amount" class="form-control" id="inputAddress"
                                                required placeholder="please enter transaction amount ">
                                        </div>

                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col form-group">
                                            <p class="font-weight-bold" for="seltrans">
                                                {{ __('translation.walletTransaction.Transaction') }}</label>
                                                <br>
                                                <select id="seltrans" class="form-group form-control " style="width: 100%;">
                                                    <option value="0">Select transaction:</option>
                                                    <option value="1">Audi</option>
                                                    <option value="2">BMW</option>
                                                    <option value="3">Citroen</option>
                                                    <option value="4">Ford</option>
                                                    <option value="5">Honda</option>
                                                    <option value="6">Jaguar</option>

                                                </select>
                                        </div>
                                        <div class="col form-group">
                                            <p class="font-weight-bold" for="seltranstype">
                                                {{ __('translation.walletTransaction.Transaction Type') }}</label>
                                                <br>
                                                <select id="seltranstype" class="form-group form-control "
                                                    style="width: 100%;">
                                                    <option value="0">Select transaction type:</option>
                                                    <option value="1">Audi</option>
                                                    <option value="2">BMW</option>
                                                    <option value="3">Citroen</option>
                                                    <option value="4">Ford</option>
                                                    <option value="5">Honda</option>
                                                    <option value="6">Jaguar</option>
                                                </select>
                                        </div>
                                    </div>
                                    @include('crudButtons.update-buttons')
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
            $("#seltrans").select2();
        });
        $(document).ready(function() {
            // Initialize select2
            $("#seltranstype").select2();
        });
    </script>

@endpush
