@extends("theme")
@section("content")

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="600" src="{{asset('images\onep1.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="600" src="{{asset('images\onep2.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="600" src="{{asset('images\onep3.webp')}}" class="d-block w-100" alt="...">
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
                            <img height="300" src="{{asset('images\oneplusnordce2.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Oneplus Nord CE 2 5G</h5>
                              <p class="card-text">Price  ₹23999</p>
                              <a href='/booking' class="btn btn-primary">Order Now</a>
                            </div>
                          </div>
                          </td>
                        <td><div class="card" style="width: 18rem;">
                            <img height="300" src="{{asset('images\oneplusnordce5g.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Oneplus Nord CE 5G</h5>
                              <p class="card-text">Price ₹22999</p>
                              <a href='/booking' class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                       
                        <td><div class="card" style="width: 18rem;">
                            <img height="300" src="{{asset('images\oneplus25g.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Oneplus 2 5G</h5>
                              <p class="card-text">Price ₹27999</p>
                              <a href='/booking' class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                        </tr>
                        <tr>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="300" src="{{asset('images\oneplus9pro5g.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Oneplus 9 Pro 5G</h5>
                                  <p class="card-text">Price ₹59999</p>
                                  <a href='/booking' class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="300" src="{{asset('images\oneplus9rt.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Oneplus 9RT</h5>
                                  <p class="card-text">Price ₹42999</p>
                                  <a href='/booking' class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('images\oneplus8t.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Oneplus 8T</h5>
                                  <p class="card-text">Price ₹38999</p>
                                  <a href='/booking' class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                    </tr>
                </table>
                @endsection