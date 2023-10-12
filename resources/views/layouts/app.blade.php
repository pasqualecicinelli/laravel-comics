<!DOCTYPE html>
<html lang="en">
<head>

   @include('layouts.head')

</head>

<body>
    
    <header>

    @include('partials.navbar')

    </header>

    <main>

        <div class="container-fluid">

    @include('jumbotron')

       </div>

       
      @yield('current-series')
      
      main

    </main>

    <footer>foot</footer>
</body>
</html>