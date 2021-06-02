@extends('layouts.app', ['activePage' => 'editexpensetype', 'titlePage' => __('translation.website.sidebar.Edit Expense Type')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-text card-header-info">
            <div class="card-text">
              <h4 class="card-title">{{ __('translation.website.sidebar.Edit Expense Type') }}</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="m-5">
              <form>
                <div class="form-group" style="margin: 20px;">
                  <p class="font-weight-bold" style="color:black;" for="inputAddress">{{ __('translation.expenses types.Expense Type Name') }}</p>
                  <input type="text" name="expensetypename" class="form-control" id="expensetypename" required>
                </div>





                <div class="row mt-5">
                  <div class="col-lg-4">
                    <button type="submit" class="btn btn-info">{{__('translation.website.crud.update')}}</button>
                    <button type="submit" class="btn btn-info">{{__('translation.website.crud.Update & Return')}}</button>
                  </div>
                  <div class="col-lg-2 offset-6">
                    <button type="submit" class="btn btn-danger">{{__('translation.website.crud.Cancel')}}</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  @endsection