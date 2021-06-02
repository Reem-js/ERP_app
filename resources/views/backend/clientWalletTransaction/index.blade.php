@extends('layouts.app', ['activePage' => 'walletclientTransaction', 'titlePage' => __('translation.clients.common.All Client Transaction')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.clients.common.All Client Transaction') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('client-wallet-transactions.create') }}" class="btn btn-success btn-round"
                                style="color:white; float: right;"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                {{ __('translation.website.crud.create') }}</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ __('translation.users.common.ID') }}</th>
                                        <th>{{ __('translation.users.transaction.Reason') }}</th>
                                        <th>{{ __('translation.users.transaction.Date') }}</th>
                                        <th>{{ __('translation.users.transaction.Transaction') }}</th>
                                        <th>{{ __('translation.users.transaction.Transaction Type') }}</th>
                                        <th>{{ __('translation.users.transaction.Amount') }}</th>
                                        <th>Actions</th>
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

                                            <a class="btn btn-info" href="#" style="color:white;"><i
                                                    class="material-icons">person</i></a>
                                            <a class="btn btn-warning"
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
