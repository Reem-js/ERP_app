<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  {{-- Logo --}}
    <div class="logo">
        <a href="https://creative-tim.com/" class="simple-text logo-normal">
            {{ __('translation.website.sidebar.ELRAYAN') }}
            {{-- {{ $activePage }} --}}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            {{-- Dashboard --}}
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fa fa-tachometer {{$activePage == 'dashboard' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                    <p>{{ __('translation.website.sidebar.Dashboard') }}</p>
                </a>
            </li>
            {{-- Brands --}}
            <li
                class="nav-item {{ $activePage == 'allBrands' || $activePage == 'createBrand' || $activePage == 'editBrand' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#Brand" aria-expanded="false">
                    <i class="fa fa-car text-primary " aria-hidden="true"></i>
                    <p>{{ __('translation.website.sidebar.Brands') }}
                        <b class="caret" style="{{ app()->getLocale() == 'ar' ? 'margin-right: 180px;' : '' }}"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'allBrands' || $activePage == 'createBrand' || $activePage == 'editBrand' ? 'show' : '' }}"
                    id="Brand">
                    <ul class="nav">
                        <li class="nav-item ml-3 {{ $activePage == 'allBrands' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('brands.index') }}">
                                <i class="fa fa-th-list {{$activePage == 'allBrands' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>

                                {{ __('translation.website.sidebar.All Brands') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3{{ $activePage == 'createBrand' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('brands.create') }}">
                                <i class="fa fa-plus-square  {{$activePage == 'createBrand' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                    {{ __('translation.website.sidebar.Create Brand') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Categories --}}
            <li
                class="nav-item {{ $activePage == 'allCategories' || $activePage == 'createCategory' || $activePage == 'editCategory' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#Category" aria-expanded="false">
                    <i class="material-icons text-primary">dashboard</i>
                    <p>{{ __('translation.website.sidebar.Categories') }}
                        <b class="caret" style="{{ app()->getLocale() == 'ar' ? 'margin-right: 180px;' : '' }}"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'allCategories' || $activePage == 'createCategory' || $activePage == 'editCategory' ? ' show' : '' }}"
                    id="Category">
                    <ul class="nav">
                        <li class="nav-item ml-3 {{ $activePage == 'allCategories' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('categories.index') }}">
                                <i class="fa fa-th-list {{$activePage == 'allCategories' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Categories') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'createCategory' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('categories.create') }}">
                                <i class="fa fa-plus-square  {{$activePage == 'createCategory' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                    {{ __('translation.website.sidebar.Create Category') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Products --}}
            <li
                class="nav-item {{ $activePage == 'allProducts' || $activePage == 'showProduct' || $activePage == 'editProduct' || $activePage == 'productHistory' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#Product" aria-expanded="false">
                    <i class="fa fa-shopping-cart text-primary" aria-hidden="true"></i>
                    <p>{{ __('translation.website.sidebar.Stock') }}
                        <b class="caret" style="{{ app()->getLocale() == 'ar' ? 'margin-right: 180px;' : '' }}"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'allProducts' || $activePage == 'showProduct' || $activePage == 'editProduct' || $activePage == 'productHistory' ? ' show' : '' }}"
                    id="Product">
                    <ul class="nav">
                        <li class="nav-item ml-3 {{ $activePage == 'allProducts' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('products.index') }}">
                                <i class="fa fa-th-list {{$activePage == 'allProducts' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Products') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- clients --}}
            <li class="nav-item {{ $activePage == 'all-clients' || $activePage == 'createclient' || $activePage == 'edit-clients' || $activePage == 'show-clients' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#clients" aria-expanded="false">
                    <i><i class="fa fa-users text-primary" aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Clients') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse{{ $activePage == 'all-clients' || $activePage == 'createclient' || $activePage == 'edit-clients' || $activePage == 'show-clients' ? ' show' : '' }} " id="clients">
                    <ul class="nav">
                        <li class="nav-item ml-3 {{ $activePage == 'all-clients' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('clients.index') }}">
                                <i class="fa fa-th-list {{$activePage == 'all-clients' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.all Clients') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'createclient' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('clients.create') }}">
                                <i class="fa fa-plus-square  {{$activePage == 'createclient' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                    {{ __('translation.website.sidebar.create client') }}
                            </a>
                        </li>

                    </ul>

                </div>
            </li>
            {{-- client Wallet --}}
            <li class="nav-item{{ $activePage == 'wallet-clients' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('get.client.wallet') }}">
                    <i class="fa fa-credit-card-alt {{$activePage == 'wallet-clients' ? 'text-light' : 'text-primary'}} " aria-hidden="true"></i>
                     {{ __('translation.website.sidebar.Client Wallet') }} 
                </a>
            </li>
            {{-- client Wallet Trans --}}
            <li
                class="nav-item {{ $activePage == 'createclientWalletTransaction' || $activePage == 'walletclientTransaction' || $activePage == 'editclientwalletTransaction' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#clientWallet" aria-expanded="false">
                    <i class="fa fa-credit-card-alt text-primary" aria-hidden="true"></i>
                    <p>{{ __('translation.website.sidebar.Client Wallet Trans') }}
                        <b class="caret" style="float: left"></b>
                    </p>

                </a>
                <div class="collapse{{ $activePage == 'createclientWalletTransaction' || $activePage == 'walletclientTransaction' || $activePage == 'editclientwalletTransaction' ? ' show' : '' }} "
                    id="clientWallet">
                    <ul class="nav">

                        <li class="nav-item ml-3{{ $activePage == 'walletclientTransaction' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('client-wallet-transactions.index') }}">
                                <i class="fa fa-th-list {{$activePage == 'walletclientTransaction' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                    {{ __('translation.website.sidebar.All Transactions') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'createclientWalletTransaction' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('client-wallet-transactions.create') }}">
                                <i class="fa fa-plus-square  {{$activePage == 'createclientWalletTransaction' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                    {{ __('translation.website.sidebar.Create Transaction') }}
                            </a>
                        </li>
                    </ul>

                </div>
            </li>
            {{-- supplier --}}
            <li class="nav-item {{ $activePage == 'all-suppliers' || $activePage == 'createsupplier' || $activePage == 'edit-suppliers' || $activePage == 'show-suppliers' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#suppliers" aria-expanded="false">
                    <i><i class="fa fa-users text-primary" aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Suppliers') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse{{ $activePage == 'all-suppliers' || $activePage == 'createsupplier' || $activePage == 'edit-suppliers' || $activePage == 'show-suppliers' ? ' show' : '' }} " id="suppliers">
                    <ul class="nav">
                        <li class="nav-item ml-3{{ $activePage == 'all-suppliers' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('suppliers.index') }}">
                                <i class="fa fa-th-list {{$activePage == 'all-suppliers' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.all Suppliers') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3{{ $activePage == 'createsupplier' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('suppliers.create') }}">
                                <i class="fa fa-plus-square  {{$activePage == 'createsupplier' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                    {{ __('translation.website.sidebar.create suppliers') }}
                            </a>
                        </li>

                    </ul>

                </div>
            </li>
            <!--  Start expenses PART  -------->
            {{-- expenses --}}
            <li class="nav-item {{ ($activePage == 'addExpense' || $activePage == 'allExpense' || $activePage == 'editexpense') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#expenses" aria-expanded="false">
                    <i><i class="fa fa-money  text-primary" aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Expenses') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'addExpense' || $activePage == 'allExpense' || $activePage == 'editexpense' ? ' show' : '' }} "  id="expenses">
                    <ul class="nav">
                    <li class="nav-item ml-3 {{ $activePage == 'allExpense' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('expenses.index') }}">
                                <i class="fa fa-th-list {{$activePage == 'allExpense' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.ALL Expenses') }} 
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'addExpense' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('expenses.create') }}">
                                <i class="fa fa-plus-square {{$activePage == 'addExpense' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                               {{ __('translation.website.sidebar.Create New Expense') }} 
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
                    <i><i class="fa fa-money text-primary" aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Expenses Types') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'createexpensetype' || $activePage == 'allexpensestypes' || $activePage == 'editexpensetype' ? ' show' : '' }} "  id="expensestypes">
                    <ul class="nav">

                    <li class="nav-item ml-3 {{ $activePage == 'allexpensestypes' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('expensesTypes.index') }}">
                            <i class="fa fa-th-list {{$activePage == 'allexpensestypes' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Expenses Types') }} 
                            </a>
                        </li>

                        <li class="nav-item ml-3 {{ $activePage == 'createexpensetype' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('expensesTypes.create') }}">
                            <i class="fa fa-plus-square {{$activePage == 'createexpensetype' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                              {{ __('translation.website.sidebar.Create New Expense Type') }} 
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </li>
            <!--  End expenses  types PART  ------------>


            <!--  Start price list PART  -------->
            {{-- price list--}}
            <li class="nav-item  {{ $activePage == 'createpricelist' || $activePage == 'allpricelists' || $activePage == 'editpricelist' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#pricelists" aria-expanded="false">
                    <i><i class="fa fa-list-alt text-primary" aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Price Lists') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'createpricelist' || $activePage == 'allpricelists' || $activePage == 'editpricelist' ? ' show' : '' }} "  id="pricelists">
                    <ul class="nav">
                    <li class="nav-item ml-3 {{ $activePage == 'allpricelists' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('priceLists.index') }}">
                            <i class="fa fa-th-list {{$activePage == 'allpricelists' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                               {{ __('translation.website.sidebar.All Price Lists') }} 
                            </a>
                        </li>

                        <li class="nav-item ml-3{{ $activePage == 'createpricelist' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('priceLists.create') }}">
                            <i class="fa fa-plus-square {{$activePage == 'createpricelist' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.Create New Price List') }} 
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>
            <!--  End price list PART  ------------>

            <!--  start website info PART  ------------>
            {{-- website info--}}
            <li class="nav-item{{ $activePage == 'website' ? ' active' : '' }}">
                <a class="nav-link " href="{{ route('get.website') }}">
                <i class="fa fa-globe text-primary" aria-hidden="true"></i>
                    <span class="sidebar-normal" style="font-size: 15px;"> {{ __('translation.website.sidebar.Website Info') }} </span>
                </a>
            </li>
            <!--  End website info PART  ------------>

            {{-- supplier Wallet --}}
            <li class="nav-item{{ $activePage == 'wallet-suppliers' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('get.supplier.wallet') }}">
                    <i class="fa fa-credit-card-alt  {{$activePage == 'wallet-suppliers' ? 'text-light' : 'text-primary'}}" aria-hidden="true"></i>
                    <span class="sidebar-normal"> {{ __('translation.website.sidebar.Supplier Wallet') }} </span>
                </a>
            </li>
            {{-- supplier wallet trans --}}
            <li class="nav-item {{ $activePage == 'createSupplierWalletTransaction' || $activePage == 'walletsupplierTransaction' || $activePage == 'editwalletTransaction' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#supplierWallet" aria-expanded="false">
                    <i class="fa fa-credit-card-alt text-primary" aria-hidden="true"></i>
                    <p>{{ __('translation.website.sidebar.Supplier Wallet Trans') }}
                        <b class="caret"></b>
                    </p>

                </a>
                <div class="collapse {{ $activePage == 'createSupplierWalletTransaction' || $activePage == 'walletsupplierTransaction' || $activePage == 'editwalletTransaction' ? ' show' : '' }} "
                    id="supplierWallet">
                    <ul class="nav">

                        <li class="nav-item ml-3 {{ $activePage == 'walletsupplierTransaction' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('supplier-wallet-transactions.index') }}">
                                <i class="fa fa-th-list  {{$activePage == 'walletsupplierTransaction' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                    {{ __('translation.website.sidebar.All Transactions') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'createSupplierWalletTransaction' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('supplier-wallet-transactions.create') }}">
                                <i class="fa fa-plus-square  {{$activePage == 'createSupplierWalletTransaction' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                    {{ __('translation.website.sidebar.Create Transaction') }}
                            </a>
                        </li>
                    </ul>

                </div>
            </li>
            {{-- liveware purchases --}}
            {{-- <li
                class="nav-item {{ $activePage == 'all-Purchases' || $activePage == 'createPurchase' || $activePage == 'edit-all-Purchases' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#Purchases" aria-expanded="false">
                    <i><i class="fa fa-users" aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Purchases') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'all-Purchases' || $activePage == 'createPurchase' || $activePage == 'edit-users' ? ' show' : '' }}"
                    id="Purchases">
                    <ul class="nav">
                        <li class="nav-item ml-3 {{ $activePage == 'all-Purchases' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('purchases.index') }}">
                            <i class="fa fa-th-list text-dark" aria-hidden="true"></i>
                            {{ __('translation.website.sidebar.All Purchases') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'createPurchase' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('users.create') }}">
                                <i class="fa fa-plus-square  text-dark" aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.Create Purchase') }}
                            </a>
                        </li>

                    </ul>

                </div>
            </li> --}}
            {{-- users --}}
            <li class="nav-item {{ $activePage == 'all-users' || $activePage == 'createUser' || $activePage == 'edit-users' || $activePage == 'show-users' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#User" aria-expanded="false">
                    <i><i class="fa fa-users text-primary" aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Users') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'all-users' || $activePage == 'createUser' || $activePage == 'edit-users' || $activePage == 'show-users' ? ' show' : '' }}" id="User">
                    <ul class="nav">
                        <li class="nav-item ml-3 {{ $activePage == 'all-users' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <i class="fa fa-th-list {{$activePage == 'all-users' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Users') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'createUser' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('users.create') }}">
                                <i class="fa fa-plus-square  {{$activePage == 'createUser' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.Create User') }}
                            </a>
                        </li>

                    </ul>

                </div>
            </li>
            {{-- user wallet --}}
            <li class="nav-item{{ $activePage == 'wallet-users' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('get.user.wallet') }}">
                    <i class="fa fa-credit-card-alt {{$activePage == 'wallet-users' ? 'text-light' : 'text-primary'}}" aria-hidden="true"></i>
                    <span class="sidebar-normal"> {{ __('translation.website.sidebar.My Wallet') }} </span>
                </a>
            </li>
            {{-- user wallet Trans --}}
            <li
                class="nav-item {{ $activePage == 'createUserwalletTransaction' || $activePage == 'allUserTransactions' || $activePage == 'edituserwalletTransaction' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#userWallettrans" aria-expanded="false">
                    <i class="fa fa-credit-card-alt text-primary" aria-hidden="true"></i>
                    <p>{{ __('translation.website.sidebar.My Wallet Trans') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'createUserwalletTransaction' || $activePage == 'allUserTransactions' || $activePage == 'edituserwalletTransaction' ? ' show' : '' }} "
                    id="userWallettrans">
                    <ul class="nav">
                        <li class="nav-item ml-3 {{ $activePage == 'allUserTransactions' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user-wallet-transactions.index') }}">
                                <i class="fa fa-th-list {{$activePage == 'allUserTransactions' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>

                                    {{ __('translation.website.sidebar.All Transactions') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'createUserwalletTransaction' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user-wallet-transactions.create') }}">
                                <i class="fa fa-plus-square  {{$activePage == 'createUserwalletTransaction' ? 'text-light' : 'text-dark'}}" aria-hidden="true"></i>

                                    {{ __('translation.website.sidebar.Create Transaction') }}
                            </a>
                        </li>

                    </ul>

                </div>
            </li>
        </ul>
    </div>
</div>