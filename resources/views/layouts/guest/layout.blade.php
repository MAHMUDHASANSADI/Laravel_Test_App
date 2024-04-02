<!doctype html>
<html lang="en">

@include('layouts.guest.header')



<body>

@include('layouts.guest.nav') 

    <main>
@yield('page_content')

    </main>

    @include('layouts.guest.footer') 
    @include('layouts.guest.script') 

   

</body>

</html>