@include('header')

        <div>
            theme: {{ $theme }}
            <hr>
           @yield('content')
        </div>
@if($showFooter)
@include('footer')
@endif
