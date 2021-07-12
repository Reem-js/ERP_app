<div class="sidebar sidebar-mode" >{{-- black data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg" --}}
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    {{-- Logo --}}
    <div class="logo ">
        <a href="{{ url('/') }}" class="simple-text logo-normal text-success">
            {{ __('translation.website.sidebar.ELRAYAN') }}
            {{-- {{ $activePage }} --}}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            {{-- Dashboard --}}
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link nav-link-mode " href="{{ route('home') }}">
                    <i class="fa fa-tachometer {{ $activePage == 'dashboard' ? '' : '' }}"
                        aria-hidden="true" ></i>
                    <p>{{ __('translation.website.sidebar.Dashboard') }}</p>
                </a>
            </li>
            {{-- Products --}}
            <li
                class="nav-item {{ $activePage == 'allProducts' || $activePage == 'showProduct' || $activePage == 'editProduct' || $activePage == 'productHistory' || $activePage == 'allCategories' || $activePage == 'createCategory' || $activePage == 'editCategory' || $activePage == 'allBrands' || $activePage == 'createBrand' || $activePage == 'editBrand' ? ' active' : '' }}">
                <a class="nav-link nav-link-mode" data-toggle="collapse" href="#Product" aria-expanded="false">
                    <i class="fa fa-shopping-cart " aria-hidden="true" ></i>
                    <p>{{ __('translation.website.sidebar.Stock') }}
                        <b class="caret" style="{{ app()->getLocale() == 'ar' ? 'margin-right: 180px;' : '' }}"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'allProducts' || $activePage == 'showProduct' || $activePage == 'editProduct' || $activePage == 'productHistory' || $activePage == 'allCategories' || $activePage == 'createCategory' || $activePage == 'editCategory' || $activePage == 'allBrands' || $activePage == 'createBrand' || $activePage == 'editBrand' ? ' show' : '' }}"
                    id="Product">
                    <ul class="nav">
                        <li class="nav-item ml-3 {{ $activePage == 'allProducts' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('products.index') }}">
                                <i class="fa fa-th-list {{ $activePage == 'allProducts' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Products') }}
                            </a>
                        </li>
                        {{-- Categories --}}
                        <li
                            class="nav-item ml-3 {{ $activePage == 'allCategories' || $activePage == 'createCategory' || $activePage == 'editCategory' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('categories.index') }}">
                                <i
                                    class="material-icons  {{ $activePage == 'allCategories' || $activePage == 'createCategory' || $activePage == 'editCategory' ? '' : '' }}">dashboard</i>
                                {{ __('translation.website.sidebar.All Categories') }}
                            </a>
                        </li>
                        {{-- Brands --}}
                        <li
                            class="nav-item ml-3{{ $activePage == 'allBrands' || $activePage == 'createBrand' || $activePage == 'editBrand' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('brands.index') }}">
                                <i class="fa fa-car  {{ $activePage == 'allBrands' || $activePage == 'createBrand' || $activePage == 'editBrand' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Brands') }}
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            {{-- clients --}}
            <li
                class="nav-item {{ $activePage == 'all-clients' || $activePage == 'createclient' || $activePage == 'edit-clients' || $activePage == 'show-clients' || $activePage == 'createclientWalletTransaction' || $activePage == 'walletclientTransaction' || $activePage == 'editclientwalletTransaction' || $activePage == 'showwalletclientTransaction' || $activePage == 'wallet-clients' ? ' active' : '' }}">
                <a class="nav-link nav-link-mode" data-toggle="collapse" href="#clients" aria-expanded="false">
                    <i><i class="fa fa-users " aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Clients') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse{{ $activePage == 'all-clients' || $activePage == 'createclient' || $activePage == 'edit-clients' || $activePage == 'show-clients' || $activePage == 'createclientWalletTransaction' || $activePage == 'walletclientTransaction' || $activePage == 'editclientwalletTransaction' || $activePage == 'showwalletclientTransaction' || $activePage == 'wallet-clients' ? ' show' : '' }} "
                    id="clients">
                    <ul class="nav">
                        <li class="nav-item ml-3 {{ $activePage == 'all-clients' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('clients.index') }}">
                                <i class="fa fa-th-list {{ $activePage == 'all-clients' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.all Clients') }}
                            </a>
                        </li>
                        {{-- client Wallet --}}
                        <li class="nav-item ml-3 {{ $activePage == 'wallet-clients' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('get.client.wallet') }}">
                                <i class="fa fa-credit-card-alt {{ $activePage == 'wallet-clients' ? '' : '' }} "
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.Client Wallet') }}
                            </a>
                        </li>
                        {{-- client Wallet Trans --}}

                        <li class="nav-item ml-3{{ $activePage == 'walletclientTransaction' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('client-wallet-transactions.index') }}">
                                <i class="fa fa-th-list {{ $activePage == 'walletclientTransaction' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Transactions') }}
                            </a>
                        </li>

                    </ul>

                </div>
            </li>

            {{-- supplier --}}
            <li
                class="nav-item {{ $activePage == 'all-suppliers' || $activePage == 'createsupplier' || $activePage == 'edit-suppliers' || $activePage == 'show-suppliers' || $activePage == 'wallet-suppliers' || $activePage == 'createSupplierWalletTransaction' || $activePage == 'walletsupplierTransaction' || $activePage == 'editwalletTransaction' || $activePage == 'showwalletsupplierTransaction' || $activePage == 'createpricelist' || $activePage == 'allpricelists' || $activePage == 'editpricelist' ? ' active' : '' }}">
                <a class="nav-link nav-link-mode" data-toggle="collapse" href="#suppliers" aria-expanded="false">
                    <i><i class="fa fa-users " aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Suppliers') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse{{ $activePage == 'all-suppliers' || $activePage == 'createsupplier' || $activePage == 'edit-suppliers' || $activePage == 'show-suppliers' || $activePage == 'wallet-suppliers' || $activePage == 'createSupplierWalletTransaction' || $activePage == 'walletsupplierTransaction' || $activePage == 'editwalletTransaction' || $activePage == 'showwalletsupplierTransaction' || $activePage == 'createpricelist' || $activePage == 'allpricelists' || $activePage == 'editpricelist' ? ' show' : '' }} "
                    id="suppliers">
                    <ul class="nav">
                        <li class="nav-item ml-3{{ $activePage == 'all-suppliers' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('suppliers.index') }}">
                                <i class="fa fa-th-list {{ $activePage == 'all-suppliers' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.all Suppliers') }}
                            </a>
                        </li>

                        {{-- price list --}}
                        <li
                            class="nav-item ml-3 {{ $activePage == 'createpricelist' || $activePage == 'allpricelists' || $activePage == 'editpricelist' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('priceLists.index') }}">
                                <i class="fa fa-th-list {{ $activePage == 'createpricelist' || $activePage == 'allpricelists' || $activePage == 'editpricelist' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Price Lists') }}
                            </a>
                        </li>
                        {{-- supplier Wallet --}}
                        <li class="nav-item ml-3{{ $activePage == 'wallet-suppliers' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('get.supplier.wallet') }}">
                                <i class="fa fa-credit-card-alt  {{ $activePage == 'wallet-suppliers' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                <span class="sidebar-normal"> {{ __('translation.website.sidebar.Supplier Wallet') }}
                                </span>
                            </a>
                        </li>
                        {{-- supplier wallet trans --}}
                        <li class="nav-item ml-3 {{ $activePage == 'walletsupplierTransaction' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('supplier-wallet-transactions.index') }}">
                                <i class="fa fa-th-list  {{ $activePage == 'walletsupplierTransaction' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Transactions') }}
                            </a>
                        </li>
                    </ul>

                </div>
            </li>

            {{-- users --}}
            <li
                class="nav-item {{ $activePage == 'all-users' || $activePage == 'createUser' || $activePage == 'edit-users' || $activePage == 'show-users' || $activePage == 'wallet-users' || $activePage == 'createUserwalletTransaction' || $activePage == 'allUserTransactions' || $activePage == 'edituserwalletTransaction' || $activePage == 'allPermissions' || $activePage == 'createPermission' || $activePage == 'editPermission' || $activePage == 'allRoles' || $activePage == 'createRole' || $activePage == 'editRole' ? ' active' : '' }}">
                <a class="nav-link nav-link-mode" data-toggle="collapse" href="#User" aria-expanded="false">
                    <i><i class="fa fa-users " aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Users') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'all-users' || $activePage == 'createUser' || $activePage == 'edit-users' || $activePage == 'show-users' || $activePage == 'wallet-users' || $activePage == 'createUserwalletTransaction' || $activePage == 'allUserTransactions' || $activePage == 'edituserwalletTransaction' || $activePage == 'allPermissions' || $activePage == 'createPermission' || $activePage == 'editPermission' || $activePage == 'allRoles' || $activePage == 'createRole' || $activePage == 'editRole' ? ' show' : '' }}"
                    id="User">
                    <ul class="nav">
                        <li class="nav-item ml-3 {{ $activePage == 'all-users' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('users.index') }}">
                                <i class="fa fa-th-list {{ $activePage == 'all-users' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Users') }}
                            </a>
                        </li>
                        {{-- Roles --}}
                        <li
                            class="nav-item ml-3 {{ $activePage == 'allRoles' || $activePage == 'createRole' || $activePage == 'editRole' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('roles.index') }}">
                                <i class="fa fa-briefcase  {{ $activePage == 'allRoles' || $activePage == 'createRole' || $activePage == 'editRole' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Roles') }}
                            </a>
                        </li>
                        {{-- Permissions --}}
                        <li
                            class="nav-item ml-3 {{ $activePage == 'allPermissions' || $activePage == 'createPermission' || $activePage == 'editPermission' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('permissions.index') }}">
                                <i class="fa fa-exclamation-triangle  {{ $activePage == 'allPermissions' || $activePage == 'createPermission' || $activePage == 'editPermission' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Permissions') }}
                            </a>
                        </li>

                        {{-- user wallet --}}
                        <li class="nav-item ml-3 {{ $activePage == 'wallet-users' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('get.user.wallet') }}">
                                <i class="fa fa-credit-card-alt {{ $activePage == 'wallet-users' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                <span class="sidebar-normal"> {{ __('translation.website.sidebar.My Wallet') }}
                                </span>
                            </a>
                        </li>
                        {{-- user wallet Trans --}}

                        <li class="nav-item ml-3 {{ $activePage == 'allUserTransactions' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('user-wallet-transactions.index') }}">
                                <i class="fa fa-th-list {{ $activePage == 'allUserTransactions' ? '' : '' }}"
                                    aria-hidden="true"></i>

                                {{ __('translation.website.sidebar.All Transactions') }}
                            </a>
                        </li>
                    </ul>

                </div>
            </li>
            {{-- Sales --}}
            <li
                class="nav-item {{ $activePage == 'addSale' || $activePage == 'allSales' || $activePage == 'editSale' || $activePage == 'SaleOrder' ? ' active' : '' }}">
                <a class="nav-link nav-link-mode" data-toggle="collapse" href="#sales" aria-expanded="false">
                    <i><i class="fa fa-money  " aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Sales') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'addSale' || $activePage == 'allSales' || $activePage == 'editSale' || $activePage == 'SaleOrder' ? ' show' : '' }} "
                    id="sales">
                    <ul class="nav">
                        <li
                            class="nav-item ml-3 {{ $activePage == 'addSale' || $activePage == 'allSales' || $activePage == 'editSale' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('sales.index') }}">
                                <i class="fa fa-th-list {{ $activePage == 'addSale' || $activePage == 'allSales' || $activePage == 'editSale' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Sales') }}
                            </a>
                        </li>
                        {{-- Sale Order --}}

                        <li class="nav-item ml-3 {{ $activePage == 'SaleOrder' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="#">
                                <i class="fa fa-th-list {{ $activePage == 'SaleOrder' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Sale Orders') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Purchases --}}
            <li
                class="nav-item {{ $activePage == 'addPurchase' || $activePage == 'allPurchases' || $activePage == 'editPurchase' || $activePage == 'purchaseOrder' || $activePage == 'addpurchaseOrder'|| $activePage == 'allPurchasesOrder' || $activePage == 'editPurchaseOrder' ? ' active' : '' }}">
                <a class="nav-link nav-link-mode" data-toggle="collapse" href="#Purchases" aria-expanded="false">
                    <i><i class="fa fa-cart-plus  " aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Purchases') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'addPurchase' || $activePage == 'allPurchases' || $activePage == 'editPurchase' || $activePage == 'purchaseOrder' || $activePage == 'addpurchaseOrder'|| $activePage == 'allPurchasesOrder' || $activePage == 'editPurchaseOrder' ? ' show' : '' }} "
                    id="Purchases">
                    <ul class="nav">
                        <li
                            class="nav-item ml-3 {{ $activePage == 'addPurchase' || $activePage == 'allPurchases' || $activePage == 'editPurchase' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('purchases.index') }}">
                                <i class="fa fa-th-list {{ $activePage == 'addPurchase' || $activePage == 'allPurchases' || $activePage == 'editPurchase' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Purchases') }}
                            </a>
                        </li>
                        {{-- purchase Order --}}

                        <li class="nav-item ml-3 {{ $activePage == 'addpurchaseOrder'|| $activePage == 'allPurchasesOrder' || $activePage == 'editPurchaseOrder' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('purchasesOrder.index') }}">
                                <i class="fa fa-th-list {{ $activePage == 'addpurchaseOrder'|| $activePage == 'allPurchasesOrder' || $activePage == 'editPurchaseOrder' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Purchase Orders') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--  Start expenses PART  -------->
            {{-- expenses --}}
            <li
                class="nav-item {{ $activePage == 'addExpense' || $activePage == 'allExpense' || $activePage == 'editexpense' || $activePage == 'createexpensetype' || $activePage == 'allexpensestypes' || $activePage == 'editexpensetype' ? ' active' : '' }}">
                <a class="nav-link nav-link-mode" data-toggle="collapse" href="#expenses" aria-expanded="false">
                    <i><i class="fa fa-minus-circle  " aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Expenses') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'addExpense' || $activePage == 'allExpense' || $activePage == 'editexpense' || $activePage == 'createexpensetype' || $activePage == 'allexpensestypes' || $activePage == 'editexpensetype' ? ' show' : '' }} "
                    id="expenses">
                    <ul class="nav">
                        <li class="nav-item ml-3 {{ $activePage == 'allExpense' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('expenses.index') }}">
                                <i class="fa fa-th-list {{ $activePage == 'allExpense' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.ALL Expenses') }}
                            </a>
                        </li>
                        {{-- expenses types --}}

                        <li class="nav-item ml-3 {{ $activePage == 'allexpensestypes' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('expensesTypes.index') }}">
                                <i class="fa fa-th-list {{ $activePage == 'allexpensestypes' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.All Expenses Types') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Installlments --}}
            <li
                class="nav-item  {{ $activePage == 'addInstallment' || $activePage == 'allInstallments' || $activePage == 'editInstallment' ? ' active' : '' }}">
                <a class="nav-link nav-link-mode" href="{{ route('get.website') }}">
                    <i class="fa fa-th-list  {{ $activePage == 'addInstallment' || $activePage == 'allInstallments' || $activePage == 'editInstallment' ? '' : '' }}"
                        aria-hidden="true"></i>
                    {{ __('translation.website.sidebar.All Installments') }}
                </a>
            </li>

             {{-- Notfications --}}
            <li class="nav-item  {{ $activePage == 'allnotifications'  ? ' active' : '' }}">
                <a class="nav-link nav-link-mode" href="{{ route('notifications.index') }}">
                    <i class="fa fa-bell {{ $activePage == 'allnotifications'  ? '' : '' }}"
                        aria-hidden="true"></i>
                    {{ __('translation.website.sidebar.All Notifications') }}
                </a>
            </li>

            <!--  Start Reports PART  -------->
            {{-- reports --}}
            <li
                class="nav-item {{ $activePage == 'mostSaleProducts' || $activePage == 'monthlyProfits' || $activePage == 'totalCapital' || $activePage == 'bestCustomers' || $activePage == 'bestSuppliers' || $activePage == 'frquentcustomers' || $activePage == 'frquentSuppliers' || $activePage == 'installmentandsales' || $activePage == 'installmentandpurchases' || $activePage == 'receivablesandpayments' ? ' active' : '' }}">
                <a class="nav-link nav-link-mode" data-toggle="collapse" href="#reports" aria-expanded="false">
                    <i><i class="fa fa-bar-chart " aria-hidden="true"></i></i>
                    <p>{{ __('translation.website.sidebar.Reports') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'mostSaleProducts' || $activePage == 'monthlyProfits' || $activePage == 'totalCapital' || $activePage == 'bestCustomers' || $activePage == 'bestSuppliers' || $activePage == 'frquentcustomers' || $activePage == 'frquentSuppliers' || $activePage == 'installmentandsales' || $activePage == 'installmentandpurchases' || $activePage == 'receivablesandpayments' ? ' show' : '' }} "
                    id="reports">
                    <ul class="nav">
                        <li class="nav-item ml-3 {{ $activePage == 'mostSaleProducts' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('most-sold-products') }}">
                                <i class="fa fa-line-chart {{ $activePage == 'mostSaleProducts' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.Most Sold Products') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'monthlyProfits' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('monthly-profits') }}">
                                <i class="fa fa-line-chart {{ $activePage == 'monthlyProfits' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.Monthly Profits') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'totalCapital' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('total-capital') }}">
                                <i class="fa fa-line-chart {{ $activePage == 'totalCapital' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.Total Capital') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'bestCustomers' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('best-customers') }}">
                                <i class="fa fa-line-chart {{ $activePage == 'bestCustomers' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.bestCustomers') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'bestSuppliers' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('best-suppliers') }}">
                                <i class="fa fa-line-chart {{ $activePage == 'bestSuppliers' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.bestSuppliers') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'frquentcustomers' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('frequent-customers') }}">
                                <i class="fa fa-line-chart {{ $activePage == 'frquentcustomers' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.frquent customers') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'frquentSuppliers' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('frequent-suppliers') }}">
                                <i class="fa fa-line-chart {{ $activePage == 'frquentSuppliers' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.frquent Suppliers') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'installmentandsales' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('Installments-and-sales') }}">
                                <i class="fa fa-line-chart {{ $activePage == 'installmentandsales' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.installment and sales') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'installmentandpurchases' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('installments-and-purchases') }}">
                                <i class="fa fa-line-chart {{ $activePage == 'installmentandpurchases' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.installment and purchases') }}
                            </a>
                        </li>
                        <li class="nav-item ml-3 {{ $activePage == 'receivablesandpayments' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode" href="{{ route('receivables-and-payments') }}">
                                <i class="fa fa-line-chart {{ $activePage == 'receivablesandpayments' ? '' : '' }}"
                                    aria-hidden="true"></i>
                                {{ __('translation.website.sidebar.receivables and payments') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- profits --}}
            <li
                class="nav-item {{ $activePage == 'allPartners' || $activePage == 'createPartner' || $activePage == 'editPartner' || $activePage == 'dividendIncome' || $activePage == 'dividendIncomeDetails' ? ' active' : '' }}">
                <a class="nav-link nav-link-mode " data-toggle="collapse" href="#profits" aria-expanded="false">
                    <i class="fa fa-usd " aria-hidden="true"></i>
                    <p>{{ __('translation.website.sidebar.Profits') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'allPartners' || $activePage == 'createPartner' || $activePage == 'editPartner' || $activePage == 'dividendIncome' || $activePage == 'dividendIncomeDetails' ? ' show' : '' }} "
                    id="profits">
                    <ul class="nav">
                        {{-- dividend income --}}
                        <li
                            class="nav-item ml-3 {{ $activePage == 'dividendIncome' || $activePage == 'dividendIncomeDetails' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode " href="{{ route('dividend-income') }}">
                                <i class="fa fa-percent " aria-hidden="true"></i>
                                <span class="sidebar-normal" style="font-size: 15px;">
                                    {{ __('translation.website.sidebar.Dividend Income') }} </span>
                            </a>
                        </li>
                        {{-- partners --}}
                        <li
                            class="nav-item ml-3 {{ $activePage == 'allPartners' || $activePage == 'createPartner' || $activePage == 'editPartner' ? ' active' : '' }}">
                            <a class="nav-link nav-link-mode " href="{{ route('partners.index') }}">
                                <i class="fa fa-handshake-o " aria-hidden="true"></i>
                                <span class="sidebar-normal" style="font-size: 15px;">
                                    {{ __('translation.website.sidebar.Partners') }} </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>


            <!--  start website info PART  ------------>
            {{-- website info --}}
            <li class="nav-item{{ $activePage == 'website' ? ' active' : '' }}">
                <a class="nav-link nav-link-mode " href="{{ route('get.website') }}">
                    <i class="fa fa-cog " aria-hidden="true"></i>
                    <span class="sidebar-normal" style="font-size: 15px;">
                        {{ __('translation.website.sidebar.Website Info') }} </span>
                </a>
            </li>
            <!--  End website info PART  ------------>


        </ul>
    </div>
</div>
