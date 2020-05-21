<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      {{ __('App name') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Home') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'parqueadero' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('parqueadero.index')}}">
          <i class="material-icons">store_mall_directory</i>
            <p>{{ __('parqueadero') }}</p>
        </a>
      </li>


      <li class="nav-item{{ $activePage == 'vehiculo' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('vehiculo.index')}}">
          <i class="material-icons">drive_eta</i>
            <p>{{ __('vehiculo') }}</p>
        </a>
      </li>


      <li class="nav-item{{ $activePage == 'conductor' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('conductor.index')}}">
          <i class="material-icons">person</i>
            <p>{{ __('conductor') }}</p>
        </a>
      </li>

    </ul>
  </div>
</div>
