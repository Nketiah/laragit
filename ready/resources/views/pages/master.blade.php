<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">-->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >-->
    <link rel="stylesheet" href="{{asset('css/my1.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">

   <title>Techconsult</title>
</head>
<body>
    
    @include('pages.inc.nav1')
    <div class="container">
    <main class="py-4">
        @yield('content')
    </main>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"</script>
        <script src="{{ asset('js/jquery.js') }}"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
       <script src="{{ asset('js/bootstrap.min.js') }}"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>