<!doctype html>
<html class="no-js" lang="en">
<head>

  <title> @if (isset($tab)) {{ $tab }} @else Les séries @endif </title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css">
  <link rel="stylesheet" href="{{ URL::to('css/app.css') }} " type="text/css" >



  <!--  <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'> -->

</head>
<body>

  <!-- Start Top Bar -->
  <div class="top-bar">
    <div class="top-bar-left">
      <ul class="menu">
        <li class="menu-text">RATEFLIX</li>
        <li><a href="/">Home</a></li>
        <li><a href="/series">Series</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/admin/series">Admin</a></li>
      </ul>
    </div>
  </div>
  <!-- End Top Bar -->

  <div class="callout large primary">
    <div class="text-center">
      <h1>RATEFLIX</h1>
      <h2>Share and Read Serie Reviews, Summary and more</h2>
    </div>
  </div>

  <article class="grid-container">

    @yield('content')

  </article>


  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
