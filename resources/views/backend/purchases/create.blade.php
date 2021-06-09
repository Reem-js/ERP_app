@extends('layouts.app', ['activePage' => 'addPurchase', 'titlePage' => __('translation.website.sidebar.Create
Purchases')])


@section('content')
@livewireStyles
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title ">{{ __('translation.website.sidebar.Create Purchases') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form novalidate>




                                {{-- <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist"
                                                aria-expanded="true">
                                                {{ __('translation.purchase.cash') }}
                                            </a> --}}

                                {{-- <a class="nav-link" data-toggle="tab" href="#link2" role="tablist"
                                                aria-expanded="false">
                                                {{ __('translation.purchase.Credit') }}
                                            </a> --}}




                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.pricelists.Supplier') }}</label>

                                        <select class="form-group form-control " style="width: 25%;">
                                            <option value="0">
                                                {{ __('translation.pricelists.select supplier') }}
                                            </option>
                                            <option><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i>{{ __('translation.purchase.add row') }}
                                            </option>
                                            <option value="2">BMW</option>
                                            <option value="3">Citroen</option>
                                            <option value="4">Ford</option>
                                            <option value="5">Honda</option>
                                            <option value="6">Jaguar</option>

                                        </select>
                                </div>

                               <livewire:all-purchases/>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <button type="submit"
                                            class="btn btn-primary">{{ __('translation.website.crud.create') }}</button>
                                        <button type="submit"
                                            class="btn btn-primary">{{ __('translation.website.crud.Create & New') }}</button>
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



    </div>
    </div>
    </div>
    @livewireScripts
@endsection
