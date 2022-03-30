@extends("theme")
@section("content")

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="600" src="{{asset('images\oppoban1.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="600" src="{{asset('images\oppo2.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="600" src="{{asset('images\oppo3.jpg')}}" class="d-block w-100" alt="...">
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
                            <img height="300" src="{{asset('images\findx2.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Oppo Find X2</h5>
                              <p class="card-text">Price  ₹64990</p>
                              <a href='/booking' class="btn btn-primary">Order Now</a>
                            </div>
                          </div>
                          </td>
                        <td><div class="card" style="width: 18rem;">
                            <img height="300" src="{{asset('images\reno7pro5g.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Oppo Reno 7 Pro 5G</h5>
                              <p class="card-text">Price ₹39999</p>
                              <a href='/booking' class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                       
                        <td><div class="card" style="width: 18rem;">
                            <img height="300" src="{{asset('images\reno6pro5g.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Oppo Reno 6 Pro 5G</h5>
                              <p class="card-text">Price ₹41990</p>
                              <a href='/booking' class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                        </tr>
                        <tr>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="300" src="{{asset('images\f19pro5g.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Oppo F19 Pro 5G</h5>
                                  <p class="card-text">Price ₹23490</p>
                                  <a href='/booking' class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="300" src="{{asset('images\f19s.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Oppo F19 S</h5>
                                  <p class="card-text">Price ₹19990</p>
                                  <a href='/booking' class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="300" src="{{asset('images\f17pro.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Oppo F17 Pro</h5>
                                  <p class="card-text">Price ₹19990</p>
                                  <a href='/booking' class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                    </tr>
                </table>
                @endsection