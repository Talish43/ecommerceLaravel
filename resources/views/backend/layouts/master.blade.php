<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    @include('backend.layouts.head')

    @yield('styles')

</head>
<body>  

<div id="mytask-layout" class="theme-indigo">
    
    @include('backend.layouts.sidebar')

    <div class="main px-lg-4 px-md-4">


        @include('backend.layouts.header')

        @yield('content')

        @include('backend.layouts.membersmodal')
        
    </div>
</div>

@include('backend.layouts.footer')

@yield('scripts')

</body>
</html> 