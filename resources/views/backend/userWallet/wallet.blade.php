@extends('layouts.app', ['activePage' => 'wallet-users', 'titlePage' => __('translation.wallet.My Wallet')])



@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <a href="#"class="btn btn-primary btn-round"
                style="color:white; float:{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                {{ __('translation.website.crud.Create initial wallet value') }}</a>
                <div class="card">
                    <div class="card-header card-header-text card-header-primary">
                      <div class="card-text" style="width:20%; text-align:center;">
                        <h4 class="card-title">{{ __("translation.wallet.My Wallet") }}</h4>
                      </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">

                                            <i class="material-icons">
                                                account_balance_wallet
                                            </i>
                                        </div>
                                        <p class="card-category">{{__('translation.wallet.Total Balance')}}</p>
                                        <h3 class="card-title">49/50
                                            <small>EGP</small>
                                        </h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <span class="material-icons">
                                                account_balance_wallet
                                            </span>
                                            <a href="#pablo">Get More Space...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">store</i>
                                        </div>
                                        <p class="card-category">{{ __('translation.wallet.Number Of Transactions') }}</p>
                                        <h3 class="card-title">49/50

                                        </h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            {{-- <i class="material-icons text-danger">warning</i> --}}
                                            <span class="material-icons">
                                                account_balance_wallet
                                            </span>
                                            <a href="#pablo">Get More Space...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">paid</i>
                                        </div>
                                        <p class="card-category">{{__('translation.wallet.Total Paied')}}</p>
                                        <h3 class="card-title">49/50
                                            <small>EGP</small>
                                        </h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            {{-- <i class="material-icons text-danger">warning</i> --}}
                                            <span class="material-icons">
                                                account_balance_wallet
                                            </span>
                                            <a href="#pablo">Get More Space...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">info_outline</i>
                                        </div>
                                        <p class="card-category">{{ __('translation.wallet.Pending')}}</p>
                                        <h3 class="card-title">49/50
                                            <small>EGP</small>
                                        </h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            {{-- <i class="material-icons text-danger">warning</i> --}}
                                            <span class="material-icons">
                                                account_balance_wallet
                                            </span>
                                            <a href="#pablo">Get More Space...</a>
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
    </div>
@endsection
