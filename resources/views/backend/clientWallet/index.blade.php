@extends('layouts.app', ['activePage' => 'wallet-clients', 'titlePage' => __('translation.wallet.Client Wallet')])



@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-text card-header-primary">
                      <div class="card-text" style="width:20%; text-align:center;">
                        <h4 class="card-title">{{ __("translation.wallet.Client Wallet") }}</h4>
                      </div>
                    </div>
                    <div class="card-body">
                        <div class="row">

                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('translation.walletTransaction.ID') }}</th>
                            <th>{{ __('translation.clients.Client Name') }}</th>
                            <th>{{ __('translation.clients.Client Phone') }}</th>
                            <th>{{ __('translation.wallet.Total Balance') }}</th>
                            <th>{{ __('translation.wallet.Number Of +') }}</th>
                            <th>{{ __('translation.wallet.Total Paied') }}</th>
                            <th>{{ __('translation.wallet.Pending') }}</th>
                            <th>{{ __('translation.walletTransaction.Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="text-center">3</td>
                            <td><a href="{{ route('clients.edit',5) }}">ay klam</a></td>
                            <td>012457896</td>
                            <td>Develop</td>
                            <td>2013</td>
                            <td>&euro; 99,225</td>
                            <td>&euro; 99,225</td>

                            <td class="td-actions">

                                <a class="btn btn-info"  rel="tooltip"  title="{{ __('translation.title.show Transactions') }}"  href="{{ route('get.client.wallet.trans',5) }}" style="color:white;"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-primary"  rel="tooltip"  title="{{ __('translation.title.Add Transaction') }}" href="{{ route('client-wallet-transactions.create') }}"
                                    style="color:white;"> <i class="fa fa-plus-circle" aria-hidden="true"></i></a>


                            </td>
                        </tr>



                    </tbody>
                </table>




            </div>
                    </div>
                </div>
            </div>
          </div>

        </div>
    </div>
@endsection
