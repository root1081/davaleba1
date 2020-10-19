@include('inc.header')
<body>
       @include('inc.navbar')
       
        @yield('content')
        <h3>{{ $theme }}: mode</h3>
@if($showFooter)
        @include('inc.footer')
@endif
