@extends("theme")
@section("content")

      <div class="container" style="color: white; padding-top: 20px;">
        <div class="row">
            <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <h1><center>Get In touch</center></h1>
                <h3>
                    General Info
                </h3>
                Phone No:- +91 484 2000000
                           +91 8547802682
                Email:-enquiry@Salala.in
                        customerrelations@salala.in
                      <h3>  For International Enquiries </h3>
                        Phone no:-  +91 8547802682
                                    sghinternational@salala.in
                                    www.salalamobiles.in
                        <h3>Address</h3>
                        Salala Mobiles, Seaport – Airport Road, Kakkanad, Kochi 682 030, Kerala, India
                        
            </div>
            <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <h1>Contact Form</h1>
                <form action="/storecontact" method="post">
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                    {{Session::get('success')}}
                    </div>
                    @endif
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                    {{Session::get('fail')}}
                    </div>
                    @endif
                      @csrf
                <table class="table table-borderless">
                    <tr>
                        <td><input type="text" class="form-control" name="name" placeholder="Enter your name"></td>
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </tr>
                    <tr>
                        <td><input type="email" class="form-control" name="email" placeholder="Enter your Email"></td>
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="phoneno" placeholder="Enter your Phone number"></td>
                        <span class="text-danger">@error('phoneno'){{ $message }} @enderror</span>                    
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="subject" placeholder="Subject"></td>
                        <span class="text-danger">@error('subject'){{ $message }} @enderror</span>  
                    </tr>
                    <tr>
                        <td><textarea type="text" id="floatingTextarea2" style="height: 100px; width: 600px;" name="message" placeholder="message"></textarea></td>
                        <span class="text-danger">@error('message'){{ $message }} @enderror</span>  
                    </tr>
                    <tr>
                        <td><button class="btn btn-success">Submit</button></td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </div>
    <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqoHtGDfEi_OqFpV1OxeoxG0gOVU69PfKkmw&usqp=CAU" alt=""></center>
    @endsection