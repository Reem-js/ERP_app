@extends('layouts.app', ['activePage' => 'createsupplier', 'titlePage' => __('translation.suppliers.common.Add New Supplie')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-success">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.suppliers.common.Add New Supplier') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.users.common.Name') }}</p>
                                    <input type="text" name="name" class="form-control" id="inputAddress" required
                                        placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.users.common.Email') }}</label>
                                        <input type="email" name="email" class="form-control" id="inputAddress" required
                                            placeholder="1234 Main St">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.users.common.Phone') }}</label>
                                        <input type="text" name="phone" class="form-control" id="inputAddress" required
                                            placeholder="1234 Main St">
                                </div>


                                <div class="form-group form-file-upload form-file-multiple">
                                    <input type="file" multiple="" class="inputFileHidden">
                                    <div class="input-group">
                                        <input type="text" name="media" class="form-control inputFileVisible"
                                            placeholder="Multiple Files" multiple>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-fab btn-round btn-info">
                                                <i class="material-icons">layers</i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <br><br>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-raised">
                                        <img src="{{ asset('images/upload.jpg') }}"
                                            rel="nofollow" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="..." />
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                            data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>




                                <div class="form-group" style="margin: 20px;">
                                    <button type="submit" class="btn btn-success" style="margin: 20px;"> {{__('translation.website.crud.create')}}</button>
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
