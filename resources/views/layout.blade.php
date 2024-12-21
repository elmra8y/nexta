<!DOCTYPE html>
<html lang="en" class="light">
@include('head')
<body>
<div class="body">
    @include('header')
    <div role="main" class="main">
        @yield('content')
    </div>
    @include('footer')
</div>
@include('scripts')
</body>
</html>
