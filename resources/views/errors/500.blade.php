<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>500 -Internal Server Error</title>
    <meta name="author" content="bernX" />
    <meta name="keywords" content="404, css3, html5, template" />
    <meta name="description" content="404 - Trang Không Tồn Tại" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Bootstrap CSS -->
    <link type="text/css" media="all" href="{{ asset('errors/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Template CSS -->
    <link type="text/css" media="all" href="{{ asset('errors/css/style.css') }}" rel="stylesheet" />
    <!-- Responsive CSS -->
    <link type="text/css" media="all" href="{{ asset('errors/css/responsive.css') }}" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,800italic,800,700italic,700,600italic,600,400italic,300' rel='stylesheet' type='text/css' />
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" />
  </head>

  <body>
    <!-- Header -->
    <section>
      <div class="container">
        <div class="row">
          <div>
            <h1>500</h1>
            <h2>Internal Server Error</h2>
            <p>Sorry, We Can't Complete That Request</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end Header -->

    <!-- Illustration -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="illustration">
              <div class="island"></div>
              <div class="char"></div>
              <div class="hand"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end Illustration -->

     <!-- Button -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <a href="{{ url('/') }}"><div class="btn btn-action">Go Back Homepage</div></a>
          </div>
        </div>
      </div>
    </section>
    <!-- end Button -->

    <!-- Footer -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <p>Copyright (c) 2017 Quốc Tuấn . All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end Footer -->

    <!-- Scripts -->
    <script src="{{ asset('errors/js/jquery-1.11.2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('errors/js/bootstrap.min.js') }}" type="text/javascript"></script>
  </body>

</html>