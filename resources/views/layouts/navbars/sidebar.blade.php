<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse{{ ($activePage == 'profile' || $activePage == 'user-management') ? ' show' : '' }}  " id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'all-users' || $activePage == 'createUser' ) ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#User" aria-expanded="false">
          <i><i class="fa fa-users" aria-hidden="true"></i></i>
          <p>{{ __('User') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'all-users' || $activePage == 'createUser' ) ? ' show' : '' }}" id="User">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'all-users' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('allUser') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'createUser' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.create') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('createUser') }} </span>
              </a>
            {{--  </li>
              <li class="nav-item{{ $activePage == 'walletTransaction' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('get.user.wallet') }}">
                  <span class="material-icons">account_balance_wallet</span>
                  <span class="sidebar-normal"> {{ __('My Wallet') }} </span>
                </a>
              </li>  --}}
           {{-- <li class="nav-item{{ $activePage == 'walletTransaction' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('get.user.wallet.transaction') }}">
                  <span class="sidebar-mini"> UM </span>
                  <span class="sidebar-normal"> {{ __('Wallet Transaction') }} </span>
                </a>
              </li>  --}}
          </ul>

        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'wallet-users' || $activePage == 'walletTransaction') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#Wallet" aria-expanded="false">
          <i class="material-icons">credit_card</i>
          <p>{{ __('User Wallet') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse{{ ($activePage == 'wallet-users' || $activePage == 'walletTransaction') ? ' show' : '' }} " id="Wallet">
          <ul class="nav">
              <li class="nav-item{{ $activePage == 'wallet-users' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('get.user.wallet') }}">
                  <i class="material-icons">account_balance_wallet</i>
                  <span class="sidebar-normal"> {{ __('My Wallet') }} </span>
                </a>
              </li>
            <li class="nav-item{{ $activePage == 'walletTransaction' ? ' active' : '' }}">
                    <a class="nav-link" href="{{ route('user-wallet-transactions.index') }}">
                    <span class="sidebar-mini"> UM </span>
                    <span class="sidebar-normal"> {{ __('Wallet Transaction') }} </span>
                    </a>
                </li>
          </ul>

        </div>
      </li>
     


      {{-- supplier --}}
      <li class="nav-item {{ ($activePage == 'all-suppliers' || $activePage == 'createsupplier' ) ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#suppliers" aria-expanded="false">
          <i><i class="fa fa-users" aria-hidden="true"></i></i>
          <p>{{ __('Supplier') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse{{ ($activePage == 'all-suppliers' || $activePage == 'createsupplier' ) ? ' show' : '' }} " id="suppliers">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'all-suppliers' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('suppliers.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('all Suppliers') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'createsupplier' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('suppliers.create') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('create suppliers') }} </span>
              </a>
          </ul>

        </div>
      </li>
      {{-- supplier Wallet --}}
      <li class="nav-item {{ ($activePage == 'wallet-suppliers' || $activePage == 'walletsupplierTransaction') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#supplierWallet" aria-expanded="false">
          <i class="material-icons">credit_card</i>
          <p>{{ __('Supplier Wallet') }}
            <b class="caret"></b>
          </p>

        </a>
        <div class="collapse{{ ($activePage == 'wallet-suppliers' || $activePage == 'walletsupplierTransaction') ? ' show' : '' }} " id="supplierWallet">
          <ul class="nav">
              <li class="nav-item{{ $activePage == 'wallet-suppliers' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('get.supplier.wallet') }}">
                  <i class="material-icons">account_balance_wallet</i>
                  <span class="sidebar-normal"> {{ __('Supplier Wallet') }} </span>
                </a>
              </li>
            <li class="nav-item{{ $activePage == 'walletsupplierTransaction' ? ' active' : '' }}">
                    <a class="nav-link" href="{{ route('supplier-wallet-transactions.index') }}">
                    <span class="sidebar-mini"> UM </span>
                    <span class="sidebar-normal"> {{ __('Wallet Transaction') }} </span>
                    </a>
                </li>
          </ul>

        </div>
      </li>

        {{-- clients --}}
        <li class="nav-item {{ ($activePage == 'all-clients' || $activePage == 'createclient' ) ? ' active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#clients" aria-expanded="false">
              <i><i class="fa fa-users" aria-hidden="true"></i></i>
              <p>{{ __('Clients') }}
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse{{ ($activePage == 'all-clients' || $activePage == 'createclient' ) ? ' show' : '' }} " id="clients">
              <ul class="nav">
                <li class="nav-item{{ $activePage == 'all-clients' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('clients.index') }}">
                    <span class="sidebar-mini"> UP </span>
                    <span class="sidebar-normal">{{ __('all Clients') }} </span>
                  </a>
                </li>
                <li class="nav-item{{ $activePage == 'createclient' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('clients.create') }}">
                    <span class="sidebar-mini"> UM </span>
                    <span class="sidebar-normal"> {{ __('create client') }} </span>
                  </a>
        
              </ul>
    
            </div>
        </li>
        {{-- client Wallet --}}
      <li class="nav-item {{ ($activePage == 'clientWallet' || $activePage == 'walletclientTransaction') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#clientWallet" aria-expanded="false">
          <i class="material-icons">credit_card</i>
          <p>{{ __('Client Wallet') }}
            <b class="caret"></b>
          </p>

        </a>
        <div class="collapse{{ ($activePage == 'clientWallet' || $activePage == 'walletclientTransaction') ? ' show' : '' }} " id="clientWallet">
          <ul class="nav">
              <li class="nav-item{{ $activePage == 'clientWallet' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('get.client.wallet') }}">
                  <i class="material-icons">account_balance_wallet</i>
                  <span class="sidebar-normal"> {{ __('Client Wallet') }} </span>
                </a>
              </li>
            <li class="nav-item{{ $activePage == 'walletclientTransaction' ? ' active' : '' }}">
                    <a class="nav-link" href="{{ route('client-wallet-transactions.index') }}">
                    <span class="sidebar-mini"> UM </span>
                    <span class="sidebar-normal"> {{ __('Client Wallet Transaction') }} </span>
                    </a>
                </li>
          </ul>

        </div>
      </li>

    </ul>
  </div>
</div>
