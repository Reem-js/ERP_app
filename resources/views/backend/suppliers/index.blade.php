@extends('layouts.app', ['activePage' => 'all-suppliers', 'titlePage' => __('translation.suppliers.common.All Suppliers')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.suppliers.common.All Suppliers') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('suppliers.create') }}" class="btn btn-success btn-round"
                                style="color:white; float: right;"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                {{ __('translation.website.crud.create') }}</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">{{ __('translation.suppliers.common.ID') }}</th>
                                        <th>{{ __('translation.suppliers.common.Name') }}</th>
                                        <th>{{ __('translation.suppliers.common.Nickname') }}</th>
                                        <th>{{ __('translation.suppliers.common.Phone') }}</th>
                                        <th>{{ __('translation.suppliers.common.Address') }}</th>
                                        <th>{{ __('translation.suppliers.common.PDF') }}</th>
                                        <th>{{ __('translation.suppliers.common.Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Andrew Mike</td>
                                        <td>Develop</td>
                                        <td>2013</td>
                                        <td>2013</td>
                                        <td>&euro; 99,225</td>
                                        <td class="td-actions">

                                            <a class="btn btn-info" href="#" style="color:white;"><i
                                                    class="material-icons">person</i></a>
                                            <a class="btn btn-warning" href="{{ route('suppliers.edit', 5) }}"
                                                style="color:white;"> <i class="material-icons">edit</i> </a>
                                            <a class="btn btn-danger"
                                                onclick="if(confirm('Are You Sure?')) {document.getElementById('delete-1').submit();} else {return false;}"
                                                href="javascript:void(0)"><i class="material-icons">close</i></a>
                                            <form method="post" action="{{ route('suppliers.destroy', 5) }}"
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
