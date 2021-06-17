@extends('layouts.app', ['activePage' => 'allInstallments', 'titlePage' => __('translation.website.sidebar.all
Installments')])

@section('content')
    @livewireStyles
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">


                    <div class="card">
                        <div class="card-header card-header-text  card-header-outline-primary card-header-warning">
                            <div class="card-text">
                                <h4 class="card-title ">{{ __('translation.website.sidebar.all Installments') }}</h4>
                            </div>
                        </div>
                        <br>
                        <div class="card-header card-header-tabs card-header-info" style="padding: 5px;">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    {{-- <span class="nav-tabs-title" > {{ __('translation.website.sidebar.all Installments') }} <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span> --}}
                                    <ul class="nav nav-tabs outline-primary" data-tabs="tabs">
                                        <li class="nav-item " style="width: 50%; text-align:center;">
                                            <a class="nav-link active" href="#install1" data-toggle="tab">
                                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                                                {{ __('translation.installments.installments elly leya') }}
                                            </a>
                                        </li>
                                        <li onclick="getLivewire()" class="nav-item" style="width: 50%; text-align:center;">
                                            <a class="nav-link" href="#install2" data-toggle="tab">
                                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                                                {{ __('translation.installments.installments elly 3laya') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="install1">
                                    <br>
                                    <br>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('translation.installments.id') }}</th>
                                                <th>{{ __('translation.installments.Client name') }}</th>
                                                <th>{{ __('translation.installments.period') }}</th>
                                                <th>{{ __('translation.installments.start date') }}</th>
                                                <th>{{ __('translation.installments.Total invoice value') }}</th>
                                                <th>{{ __('translation.installments.actions') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>3</td>
                                                <td>Andrew Mike</td>
                                                <td>6 months</td>
                                                <td>may 2021</td>
                                                <td>50,000 EG reem</td>


                                                <td class="td-actions">
                                                    <div data-toggle="modal" data-target="#exampleModalLong"
                                                        class="btn btn-info" rel="tooltip"
                                                        title="{{ __('translation.installments.show trans') }}"
                                                        style="color:white;"><i class="material-icons">visibility</i></div>

                                                    <div data-toggle="modal" data-target="#exampleModalLong" rel="tooltip"
                                                        title="{{ __('translation.installments.add trans') }}"
                                                        class="btn btn-primary" style="color:white;"><i
                                                            class="fa fa-plus-circle" aria-hidden="true"></i></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="install2">
                                    <livewire:installments-table />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    @include('layouts.includes.modal',
    ['modalSize'=>"modal-lg",
    'modalTitleColor'=>"",
    'modalTitle'=>"",
    // 'modalBody'=>"<h1>Your First Modal Body Is Here</h1>",
    'modalActions'=>"<button class='btn btn-primary'>Save Changes</button>"
    ])

    {{-- modal body --}}
    <div class="container-fluid d-none" id="modal-content">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Create Transaction') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.walletTransaction.Reason') }}</label>
                                        <input type="text" name="reason" class="form-control" id="inputAddress" required
                                            placeholder="Please enter transaction reason">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.suppliers.Supplier') }}</label>
                                        <br>
                                        <select id='selSupplier' style='width:100%'>
                                            <option value='0'>Select Transaction</option>
                                            <option value='1'>Transaction 1</option>
                                            <option value='2'>Sonarika Bhadoria</option>
                                            <option value='3'>Anil Singh</option>
                                            <option value='4'>Vishal Sahu</option>
                                            <option value='5'>Mayank Patidar</option>
                                            <option value='6'>Vijay Mourya</option>
                                            <option value='7'>Rakesh sahu</option>
                                            <option value='8'>Madonna Mikhail</option>
                                            <option value='9'>Glal Husseiny</option>
                                            <option value='10'>Menna Glal</option>
                                            <option value='11'>Reem</option>
                                        </select>
                                </div>


                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.walletTransaction.Date') }}</label>
                                        <input type="date" name="date" class="form-control" id="inputAddress" required
                                            placeholder="please choose transaction date">
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.walletTransaction.Transaction') }}</label>
                                        <br>
                                        <select id='selTrans' style='width:100%'>
                                            <option value='0'>Select Transaction</option>
                                            <option value='1'>Transaction 1</option>
                                            <option value='2'>Sonarika Bhadoria</option>
                                            <option value='3'>Anil Singh</option>
                                            <option value='4'>Vishal Sahu</option>
                                            <option value='5'>Mayank Patidar</option>
                                            <option value='6'>Vijay Mourya</option>
                                            <option value='7'>Rakesh sahu</option>
                                            <option value='8'>Madonna Mikhail</option>
                                            <option value='9'>Glal Husseiny</option>
                                            <option value='10'>Menna Glal</option>
                                            <option value='11'>Reem</option>
                                        </select>
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.walletTransaction.Transaction Type') }}</label>
                                        <select id='selTransType' style='width:100%'>
                                            <option value='0'>Select Transaction Type</option>
                                            <option value='1'>Transaction Type 1</option>
                                            <option value='2'>Sonarika Bhadoria</option>
                                            <option value='3'>Anil Singh</option>
                                            <option value='4'>Vishal Sahu</option>
                                            <option value='5'>Mayank Patidar</option>
                                            <option value='6'>Vijay Mourya</option>
                                            <option value='7'>Rakesh sahu</option>
                                            <option value='8'>Madonna Mikhail</option>
                                            <option value='9'>Glal Husseiny</option>
                                            <option value='10'>Menna Glal</option>
                                            <option value='11'>Reem</option>
                                        </select>
                                </div>

                                <div class="form-group" style="margin: 20px;">
                                    <p class="font-weight-bold" style="color:black;" for="inputAddress">
                                        {{ __('translation.walletTransaction.Amount') }}</label>
                                        <input type="number" name="amount" class="form-control" id="inputAddress" required
                                            placeholder="please enter transaction amount ">
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection



@push('js')
    <script>
        function getLivewire() {
            Livewire.emit('installLivewire')
        }

        var form = document.getElementById('modal-content');
        document.getElementById('modal-body').innerHTML = form.innerHTML;

    </script>

@endpush
