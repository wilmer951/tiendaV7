<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/app.css" rel="stylesheet">
    

    <!-- SLIDER PAGE HOME -->
    <link href="css/sliderfirst.css" rel="stylesheet">
    <!-- SLIDER PAGE HOME -->



    <!-- IMPORT BOOSTRAR 5 AND ICONS BOOSTRARP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- IMPORT BOOSTRAR 5 AND ICONS BOOSTRARP -->

    
    <title>Myshop</title>
</head>


<body>

    
    
    <!-- IMPORT HEADER -->
        @include('layouts.header')
    <!-- IMPORT HEADER -->

    
    <!-- SHOW CONTENT PAGES -->
        @yield('content')
    <!-- SHOW CONTENT PAGES -->


    <!-- IMPORT FOOTER -->
        @include('layouts.footer')
    <!-- IMPORT FOOTER -->

</body>
</html>