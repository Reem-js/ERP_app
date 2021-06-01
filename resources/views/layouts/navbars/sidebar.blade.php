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
            <p>{{ __('translation.website.sidebar.Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'allBrands' || $activePage == 'createBrand' || $activePage == 'editBrand') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#Brand" aria-expanded="false">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <p>{{ __('translation.website.sidebar.Brands') }}
            <b class="caret" style="{{app()->getLocale() == 'ar' ? 'margin-right: 180px;' : ''}}"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'allBrands' || $activePage == 'createBrand' || $activePage == 'editBrand') ? 'show' : '' }}" id="Brand">
          <ul class="nav">
            <li class="nav-item {{ $activePage == 'allBrands' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('brands.index') }}">
                <span style="padding-left: 30px" class="sidebar-normal">{{ __('translation.website.sidebar.All Brands') }} </span>
              </a>
            </li>
            <li class="nav-item {{ $activePage == 'createBrand' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('brands.create') }}">
                <span style="padding-left: 30px" class="sidebar-normal"> {{ __('translation.website.sidebar.Create Brand') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'allCategories' || $activePage == 'createCategory' || $activePage == 'editCategory') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#Category" aria-expanded="false">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <p>{{ __('translation.website.sidebar.Categories') }}
            <b class="caret" style="{{app()->getLocale() == 'ar' ? 'margin-right: 180px;' : ''}}"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'allCategories' || $activePage == 'createCategory' || $activePage == 'editCategory') ? ' show' : '' }}" id="Category">
          <ul class="nav">
            <li class="nav-item {{ $activePage == 'allCategories' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('categories.index') }}">
                <span style="padding-left: 30px" class="sidebar-normal">{{ __('translation.website.sidebar.All Categories') }} </span>
              </a>
            </li>
            <li class="nav-item {{ $activePage == 'createCategory' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('categories.create') }}">
                <span style="padding-left: 30px" class="sidebar-normal"> {{ __('translation.website.sidebar.Create Category') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'allProducts' || $activePage == 'showProduct' || $activePage == 'editProduct' || $activePage == 'productHistory') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#Product" aria-expanded="false">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <p>{{ __('translation.website.sidebar.Stock') }}
            <b class="caret" style="{{app()->getLocale() == 'ar' ? 'margin-right: 180px;' : ''}}"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'allProducts' || $activePage == 'showProduct' || $activePage == 'editProduct' || $activePage == 'productHistory') ? ' show' : '' }}" id="Product">
          <ul class="nav">
            <li class="nav-item {{ $activePage == 'allProducts' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('products.index') }}">
                <span style="padding-left: 30px" class="sidebar-normal">{{ __('translation.website.sidebar.All Products') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
