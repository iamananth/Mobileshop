@extends("theme")
@section("content")



<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="600" src="{{asset('images\Apple-Banner.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="600" src="{{asset('images\applebanner1.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="600" src="{{asset('images\applebanner2.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
      <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-3 col-md-4 col-lg-6 col-xl-12 col-xxl-12">
                <table class="table">
                    <tr>
                        <td><div class="card" style="width: 18rem;">
                            <img height="200" src="{{asset('images\applep1.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">iPhone 13 Pro</h5>
                              <p class="card-text">Price ₹140000</p>
                              <br>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                            </div>
                          </div>
                          </td>
                        <td><div class="card" style="width: 18rem;">
                            <img height="200" src="{{asset('images\applep2.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">iPhone 12 Pro</h5>
                              <p class="card-text">Price ₹120000</p>
                              <br>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                       
                        <td><div class="card" style="width: 18rem;">
                            <img height="200" src="{{asset('images\applep3.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">iPhone 11 Pro</h5>
                              <p class="card-text">Price ₹89000</p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                        </tr>
                        <tr>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="200" src="{{asset('images\applep4.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">iPhone SE</h5>
                                  <p class="card-text">Price ₹58000</p>
                                  <br>
                                  <a href="booking.php" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="200" src="{{asset('images\applep5.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">iPhone 11</h5>
                                  <p class="card-text">Price ₹70000</p>
                                  <a href="booking.php" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="200" src="{{asset('images\applep6.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">iPhone XR</h5>
                                  <p class="card-text">Price ₹43900</p>
                                  <br>
                                  <a href="booking.php" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                    </tr>
                </table>
    
                @endsection