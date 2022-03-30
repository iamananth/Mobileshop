@extends("theme")
@section("content")

      <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 col-xxl-6">
                <table class="table table-borderless">
                    <h1 style="color: white;">
                        <center><b>
                         Sign Up
                        </center> 
                     </b>
                     </h1>
                    <tr>
                        <td style="color:  white;"><strong>Name</strong> </td>
                        <td><input type="text" class="form-control" placeholder="Enter Your Name"></td>
                    </tr>
                    <tr>
                        <td style="color:   white;"><strong>Address</strong></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td style="color:  white;"><strong>Email Id</strong></td>
                        <td><input type="text" class="form-control" placeholder="abcd@gmail.com"></td>
                    </tr>
                    <tr>
                        <td style="color:  white;"><strong>Password</strong></td>
                        <td><input type="password" class="form-control" placeholder="password"></td>
                    </tr>
                </table>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck" style="color: white;">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                  <table class="table table-borderless">
                    <tr>
                        <td></td>
                        <td><button class="btn btn-danger">Sign Up</button></td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 col-xxl-6">
                <table class="table table-borderless">
                    <h1 style="color: white;">
                       <center><b>
                        Login
                       </center> 
                    </b>
                    </h1>
                        <tr>
                            <td style="color: white;"> <strong>Username:</strong></td>
                           <td><input type="text" class="form-control" placeholder="username"> </td>
                        </tr>
                        <tr>
                            <td  style="color: white"><strong>Password:</strong> </td>
                            <td><input type="password" class="form-control" placeholder="password"></td>
                        </tr>
                </table>
                <table class="table table-borderless">
                        <tr>
                            
                            <td></td>
                            <td><button class="btn btn-danger">Login</button></td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
    <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqoHtGDfEi_OqFpV1OxeoxG0gOVU69PfKkmw&usqp=CAU" alt=""></center>
    @endsection