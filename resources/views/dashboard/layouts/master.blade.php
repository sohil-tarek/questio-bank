<!DOCTYPE html>
<html lang="{{ session()->get('locale', 'ar') }}" dir="{{ session()->get('locale', 'ar') == 'ar' ? 'rtl' : 'ltr' }}" xmlns="http://www.w3.org/1999/html">
@include('layouts.header')

<body>
<!-- =============== Navigation ================ -->
<div class="parent">

        @include('layouts.sidebar')
        <div class="main">
            @include('layouts.navigation')

                @yield('content')
         </div>
</div>

@include('layouts.scripts')
@include('dashboard.layouts.scripts')



</body>

</html>



