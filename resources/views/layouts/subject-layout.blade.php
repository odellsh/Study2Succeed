<!DOCTYPE html>

<html lang="en-us">

    <head>

        @include('includes.head')

    </head>

    <!-- Top Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-static-top">

        @include('includes.nav')

    </nav>
    <!-- Top Navbar End -->

    <body style="background-color: #F8F6F0;">

        <header>

            @yield('table-of-contents')

        </header>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    <footer>
        @include('includes.footer')
    </footer>

</html>