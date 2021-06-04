@extends('layouts.app', ['activePage' => 'all-suppliers', 'titlePage' => __('translation.website.sidebar.all
Suppliers')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.all Suppliers') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('suppliers.create') }}" rel="tooltip"
                                title="{{ __('translation.title.create Supplier') }}" class="btn btn-primary btn-round"
                                style="color:white; float:{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"><i
                                    class="fa fa-plus-circle" aria-hidden="true"></i>
                                {{ __('translation.website.crud.create') }}</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">{{ __('translation.suppliers.ID') }}</th>
                                        <th>{{ __('translation.suppliers.Name') }}</th>
                                        <th>{{ __('translation.suppliers.Nickname') }}</th>
                                        <th>{{ __('translation.suppliers.Phone') }}</th>
                                        <th>{{ __('translation.suppliers.Address') }}</th>
                                        <th>{{ __('translation.suppliers.Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Andrew Mike</td>
                                        <td>Develop</td>
                                        <td>2013</td>
                                        <td>&euro; 99,225</td>
                                        <td class="td-actions">
                                            <a class="btn btn-info" rel="tooltip"
                                                title="{{ __('translation.title.Edit Supplier') }}"
                                                href="{{ route('suppliers.edit', 5) }}" style="color:white;"> <i
                                                    class="material-icons">edit</i> </a>

                                            <a class="btn btn-info" rel="tooltip"
                                                title="{{ __('translation.title.show details') }}"
                                                href="{{ route('suppliers.show', 5) }}" style="color:white;"><i
                                                    class="material-icons">visibility</i></a>
                                            <a href="{{ route('priceLists.create') }}" rel="tooltip"
                                                title="{{ __('translation.title.add in price list') }}"
                                                class="btn btn-primary" style="color:white;"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn-danger" rel="tooltip"
                                                title="{{ __('translation.title.Delete Supplier') }}"
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
