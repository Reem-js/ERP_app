@extends('layouts.app', ['activePage' => 'all-suppliers', 'titlePage' => __('translation.website.sidebar.all
Suppliers')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.all Suppliers') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                                <div class="col-lg-12 text-right">
                                    <a href="{{ route('suppliers.create') }}" rel="tooltip"
                                    title="{{ __('translation.title.create Supplier') }}" class="btn btn-primary btn-round mb-3"
                                ><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    {{ __('translation.website.crud.create') }}</a>                                </div>
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
                                    @forelse ($suppliers as $supplier)
                                    <tr>
                                        <td class="text-center">{{$supplier->id}}</td>
                                        <td>{{$supplier->name}}</td>
                                        <td>{{$supplier->nickname}}</td>
                                        <td>{{$supplier->phone}}</td>
                                        <td>{{$supplier->address}}</td>
                                        <td class="td-actions">
                                            <a class="btn btn-info" rel="tooltip"
                                                title="{{ __('translation.title.Edit Supplier') }}"
                                                href="{{ route('suppliers.edit', $supplier->slug) }}"> <i
                                                    class="material-icons">edit</i> </a>

                                            <a class="btn btn-info" rel="tooltip"
                                                title="{{ __('translation.title.show details') }}"
                                                href="{{ route('suppliers.show', $supplier->slug) }}"><i
                                                    class="material-icons">visibility</i></a>
                                            <a href="{{ route('priceLists.create') }}" rel="tooltip"
                                                title="{{ __('translation.title.add in price list') }}"
                                                class="btn btn-primary""><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn-danger" rel="tooltip"
                                                title="{{ __('translation.title.Delete Supplier') }}"
                                                onclick="if(confirm('Are You Sure?')) {document.getElementById('delete-1').submit();} else {return false;}"
                                                href="javascript:void(0)"><i class="material-icons">close</i></a>
                                            <form method="post" class="d-none" action="{{ route('suppliers.destroy', $supplier->slug) }}"
                                                 id="delete-1">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>

                                    @empty
                                       {{ __('translation.empty.suppliers') }}
                                    @endforelse
                                    

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
