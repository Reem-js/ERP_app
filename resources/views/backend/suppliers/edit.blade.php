@extends('layouts.app', ['activePage' => 'edit-suppliers', 'titlePage' => __('Edit Supplier')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-text card-header-primary">
                              <div class="card-text">
                                <h4 class="card-title">{{__("translation.suppliers.common.Edit Supplier")}}</h4>
                              </div>
                            </div>
                            <div class="card-body">
                                 <form>
                        <div class="form-group" style="margin: 20px;">
                          <p class="font-weight-bold" style="color:black;" for="inputAddress">{{ __("translation.suppliers.common.Name") }}</label>
                          <input type="text" name="name" class="form-control" id="inputAddress" required placeholder="1234 Main Sv">
                        </div>

                        <div class="form-group"style="margin: 20px;" >
                            <p class="font-weight-bold" style="color:black;" for="inputAddress">{{ __("translation.suppliers.common.Nickname") }}</label>
                            <input type="text" name="nickname" class="form-control" id="inputAddress" required placeholder="1234 Main St">
                        </div>

                        <div class="form-group" style="margin: 20px;">
                            <p class="font-weight-bold" style="color:black;"  for="inputAddress">{{ __("translation.suppliers.common.Phone") }}</label>
                            <input type="text" name="phone" class="form-control" id="inputAddress" required placeholder="1234 Main St">
                        </div>

                        <div class="form-group" style="margin: 20px;">
                            <p class="font-weight-bold" style="color:black;" for="inputAddress">{{ __("translation.suppliers.common.Address") }}</label>
                            <input type="text" name="address" class="form-control" id="inputAddress" required placeholder="1234 Main St">
                        </div>

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
                           <button type="submit" class="btn btn-warning" style="margin: 20px;">Edit</button>
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
