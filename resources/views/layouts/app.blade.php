<x-layout>
  <div class="wrapper">
    @include('partials._preloader')

    @include('partials._sidebar')
    @include('partials._navigation')
    @include('partials._breadcrump')

        <!-- Main content -->
        <section class="content">
        @yield('content')
        </section>
        <!-- /.content -->
      </div>
      @include('partials._footer')
</div>

</x-layout>