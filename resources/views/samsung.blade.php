@extends("theme")
@section("content")

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="600" src="{{asset('images\sam.webp')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="600" src="{{asset('images\sam2.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="600" src="{{asset('images\sam3.jpg')}}" class="d-block w-100" alt="...">
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
                            <img height="200" src="{{asset('images\in-galaxy-s22-s901-412948-sm-s901ezgdinu-530964621.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Galaxy S22</h5>
                              <p class="card-text">Price ₹72999</p>
                              <a href='/booking' class="btn btn-primary">Order Now</a>
                            </div>
                          </div>
                          </td>
                        <td><div class="card" style="width: 18rem;">
                            <img height="200" src="{{asset('images\in-galaxy-s22-ultra-s908-413016-sm-s908edrhinu-530969148.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Galaxy S22 Ultra</h5>
                              <p class="card-text">Price ₹118999 </p>
                              <a href='/booking' class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                       
                        <td><div class="card" style="width: 18rem;">
                            <img height="200" src="{{asset('images\in-galaxy-z-fold3-f926-5g-396759-sm-f926bzsdinu-522779012.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Galaxy Z Fold3</h5>
                              <p class="card-text">Price ₹149999</p>
                              <a href='/booking' class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                        </tr>
                        <tr>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="200" src="{{asset('images\galaxyzflip35g.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Galaxy Z Flip 3 5G</h5>
                                  <p class="card-text">Price ₹84999</p>
                                  <a href='/booking' class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="200" src="{{asset('images\galaxys20.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Galaxy S20</h5>
                                  <p class="card-text">Price ₹34999</p>
                                  <a href='/booking' class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="200"src="{{asset('images\galaxym52.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Galaxy M52</h5>
                                  <p class="card-text">Price ₹26999</p>
                                  <a href='/booking' class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                    </tr>
                </table>
                @endsection