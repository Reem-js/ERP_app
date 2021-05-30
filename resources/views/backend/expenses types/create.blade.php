@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('Add Expense')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="get" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
            

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Expense') }}</h4>
               
              </div>
              <div class="card-body ">
                
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('translation.expenses.value') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="value" id="input-email" type="number" placeholder="$" value="{{ old('email', auth()->user()->email) }}" required />
                      
                        
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Date') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="date" id="date" type="date" placeholder="{{ __('$') }}" value="{{ old('email', auth()->user()->email) }}" required />
                      
                        
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Type of Expense') }}</label>
                  <div class="col-sm-7">
                    
                    <div class="form-group">
                      <select class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect1">
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5</option>
                       </select>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('ADD') }}</button>
                <button type="" class="btn btn-primary btn-link">{{ __('cancel') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
@endsection

