@extends('layouts.app', ['activePage' => 'edit-suppliers', 'titlePage' => __('translation.website.sidebar.Edit
Supplier')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Edit Supplier') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col form-group m-4 " >
                                        <p class="font-weight-bold"for="inputAddress">
                                            {{ __('translation.suppliers.Name') }}</p>
                                        <input type="text" name="name" class="form-control " id="inputAddress" required
                                            placeholder="1234 Main St">
                                    </div>
                                    <div class="col form-group m-4" >
                                        <p class="font-weight-bold"for="inputAddress">
                                            {{ __('translation.suppliers.Nickname') }}</p>
                                        <input type="text" name="name" class="form-control " id="inputAddress" required
                                            placeholder="1234 Main St">
                                    </div>
                                    <div class="col form-group m-4 " >
                                        <p class="font-weight-bold"for="inputAddress">
                                            {{ __('translation.suppliers.Email') }}</p>
                                            <input type="email" name="email" class="form-control" id="inputAddress" required
                                                placeholder="1234 Main St">
                                    </div>

                                </div>





                                <div class="row">

                                    <div class="col-4 form-group m-4" >
                                        <p class="font-weight-bold"for="inputAddress">
                                            {{ __('translation.suppliers.Phone') }}</p>
                                            <input type="text" name="phone" class="form-control" id="inputAddress" required
                                                placeholder="1234 Main St">
                                    </div>


                                <div class=" col-6 form-group form-file-upload form-file-multiple m-4" >
                                    <p class="font-weight-bold"for="inputAddress">
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

                            </div>




                                <div class="row mt-5">
                                    <div class="col-lg-4">
                                        <button type="submit" class="btn btn-info ">{{ __('translation.website.crud.update') }}</button>
                                    <button type="submit" class="btn btn-info ">{{ __('translation.website.crud.Update & Return') }}</button>
                                    </div>
                                    <div class="col-lg-2 offset-6">
                                        <button type="submit" class="btn btn-danger"
                                        >{{ __('translation.website.crud.Cancel') }}</button>
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
