@extends("theme")
@section("content")

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="500" src="{{asset('images\imgvirat.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="500" src="{{asset('images\imgvivo.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="500" src="{{asset('images\vivo.jpg')}}" class="d-block w-100" alt="...">
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
                            <img height="200" src="{{asset('images\v23e 5G.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Vivo V23e G</h5>
                              <p class="card-text">Price ₹30000</p>
                              <a href="/booking" class="btn btn-primary">Order Now</a>
                            </div>
                          </div>
                          </td>
                        <td><div class="card" style="width: 18rem;">
                            <img height="200" src="{{asset('images\v23pro.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Vivo V23Pro</h5>
                              <p class="card-text">Price ₹28000 </p>
                              <a href="/booking" class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                       
                        <td><div class="card" style="width: 18rem;">
                            <img height="200" src="{{asset('images\v235g.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Vivo V235 G</h5>
                              <p class="card-text">Price ₹24000</p>
                              <a href="/booking" class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                        </tr>
                        <tr>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="200" src="{{asset('images\t15g.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Vivo T15</h5>
                                  <p class="card-text">Price ₹20000</p>
                                  <a href="/booking" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="200" src="{{asset('images\x70pro.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Vivo X70pro</h5>
                                  <p class="card-text">Price ₹17000</p>
                                  <a href="/booking" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="200" src="{{asset('images\y755g.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Vivo Y755 G</h5>
                                  <p class="card-text">Price ₹14000</p>
                                  <a href="/booking" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                    </tr>
                </table>
                @endsection
      