@include('include.head')
<body data-spy="scroll" data-target="#navbar-example2" data-offset="10">
 <div class="img-back"></div>    
 <div id="overlay_intro">
        <div id="progstat"></div>
        <div id="progress"></div>
    </div>

    @include('sections.header')
        @yield('content')
    @include('include.footer')
</body>
</html>
