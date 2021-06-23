@extends('layouts.app', ['activePage' => 'createsupplier', 'titlePage' => __('translation.website.sidebar.create suppliers')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.create suppliers') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold"  for="inputAddress">
                                        {{ __('translation.suppliers.Name') }}</p>
                                    <input type="text" name="name" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold"  for="inputAddress">
                                        {{ __('translation.suppliers.Email') }}</p>
                                        <input type="email" name="email" class="form-control" id="inputAddress" required
                                            placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold"  for="inputAddress">
                                        {{ __('translation.suppliers.Phone') }}</p>
                                        <input type="text" name="phone" class="form-control" id="inputAddress" required
                                            placeholder="1234 Main St">
                                </div>


                                <div class="form-group form-file-upload form-file-multiple" style="margin: 20px;">
                                    <p class="font-weight-bold"  for="inputAddress">
                                        {{ __('translation.suppliers.Price Lists') }}</p>
                                    <input type="file" multiple="" class="inputFileHidden">
                                    <div class="input-group">
                                        <input type="text" name="media" class="form-control inputFileVisible"
                                            placeholder="Multiple Files" multiple>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-fab btn-round btn-primary">
                                                <i class="material-icons">layers</i>
                                            </button>
                                        </span>
                                    </div>
                                </div>





                                <div class="form-group" style="margin: 20px;">
                                    <button type="submit" class="btn btn-primary" style="margin: 20px;">{{__('translation.website.crud.create')}}</button>
                                    <button type="submit" class="btn btn-primary" style="margin: 20px;">{{__('translation.website.crud.Create & New')}}</button>                            </form>
                                    <button type="submit" class="btn btn-danger"  style="margin: 20px; float:{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}">{{__('translation.website.crud.Cancel')}}</button>
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

