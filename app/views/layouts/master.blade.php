<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <!-- Add meta below per W3 schools, to ensure proper rendering and touch zooming; www.w3schools.com/bootstrap/bootstrap_get_started.asp -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/blog_css.css">

    <!-- Font Awesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    @yield('top-script')
</head>
<body>
    @include('partials.navbar')
    
    @if (Session::has('successMessage'))
        <div class='alert alert-success'>{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class='alert alert-danger'>{{{ Session::get('errorMessage') }}}</div>
    @endif

    <div class="container content">
        <div class="row">
            <!-- <div class="col-xs-12 col-sm-7 col-md-5 col-lg-4"> -->
                @yield('content')
            <!-- </div> -->
            <!-- <div class="hidden-xs col-sm-5 col-md-7 col-lg-8"> -->
            {{-- HTML::image('/img/desktopMacbook.jpeg', 'A macbook on a table', array('id'=>'macbookImg')) --}}
            <!-- </div> -->
        </div>
    </div>
    
    @include('partials.footer')
    <!-- jQuery snippet -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    @yield('bottom-script')
    
</body>
</html>