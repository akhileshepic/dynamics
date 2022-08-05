<!DOCTYPE html>
<html lang="en">

<head>

    @yield('title')
    @include('admin.includes.header')


</head>
@yield('style')

<body class="c-app">



    @include('admin.includes.sidebar')
    <div class="c-wrapper c-fixed-components">
        @include('admin.includes.navbar')
        <div class="c-body">
            <main class="c-main">
                @yield('body')
            </main>
            @include('admin.includes.footer')
        </div>
    </div>

    @yield('modal')
    @include('admin.includes.script')
    @yield('script')
</body>

</html>