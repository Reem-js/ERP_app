@extends('layouts.app', ['activePage' => 'addExpense', 'titlePage' => __('translation.website.sidebar.Create New Expense')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-mode">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
              <h4 class="card-title">{{ __('translation.website.sidebar.Create New Expense') }}</h4>
            </div>
          </div>
          <div class="m-5">
            <div class="card-body">
              <form>
                <div class="form-group" style="margin: 20px;">
                  <p class="font-weight-bold"  for="inputAddress">{{ __('translation.expenses.Value') }}</p>
                  <input type="number" name="expensevalue" class="form-control" id="expensevalue" required>
                </div>

                <div class="form-group" style="margin: 20px;">
                  <p class="font-weight-bold"  for="inputAddress">{{ __('translation.expenses.Date') }}</label>
                    <input type="date" name="expensedate" class="form-control" id="expensedate" required>
                </div>

                <div class="form-group" style="margin: 20px;">
                  <p class="font-weight-bold"  for="inputAddress">{{ __('translation.expenses.Expense Type') }}</label>
                    <br>
                    <select class="form-group form-control " style="width: 100%;">
                      <option value="0">{{ __('translation.expenses.select expense type') }}</option>
                      <option value="1">Audi</option>
                      <option value="2">BMW</option>
                      <option value="3">Citroen</option>
                      <option value="4">Ford</option>
                      <option value="5">Honda</option>
                      <option value="6">Jaguar</option>

                    </select>
                </div>



                <div class="row">
                  <div class="col-lg-4">
                    <button type="submit" class="btn btn-primary">{{__('translation.website.crud.create')}}</button>
                    <button type="submit" class="btn btn-primary">{{__('translation.website.crud.Create & New')}}</button>
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
</div>

@endsection
