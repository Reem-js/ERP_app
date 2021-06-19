@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('translation.website.sidebar.Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        {{-- 1) cash card --}}
        <div class="col-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">{{ __('translation.dashboard.cash') }}</h4>
              {{-- <p class="category">Category subtitle</p> --}}
            </div>
            <div class="card-body pt-0">
              <h3 class="card-title">880,000
                <small>{{__('translation.website.crud.EGP')}}</small>
              </h3>
            </div>
          </div>
        </div>
        {{-- 2) debt card --}}
        <div class="col-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">{{ __('translation.dashboard.debts') }}</h4>
            </div>
            <div class="card-body pt-0">
              <h3 class="card-title">880,000
                <small>{{__('translation.website.crud.EGP')}}</small>
              </h3>
            </div>
          </div>
        </div>
        {{-- 3) installments card --}}
        <div class="col-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">{{ __('translation.dashboard.installments') }}</h4>
            </div>
            <div class="card-body pt-0">
              <h3 class="card-title">880,000
                <small>{{__('translation.website.crud.EGP')}}</small>
              </h3>
            </div>
          </div>
        </div>

        {{-- <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-text">
              <div class="card-text ">
                <h4 class="card-title">{{ __('translation.dashboard.cash') }}</h4>
              </div>
              <h3 class="card-title">880,000
                <small>{{__('translation.website.crud.EGP')}}</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats-dashboard">
                <i class="fa fa-credit-card-alt text-primary mr-2"></i>
                <a href="#pablo">{{__('translation.dashboard.See your wallet')}}...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon ">
                  <h4>{{ __('translation.dashboard.debts') }}</h4>
                </div>
                <h3 class="card-title">2
                  <small>EGP</small>
                </h3>
              </div>
              <div class="card-footer">
                <div class="stats-dashboard">
                  <i class="fa fa-credit-card-alt text-primary mr-2"></i>
                  <a href="#pablo">{{__('translation.dashboard.See all installments')}}...</a>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon ">
                  <h4>{{ __('translation.dashboard.installments') }}</h4>
                </div>
                <h3 class="card-title">1,000
                  <small>EGP</small>
                </h3>
              </div>
              <div class="card-footer">
                <div class="stats-dashboard">
                  <i class="fa fa-credit-card-alt text-primary mr-2"></i>
                  <a href="#pablo">{{__('translation.dashboard.See all installments')}}...</a>
                </div>
              </div>
            </div>
        </div> --}}

        <div class="col-6">
          <div class="card card-chart">
            <div class="card-body">
              <div class="card-title d-flex justify-content-between">
                <h4>Daily Sales</h4>
                <div>
                  <div>
                    pre-sales trans: <strong class="font-weight-bold">8 {{ __('invoices') }}</strong>
                  </div>
                  <div>
                    total price: <strong class="font-weight-bold">900 {{__('translation.website.crud.EGP')}}</strong>
                  </div>
                </div>
              </div>
              <p class="card-category">
                <span class="text-success">
                  <i class="fa fa-long-arrow-up"></i> 55%
                </span> increase in today sales.
              </p>
            </div>
            <div class="card_body p-3">
              <div class="card-header card-header-success">
                <div class="ct-chart" id="dailySalesChart"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card card-chart">
            <div class="card-body">
              <div class="card-title d-flex justify-content-between">
                <h4>Daily Purchases</h4>
                <div>
                  <div>
                    pre-purchases trans: <strong class="font-weight-bold">8 {{ __('purchases') }}</strong>
                  </div>
                  <div>
                    total price: <strong class="font-weight-bold">900 {{__('translation.website.crud.EGP')}}</strong>
                  </div>
                </div>
              </div>
              <p class="card-category">
                <span class="text-success">
                  <i class="fa fa-long-arrow-up"></i> 55%
                </span> increase in today purchases.
              </p>
            </div>
            <div class="card_body p-3">
              <div class="card-header card-header-success">
                <div class="ct-chart" id="websiteViewsChart"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-9">
          <div class="card card-chart">
            <div class="card-body">
              <div class="card-title">
                <h4>{{ __('low in stock products') }}</h4>
              </div>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead class="text-success">
                      <th class="text-center">{{ __('translation.website.crud.Number') }}</th>
                      <th>{{__('translation.products.Product Name')}}</th>
                      <th>{{__('translation.products.Total Stock')}}</th>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="text-center">1</td>
                          <td>مرآة</td>
                          <td>1000 قطعة</td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
