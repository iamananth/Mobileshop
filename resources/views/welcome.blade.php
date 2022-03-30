@extends("theme")
@section("content")


      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="400" src="{{asset('images\sambanner.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="400" src="{{asset('images\oneplus banner.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="400" src="{{asset('images\applebanner.png')}}" class="d-block w-100" alt="...">
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
              <div class="col col-12 col-sm-4 col-md-4">
                  <img height="200" src="https://i02.appmifile.com/401_operator_in/01/10/2020/ad37b88800a8ee0f3a66b6cde65bf0d7.png?width=398&height=230" alt="">
              </div>
              <div class="col col-12 col-sm-4 col-md-4">
                  <img height="200" src="https://i02.appmifile.com/675_operator_in/11/03/2021/0fe464a604d80fd13809dbeb9198cb35.jpg?width=398&height=230" alt="">
              </div>
              <div class="col col-12 col-sm-4 col-md-4">
                  <img height="200" src="https://i01.appmifile.com/webfile/globalimg/in/cms/1AD3924B-AECE-98D3-89E9-0ABD24DC6466.jpg?width=398&height=230" alt="">
              </div>
          </div>
          <br>
          <div class="row">
                  <center><h2 style="color: white;padding-right: 40px;">Star Products</h2></center>
                <div class="col col-12 col-sm-4 col-md-4">
                      <img height="300" src="https://i02.appmifile.com/832_operator_in/04/03/2021/326486c009b46a34cda23f63eefeec18.jpg?width=612&height=612" alt="">
                </div>
                <div class="col col-12 col-sm-4 col-md-4">
                    <img height="300" src="https://i02.appmifile.com/371_operator_in/04/03/2021/fd00fa8734debfc570a3ac0e19edd49c.jpg?width=612&height=612" alt="">
                </div>
                <div class="col col-12 col-sm-4 col-md-4">
                    <img height="300" src="https://i02.appmifile.com/77_operator_in/25/01/2021/55d1834533d7f0bbc3dbedafe2a827e3.png?width=612&height=612" alt="">
                </div>
          </div>
          <br>
          <div class="row">
                  <center><h2 style="color: white;padding-right: 40px;">Hot Accessories</h2></center>
                <div class="col col-12 col-sm-4 col-md-4">
                      <img height="300" src="https://i01.appmifile.com/webfile/globalimg/in/cms/BF2A4279-A6D5-B4F0-FE37-633256CDC9FC.jpg" alt="">
                      <center><h4 style="color: white; margin-right: 50px;">Earbuds</h4></center>
                      <!-- <center><h2 style="color: white;"></h2></center> -->
                </div>
                <div class="col col-12 col-sm-4 col-md-4">
                    <img height="300" src="https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1547107203.76021206.png" alt="">
                    <center><h4 style="color: white; margin-right: 50px;">Soundbar</h4></center>
                      <!-- <center><h2 style="color: white;">$20</h2></center> -->
                </div>
                <div class="col col-12 col-sm-4 col-md-4">
                    <img height="300" src="https://i01.appmifile.com/webfile/globalimg/in/cms/A1C40BA8-574D-2FA0-62C0-3D7A2C964790.jpg" alt="">
                    <center><h4 style="color: white; margin-right: 50px;">NeckBand</h4></center>
                      <!-- <center><h2 style="color: white;">$33</h2></center> -->
                </div>
          </div>
          
      </div>
      @endsection
   