<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="https://creative-tim.com/" class="simple-text logo-normal">
            {{ __('translation.website.sidebar.ELRAYAN') }}
            {{-- {{ $activePage }} --}}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('translation.website.sidebar.Dashboard') }}</p>
                </a>
            </li>

            {{-- clients --}}
            <li class="nav-item {{ $activePage == 'all-clients' || $activePage == 'createclient' || $activePage == 'edit-clients' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#clients" aria-expanded="false">
                    <i><i class="fa fa-users" aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Clients') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse{{ $activePage == 'all-clients' || $activePage == 'createclient' || $activePage == 'edit-clients' ? ' show' : '' }} " id="clients">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'all-clients' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('clients.index') }}">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal">{{ __('translation.website.sidebar.all Clients') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'createclient' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('clients.create') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('translation.website.sidebar.create client') }} </span>
                            </a>
                        </li>

                    </ul>

                </div>
            </li>
            {{-- client Wallet --}}
            <li class="nav-item{{ $activePage == 'wallet-clients' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('get.client.wallet') }}">
                    <i class="material-icons">account_balance_wallet</i>
                    <span class="sidebar-normal"> {{ __('translation.website.sidebar.Client Wallet') }} </span>
                </a>
            </li>
            {{-- client Wallet Trans --}}
            <li class="nav-item {{ $activePage == 'createclientWalletTransaction' || $activePage == 'walletclientTransaction' || $activePage == 'editwalletTransaction' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#clientWallet" aria-expanded="false">
                    <i class="material-icons">credit_card</i>
                    <p>{{ __('translation.website.sidebar.Client Wallet Trans') }}
                        <b class="caret" style="float: left"></b>
                    </p>

                </a>
                <div class="collapse{{ $activePage == 'createclientWalletTransaction' || $activePage == 'walletclientTransaction' || $activePage == 'editwalletTransaction' ? ' show' : '' }} " id="clientWallet">
                    <ul class="nav">

                        <li class="nav-item{{ $activePage == 'walletclientTransaction' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('client-wallet-transactions.index') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('translation.website.sidebar.All Transactions') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'createclientWalletTransaction' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('client-wallet-transactions.create') }}">
                                <i class="material-icons">account_balance_wallet</i>
                                <span class="sidebar-normal"> {{ __('translation.website.sidebar.Create Transaction') }} </span>
                            </a>
                        </li>
                    </ul>

                </div>
            </li>

            {{-- supplier --}}
            <li class="nav-item {{ $activePage == 'all-suppliers' || $activePage == 'createsupplier' || $activePage == 'edit-suppliers' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#suppliers" aria-expanded="false">
                    <i><i class="fa fa-users" aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Suppliers') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse{{ $activePage == 'all-suppliers' || $activePage == 'createsupplier' || $activePage == 'edit-suppliers' ? ' show' : '' }} " id="suppliers">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'all-suppliers' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('suppliers.index') }}">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal">{{ __('translation.website.sidebar.all Suppliers') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'createsupplier' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('suppliers.create') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('translation.website.sidebar.create suppliers') }} </span>
                            </a>
                        </li>

                    </ul>

                </div>
            </li>
            <!--  Start expenses PART  -------->
            {{-- expenses --}}
            <li class="nav-item {{ ($activePage == 'addExpense' || $activePage == 'allExpense' || $activePage == 'editexpense') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#expenses" aria-expanded="false">
                    <i><i class="fa fa-money" aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Expenses') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'addExpense' || $activePage == 'allExpense' || $activePage == 'editexpense' ? ' show' : '' }} "  id="expenses">
                    <ul class="nav">
                    <li class="nav-item{{ $activePage == 'allExpense' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('expenses.index') }}">
                                <i class="fa fa-usd" aria-hidden="true"></i>
                                <span class="sidebar-normal">{{ __('translation.website.sidebar.ALL Expenses') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'addExpense' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('expenses.create') }}">
                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                                <span class="sidebar-normal">{{ __('translation.website.sidebar.Create New Expense') }} </span>
                            </a>
                        </li>
                     
                    </ul>
                </div>
            </li>

            <!--  End expenses PART  ------------>

            <!--  Start expenses types PART  -------->
            {{-- expenses types --}}
            <li class="nav-item {{ $activePage == 'createexpensetype' || $activePage == 'allexpensestypes' || $activePage == 'editexpensetype' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#expensestypes" aria-expanded="false">
                    <i><i class="fa fa-money" aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Expenses Types') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'createexpensetype' || $activePage == 'allexpensestypes' || $activePage == 'editexpensetype' ? ' show' : '' }} "  id="expensestypes">
                    <ul class="nav">

                    <li class="nav-item{{ $activePage == 'allexpensestypes' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('expensesTypes.index') }}">
                                <i class="fa fa-usd" aria-hidden="true"></i>
                                <span class="sidebar-normal">{{ __('translation.website.sidebar.All Expenses Types') }} </span>
                            </a>
                        </li>

                        <li class="nav-item{{ $activePage == 'createexpensetype' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('expensesTypes.create') }}">
                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                                <span class="sidebar-normal">{{ __('translation.website.sidebar.Create New Expense Type') }} </span>
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </li>
            <!--  End expenses  types PART  ------------>


            <!--  Start price list PART  -------->
            {{-- price list--}}
            <li class="nav-item {{ $activePage == 'createpricelist' || $activePage == 'allpricelists' || $activePage == 'editpricelist' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#pricelists" aria-expanded="false">
                    <i><i class="fa fa-list-alt" aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Price Lists') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'createpricelist' || $activePage == 'allpricelists' || $activePage == 'editpricelist' ? ' show' : '' }} "  id="pricelists">
                    <ul class="nav">
                    <li class="nav-item{{ $activePage == 'allpricelists' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('priceLists.index') }}">
                                <i class="fa fa-usd" aria-hidden="true"></i>
                                <span class="sidebar-normal">{{ __('translation.website.sidebar.All Price Lists') }} </span>
                            </a>
                        </li>

                        <li class="nav-item{{ $activePage == 'createpricelist' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('priceLists.create') }}">
                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                                <span class="sidebar-normal">{{ __('translation.website.sidebar.Create New Price List') }} </span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>
            <!--  End price list PART  ------------>

            <!--  start website info PART  ------------>
            {{-- website info--}}
            <li class="nav-item{{ $activePage == 'website' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('get.website') }}">
                    <i class="material-icons">account_balance_wallet</i>
                    <span class="sidebar-normal" style="font-size: 15px;"> {{ __('translation.website.sidebar.Website Info') }} </span>
                </a>
            </li>
            <!--  End website info PART  ------------>


            <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('table') }}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>



            <!--/ul-->
            <!--/div-->
            {{-- supplier Wallet --}}
            <li class="nav-item{{ $activePage == 'wallet-suppliers' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('get.supplier.wallet') }}">
                    <i class="material-icons">account_balance_wallet</i>
                    <span class="sidebar-normal"> {{ __('translation.website.sidebar.Supplier Wallet') }} </span>
                </a>
            </li>
            {{-- supplier wallet trans --}}
            <li class="nav-item {{ $activePage == 'createSupplierWalletTransaction' || $activePage == 'walletsupplierTransaction' || $activePage == 'editwalletTransaction' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#supplierWallet" aria-expanded="false">
                    <i class="material-icons">credit_card</i>
                    <p>{{ __('translation.website.sidebar.Supplier Wallet Trans') }}
                        <b class="caret"></b>
                    </p>

                </a>
                <div class="collapse{{ $activePage == 'createSupplierWalletTransaction' || $activePage == 'walletsupplierTransaction' || $activePage == 'editwalletTransaction' ? ' show' : '' }} " id="supplierWallet">
                    <ul class="nav">

                        <li class="nav-item{{ $activePage == 'walletsupplierTransaction' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('supplier-wallet-transactions.index') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('translation.website.sidebar.All Transactions') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'createSupplierWalletTransaction' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('supplier-wallet-transactions.create') }}">
                                <i class="material-icons">account_balance_wallet</i>
                                <span class="sidebar-normal"> {{ __('translation.website.sidebar.Create Transaction') }} </span>
                            </a>
                        </li>
                    </ul>

                </div>
            </li>

            {{-- users --}}
            <li class="nav-item {{ $activePage == 'all-users' || $activePage == 'createUser' || $activePage == 'edit-users' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#User" aria-expanded="false">
                    <i><i class="fa fa-users" aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Users') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'all-users' || $activePage == 'createUser' || $activePage == 'edit-users' ? ' show' : '' }}" id="User">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'all-users' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal">{{ __('translation.website.sidebar.All Users') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'createUser' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('users.create') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('translation.website.sidebar.Create User') }} </span>
                            </a>
                        </li>

                    </ul>

                </div>
            </li>
            {{-- user wallet --}}
            <li class="nav-item{{ $activePage == 'wallet-users' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('get.user.wallet') }}">
                    <i class="material-icons">account_balance_wallet</i>
                    <span class="sidebar-normal"> {{ __('translation.website.sidebar.My Wallet') }} </span>
                </a>
            </li>
            {{-- user wallet Trans --}}
            <li class="nav-item {{ ($activePage == 'createUserwalletTransaction' || $activePage == 'allUserTransactions' || $activePage == 'editwalletTransaction') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#userWallettrans" aria-expanded="false">
                    <i class="material-icons">credit_card</i>
                    <p>{{ __('translation.website.sidebar.My Wallet Trans') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ ($activePage == 'createUserwalletTransaction' || $activePage == 'allUserTransactions' || $activePage == 'editwalletTransaction') ? ' show' : '' }} " id="userWallettrans">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'allUserTransactions' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user-wallet-transactions.index') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('translation.website.sidebar.All Transactions') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'createUserwalletTransaction' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user-wallet-transactions.create') }}">
                                <i class="material-icons">account_balance_wallet</i>
                                <span class="sidebar-normal"> {{ __('translation.website.sidebar.Create Transaction') }} </span>
                            </a>
                        </li>

                    </ul>

                </div>
            </li>


        </ul>
    </div>
</div>