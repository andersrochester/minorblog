<!doctype html>
<html lang="{{ app()->getLocale() }}">
   @include('partials._head')
     <body>
       @include('partials._navigation')

       <div class="flex-center position-ref full-height">
            <div class="content">
              @include('partials._messages')
              @yield('content')
            <hr>
            <p class="text__small"> © Anders Rochester </p>
            </div>
        </div>
    </body>
</html>
