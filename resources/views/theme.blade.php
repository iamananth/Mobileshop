<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css\style.css')}}" rel="stylesheet">
    <title>Salala Mobiles</title>

</head>
<body style="background-color: black">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li>
                <a class="navbar-brand" href="/">SALALA MOBILES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/samsung">SAMSUNG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/apple">APPLE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/vivo">VIVO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/oneplus">ONEPLUS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/oppo">OPPO</a>
              </li>
        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            
                  <li><a class="dropdown-item" href="/contact">Contact Us</a></li>
                  <li><a class="dropdown-item" href="#">support</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/signup">Sign UP/Sign In</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield("content")

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>