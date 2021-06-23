@extends('layouts.app', ['activePage' => 'createUserwalletTransaction', 'titlePage' =>
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
                                    <h4 class="card-title">{{ __('translation.website.sidebar.Create Transaction') }}
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div  class="form-group m-4">
                                        <p class="font-weight-bold"  for="inputAddress">
                                            {{ __('translation.walletTransaction.Reason') }}</p>
                                        <input type="text" name="reason" class="form-control" id="inputAddress" required
                                            placeholder="Please enter transaction reason">
                                    </div>

                                    <div  class="form-group m-4">
                                        <p class="font-weight-bold"  for="inputAddress">
                                            {{ __('translation.walletTransaction.Date') }}</p>
                                        <input type="date" name="date" class="form-control" id="inputAddress" required
                                            placeholder="please choose transaction date">
                                    </div>

                                    {{-- if adef ras mal --}}
                                    <div  class="form-group m-4">
                                        <p class="font-weight-bold"  for="inputAddress">
                                            {{ __('translation.walletTransaction.Transaction Type') }}</p>
                                        <select id="transSelect" onchange="myFunction()" class="form-group form-control  w-100"
                                            name="trans_type" required>
                                            <option value="0">Select transaction type:</option>
                                            <option value="b7sal est mo3yan">b7sal est mo3yan </option>
                                            <option value="bdfa3 mo3yan">bdfa3 mo3yan </option>
                                            <option value="adef ras mal">adef ras mal</option>
                                        </select>
                                    </div>

                                    <div  class="form-group m-4 d-none"id="installment">
                                        <p class="font-weight-bold"  for="inputAddress">
                                            {{ __('translation.walletTransaction.Installment') }}</p>
                                        <br>
                                        <select class="form-group form-control w-100 ">
                                            <option value="0">Select transaction:</option>
                                            <option value="1">Audi</option>
                                            <option value="2">BMW</option>
                                            <option value="3">Citroen</option>
                                            <option value="4">Ford</option>
                                            <option value="5">Honda</option>
                                            <option value="6">Jaguar</option>

                                        </select>
                                    </div>


                                    <div  class="form-group m-4">
                                        <p class="font-weight-bold"  for="inputAddress">
                                            {{ __('translation.walletTransaction.Amount') }}</p>
                                        <input type="number" name="amount" class="form-control" id="inputAddress" required
                                            placeholder="please enter transaction amount ">
                                    </div>



                            <div class="row mt-5">
                                <div class="col-lg-4 d-flex">
                                    <button type="submit" class="btn btn-primary m-4"
                                    >{{ __('translation.website.crud.create') }}</button>
                                 <button type="submit" class="btn btn-primary m-4"
                                    >{{ __('translation.website.crud.Create & New') }}</button>
                                </div>
                                <div class="col-lg-2 offset-6">
                                    <button type="submit" class="btn btn-danger m-4"
                                    >{{ __('translation.website.crud.Cancel') }}</button>                                </div>
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
        function myFunction() {
            var x = document.getElementById("transSelect").value;
            if (x != 'adef ras mal') {
                $("#installment").css("display", "");
            }
            if (x == 'adef ras mal') {
                $("#installment").css("display", "none");
            }
            {{--  --}}
        }

    </script>
@endpush
