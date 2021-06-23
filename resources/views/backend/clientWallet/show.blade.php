@extends('layouts.app', ['activePage' => 'showwalletclientTransaction', 'titlePage' => __('translation.website.sidebar.All Transactions')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.All Transactions') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('client-wallet-transactions.create') }}" class="btn btn-info btn-round"
                                style="color:white; float: right;"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                {{ __('translation.website.crud.create') }}</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ __('translation.walletTransaction.ID') }}</th>
                                        <th>{{ __('translation.walletTransaction.Reason') }}</th>
                                        <th>{{ __('translation.walletTransaction.Date') }}</th>
                                        <th>{{ __('translation.walletTransaction.Transaction') }}</th>
                                        <th>{{ __('translation.walletTransaction.Transaction Type') }}</th>
                                        <th>{{ __('translation.walletTransaction.Amount') }}</th>
                                        <th>{{ __("translation.walletTransaction.Actions") }}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>Andrew Mike</td>
                                        <td>Develop</td>
                                        <td>2013</td>
                                        <td>&euro; 99,225</td>
                                        <td>&euro; 99,225</td>

                                        <td class="td-actions">


                                            <a class="btn btn-info"
                                                href="{{ route('client-wallet-transactions.edit', 5) }}"
                                                style="color:white;"> <i class="material-icons">edit</i> </a>
                                            <a class="btn btn-danger"
                                                onclick="if(confirm('Are You Sure?')) {document.getElementById('delete-1').submit();} else {return false;}"
                                                href="javascript:void(0)"><i class="material-icons">close</i></a>
                                            <form method="post"
                                                action="{{ route('client-wallet-transactions.destroy', 5) }}"
                                                style="display:none;" id="delete-1">
                                                @csrf
                                                @method('delete')
                                            </form>
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
