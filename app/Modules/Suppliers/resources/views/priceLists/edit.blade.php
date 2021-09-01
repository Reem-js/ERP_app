@extends('layouts.app', ['activePage' => 'editpricelist', 'titlePage' => __('translation.website.sidebar.Edit Price List')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Edit Price List') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="m-5">
                                <form method="POST" action="{{ route('suppliers.pricelists.update',['supplier'=>$supplier->slug,'pricelist'=>$pricelist->slug]) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col form-group">
                                            <p class="font-weight-bold" for="inputAddress">
                                                {{ __('translation.pricelists.Name') }}</p>
                                            <input type="text" name="name" class="form-control" id="pricelistname"
                                                required value="{{ $pricelist->name }}">
                                        </div>

                                        <div class=" col form-group">
                                            <p class="font-weight-bold" for="inputAddress">
                                                {{ __('translation.pricelists.Made in') }}</p>
                                            <input type="text" name="made_in" class="form-control" id="madein" required value="{{ $pricelist->made_in }}">
                                        </div>
                                        <div class="col form-group">
                                            <p class="font-weight-bold" for="inputAddress">
                                                {{ __('translation.pricelists.Price') }}</p>
                                            <input type="number" min="1" max="100000000" step="0.1"  name="price" class="form-control" id="price" required value="{{ $pricelist->price }}">
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row mt-5">
                                        <div class="col-lg-4">
                                            <button type="submit" class="btn btn-info" name="redirect"
                                                value="table">{{ __('translation.website.crud.update') }}</button>
                                            <button type="submit" class="btn btn-info" name="redirect"
                                                value="back">{{ __('translation.website.crud.Update & Return') }}</button>
                                        </div>
                                        <div class="col-lg-2 offset-6">
                                            <input type="reset" class="btn btn-danger" value="{{ __('translation.website.crud.Cancel') }}">
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
@endsection
