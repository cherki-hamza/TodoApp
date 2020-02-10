@include('master.layout.header')
<!-- start menu -->
  @include('master.layout.menu')
<!-- end menu -->

  <!-- start body -->
    <div class="container-fluid">
         <!-- start content -->
          @yield('content')
         <!-- end content -->
    </div>
  <!-- end body -->
  {{-- @include('sweetalert::alert') --}}
  @include('master.layout.footer')

