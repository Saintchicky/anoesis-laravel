@include('include.head')
<body data-spy="scroll" data-target="#navbar-example2" data-offset="10">
    @include('sections.header')
        @yield('content')
    @include('include.footer')
</body>
</html>