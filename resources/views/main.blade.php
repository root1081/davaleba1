@include('header')
<body class="antialiased">
       @include('menu')
        <div>
            theme: {{ $theme }}
            <hr>
           @yield('content')
        </div>
@if($showFooter)
        @include('footer')
@endif
