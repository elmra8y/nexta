<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr' }}" class="light">
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
