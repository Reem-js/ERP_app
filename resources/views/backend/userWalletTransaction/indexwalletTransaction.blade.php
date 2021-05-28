@extends('layouts.app', ['activePage' => 'all-users', 'titlePage' => __('All Users')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" rel="tooltip" class="btn btn-success" style="float: right;">
                        <a href="{{ route('user-wallet-transactions.create') }}" style="color:white;"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    </button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-right">{{ __('translation.users.common.ID') }}</th>
                                <th class="text-center">{{ __('translation.users.transaction.Reason') }}</th>
                                <th>{{ __('translation.users.transaction.Date') }}</th>
                                <th>{{ __('translation.users.transaction.Transaction') }}</th>
                                <th>{{ __('translation.users.transaction.Transaction Type') }}</th>
                                <th >{{ __('translation.users.transaction.Amount') }}</th>
                                <th >{{ __('translation.users.common.Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Andrew Mike</td>
                                <td>Develop</td>
                                <td>2013</td>
                                <td >&euro; 99,225</td>
                                <td >&euro; 99,225</td>
                                <td class="td-actions">

                                    <button type="button" rel="tooltip" class="btn btn-info">
                                        <a href="#" style="color:white;" ><i class="material-icons">person</i></as>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-warning">
                                        <a href="{{ route('user-wallet-transactions.edit',5) }}"  style="color:white;" >  <i class="material-icons">edit</i> </a>
                                    </button>
                                    <form method="post" action="{{ route('user-wallet-transactions.destroy',5) }}" style="display: inline;">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="">
                                        <button class="btn btn-danger form-group  "><i class="material-icons">close</i></button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Andrew Mike</td>
                                <td>Develop</td>
                                <td>2013</td>
                                <td >&euro; 99,225</td>
                                <td >&euro; 99,225</td>

                                <td class="td-actions">

                                    <button type="button" rel="tooltip" class="btn btn-info">
                                        <a href="#" style="color:white;" ><i class="material-icons">person</i></as>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-warning">
                                        <a href="{{ route('user-wallet-transactions.edit',5) }}"  style="color:white;" >  <i class="material-icons">edit</i> </a>
                                    </button>
                                    <form method="post" action="{{ route('user-wallet-transactions.destroy',5) }}" style="display: inline;">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="">
                                        <button class="btn btn-danger form-group  "><i class="material-icons">close</i></button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Andrew Mike</td>
                                <td>Develop</td>
                                <td>2013</td>
                                <td >&euro; 99,225</td>
                                <td >&euro; 99,225</td>

                                <td class="td-actions">

                                    <button type="button" rel="tooltip" class="btn btn-info">
                                        <a href="#" style="color:white;" ><i class="material-icons">person</i></as>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-warning">
                                        <a href="{{ route('user-wallet-transactions.edit',5) }}"  style="color:white;" >  <i class="material-icons">edit</i> </a>
                                    </button>
                                    <a class="btn btn-danger btn-sm" onclick="if(confirm('Are You Sure?')) {document.getElementById('delete-1').submit();} else {return false;}" href="javascript:void(0)"><i class="material-icons">close</i></a>
                                    <form  method="post" action="{{ route('user-wallet-transactions.destroy',5) }}" style="display:none;" id="delete-1">
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
@endsection
