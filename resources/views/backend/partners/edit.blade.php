@extends('layouts.app', ['activePage' => 'editPartner', 'titlePage' => __('translation.website.sidebar.Edit Partner')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-mode">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
              <h4 class="card-title">{{ __('translation.website.sidebar.Edit Partner') }}</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="m-5">
              <form>

                <div class="form-group" style="margin: 20px;">
                  <p class="font-weight-bold"  for="inputAddress">{{ __('translation.pricelists.Name') }}</p>
                  <input type="text" name="pricelistname" class="form-control" id="pricelistname" required>
                </div>

                <div class="form-group" style="margin: 20px;">
                  <p class="font-weight-bold"  for="inputAddress">{{ __('translation.dividendIncome.Capital') }}</p>
                  <input type="text" name="madein" class="form-control" id="madein" required>
                </div>
                @include('crudButtons.update-buttons')
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
