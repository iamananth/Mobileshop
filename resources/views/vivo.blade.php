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
                            <img height="200" src="https://i2.wp.com/www.fb101.com/wp-content/uploads/2020/01/RotimaticTop.jpg?resize=678%2C298&ssl=1" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Special Offer</h5>
                              <p class="card-text">Price  $20</p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                            </div>
                          </div>
                          </td>
                        <td><div class="card" style="width: 18rem;">
                            <img height="200" src="https://thumbs.dreamstime.com/b/household-kitchen-appliances-table-indoors-interior-element-different-household-kitchen-appliances-table-indoors-118219687.jpg class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Special Offer</h5>
                              <p class="card-text">Price $100 </p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                       
                        <td><div class="card" style="width: 18rem;">
                            <img height="200" src="https://bestappliances.net/wp-content/uploads/2020/12/modern-appliances-1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Special Offer</h5>
                              <p class="card-text">Price $80</p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                        </tr>
                        <tr>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="200" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-2qjniZaYsCpVRIs9rPzrps4sKVAytBYKKLHWqFfEADv0oWHmH82KIT2aJaofZM5JmNE&usqp=CAU" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Special Offer</h5>
                                  <p class="card-text">Price $220</p>
                                  <a href="booking.php" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="200" src="https://uk.jura.com/-/media/global/images/home-products/z-line-2018/z8-alu/packshot_z8_alu.jpg?la=en&hash=9183ED68E9CF1E8D7746E8A3C27A52DE1750E50D" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Special Offer</h5>
                                  <p class="card-text">Price $150</p>
                                  <a href="booking.php" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="200" src="https://blog.pricekart.com/2019/02/01-Must-Have-Home-Appliances-That-Every-Modern-House-Needs.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Special Offer</h5>
                                  <p class="card-text">Price $90</p>
                                  <a href="booking.php" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                    </tr>
                </table>
                @endsection
      