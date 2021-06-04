@extends('layouts.app', ['activePage' => 'editRole', 'titlePage' => __('translation.website.sidebar.Edit Role')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Edit Role') }}</h4>
                            </div>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="m-5">
                                    <div class="form-group">
                                        <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                            {{ __('translation.permissions.Name') }}</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.All Permissions') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row m-5">
                                <div class="col-12 my-3">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        {{-- permissions_roles[][permission_id] --}}
                                        <input type="checkbox" class="custom-control-input " name="permission_id[]" value=""
                                            id="customControlAutosizing">
                                        <label class="custom-control-label font-weight-bold" for="customControlAutosizing">All</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        {{-- permissions_roles[][permission_id] --}}
                                        <input type="checkbox" class="custom-control-input" name="permission_id[]" value=""
                                            id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">test 1</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        {{-- permissions_roles[][permission_id] --}}
                                        <input type="checkbox" class="custom-control-input" name="permission_id[]" value=""
                                            id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">test 2</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        {{-- permissions_roles[][permission_id] --}}
                                        <input type="checkbox" class="custom-control-input" name="permission_id[]" value=""
                                            id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">test 3</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        {{-- permissions_roles[][permission_id] --}}
                                        <input type="checkbox" class="custom-control-input" name="permission_id[]" value=""
                                            id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">test 4</label>
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                            <p class='alert alert-warning'>No Permissions</p>
                                        </div> --}}
                            </div>

                        </div>
                        <div class="row m-5">
                            <div class="col-lg-8">
                                <button type="submit"
                                    class="btn btn-info">{{ __('translation.website.crud.update') }}</button>
                                <button type="submit"
                                    class="btn btn-info">{{ __('translation.website.crud.Update & Return') }}</button>
                            </div>
                            <div class="col-lg-2 offset-2">
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
@endsection



@push('js')
    <script>
        $('#customControlAutosizing').change(function() {
            // this will contain a reference to the checkbox
            if (this.checked) {
                // the checkbox is checked
                $('.custom-control-input').attr('checked', 'checked');
            } else {
                // the checkbox is now no longer checked
                $('.custom-control-input').removeAttr('checked');
            }
        });

    </script>
@endpush
