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
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
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
      <li class="nav-item {{ ($activePage == 'allUser' || $activePage == 'createUser') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#User" aria-expanded="false">
          <i><i class="fa fa-users" aria-hidden="true"></i></i>
          <p>{{ __('User') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="User">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'allUser' ? ' active' : '' }}">
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
            </li>
          </ul>
        </div>
      </li>

      <!--  Start expenses PART  -------->
      <li class="nav-item {{ ($activePage == 'addExpense' || $activePage == 'allExpense') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#Expense" aria-expanded="false">
        <i><i class="fa fa-money" aria-hidden="true"></i></i>
          <p>{{ __('Expenses') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="Expense">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'addExpense' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('expenses.create') }}">
              <i class="fa fa-plus-square" aria-hidden="true"></i>
                <span class="sidebar-normal">{{ __('Add Expense') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'allExpenses' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('expenses.index') }}">
              <i class="fa fa-usd" aria-hidden="true"></i>
                <span class="sidebar-normal"> {{ __('All Expenses') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

       <!--  End expenses PART  ------------>
       
        <!--  Start expenses types PART  -------->
        <li class="nav-item {{ ($activePage == 'addExpenseType' || $activePage == 'allExpenseType') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#ExpenseType" aria-expanded="false">
        <i><i class="fa fa-money" aria-hidden="true"></i></i>
          <p>{{ __('Expenses Types') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="ExpenseType">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'addExpenseType' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('expenses.create') }}">
              <i class="fa fa-plus-square" aria-hidden="true"></i>
                <span class="sidebar-normal">{{ __('Add Expense Type') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'allExpensesType' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('expenses.index') }}">
              <i class="fa fa-usd" aria-hidden="true"></i>
                <span class="sidebar-normal"> {{ __('All Expenses Types') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
       <!--  End expenses  types PART  ------------>

       
        <!--  Start price list PART  -------->
        <li class="nav-item {{ ($activePage == 'addPriceList' || $activePage == 'allPriceList') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#PriceList" aria-expanded="false">
        <i><i class="fa fa-list-alt" aria-hidden="true"></i></i>
          <p>{{ __('Price Lists') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="PriceList">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'addPriceList' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('expenses.create') }}">
              <i class="fa fa-plus-square" aria-hidden="true"></i>
                <span class="sidebar-normal">{{ __('Add Price List') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'allPriceList' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('expenses.index') }}">
              <i class="fa fa-usd" aria-hidden="true"></i>
                <span class="sidebar-normal"> {{ __('All Price List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
       <!--  End price list PART  ------------>


      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
     


    </ul>
  </div>
</div>
