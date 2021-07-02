<!doctype html>
<html>

<head>

    @include('includes.head')
</head>

<body>


    <header>
        @include('includes.header')
    </header>

    <div id="main" class="container row">

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-3 col-lg-2 col-sm-6 ">
            @include('includes.sidebar')

        </div>

        <!-- main content -->
        <div id="content1" class="col-md-9 col-lg-10 col-sm-6 ">

            @yield('content')
        </div>

    </div>

    <footer class="row-12">
        @include('includes.footer')
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

    </script>

    <!--jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    

</body>

</html>
