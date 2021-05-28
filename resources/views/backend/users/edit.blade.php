@extends('layouts.app', ['activePage' => 'edit-users', 'titlePage' => __('Edit Users')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                          <div class="card-text">
                            <h4 class="card-title">{{ __("translation.users.common.Edit User") }}</h4>
                          </div>
                        </div>
                        <div class="card-body">
                            <form>
                        <div class="form-group" style="margin: 20px;">
                          <p class="font-weight-bold" style="color:black;" for="inputAddress">{{ __("translation.users.common.Name") }}</label>
                          <input type="text" name="name" class="form-control" id="inputAddress" required placeholder="1234 Main St">
                        </div>

                        <div class="form-group"style="margin: 20px;" >
                            <p class="font-weight-bold" style="color:black;" for="inputAddress">{{ __("translation.users.common.Email") }}</label>
                            <input type="email" name="email" class="form-control" id="inputAddress" required placeholder="1234 Main St">
                        </div>

                        <div class="form-group" style="margin: 20px;">
                            <p class="font-weight-bold" style="color:black;"  for="inputAddress">{{ __("translation.users.common.Phone") }}</label>
                            <input type="text" name="phone" class="form-control" id="inputAddress" required placeholder="1234 Main St">
                        </div>

                        <div class="form-group" style="margin: 20px;">
                            <p class="font-weight-bold" style="color:black;" for="inputAddress">{{ __("translation.users.common.Password") }}</label>
                            <input type="password" name="password" class="form-control" id="inputAddress" required placeholder="1234 Main St">
                        </div>

                        <div class="form-group" style="margin: 20px;">
                            <p class="font-weight-bold" style="color:black;" for="inputAddress">{{ __("translation.users.edit.Confirm Password") }}</label>
                            <input type="password" name="confirmpassword" class="form-control" id="inputAddress" required placeholder="1234 Main St">
                        </div>

                        <button type="submit" class="btn btn-warning" style="margin: 20px;">Edit</button>
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
