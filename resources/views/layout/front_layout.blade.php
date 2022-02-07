
<!DOCTYPE html>
<html lang="en">

<head>  
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="@yield('title','Owister Group')">
<meta name="description" content="@yield('description', 'Jasa Konstruksi Pembangunan Profesional Medan')">
<meta name="keywords" content="Website Resmi Owister Group">
<meta name="author" content="Bag Kinantan">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta property="og:url"         content="https://owister.id" />
<meta property="og:type"        content="website" />

<meta property="og:title"       content="@yield('title','Website Resmi Owister Group')" />
<meta property="og:description" content="@yield('description','Jasa Konstruksi Pembangunan Profesional Medan')" />
<meta property="og:image"       content="@yield('logo','img/logo.png')" />
  <link rel="shortcut icon" href="./assets/img/favicon.png">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="./assets/css/plugins.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/colors/orange.css">
  <link rel="preload" href="./assets/css/fonts/thicccboi.css" as="style" onload="this.rel='stylesheet'">
</head>

<body>
    @include('layout.website.menu')
    
    @yield('content')
  <!-- /.content-wrapper -->
    @include('layout.website.footer')
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
</body>

</html>