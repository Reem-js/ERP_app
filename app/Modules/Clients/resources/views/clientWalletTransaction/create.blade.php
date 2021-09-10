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
                                @include('messages.print-message')
                            </div>
                            <div class="card-body">
                                 <form action="{{ route('store.wallet.trans',$clientwallet->slug) }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                    <div  class="row">
                                        <div class="form-group col-6">
                                            <p class="font-weight-bold" for="inputAddress">
                                                {{ __('translation.walletTransaction.Date') }}</p>
                                            <input type="date" name="date" class="form-control inputbackgroundDark" id="date" required
                                                placeholder="please choose transaction date">
                                        </div>

                                        <div class="form-group  col-6">
                                            <p class="font-weight-bold" for="inputAddress">
                                                {{ __('translation.walletTransaction.Amount') }}</p>
                                            <input type="number" name="amount" class="form-control inputbackgroundDark" id="amount" required
                                                placeholder="please enter transaction amount ">
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-lg-4">
                                            <button type="submit"
                                                class="btn btn-primary" name="redirect" value="table" >{{ __('translation.website.crud.create') }}</button>
                                            <button type="submit"
                                                class="btn btn-primary " name="redirect" value="back">{{ __('translation.website.crud.Create & New') }}</button>
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




