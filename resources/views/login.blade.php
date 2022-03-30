@extends("theme")
@section("content")
 <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 col-xxl-6" style="margin-left: 350px;margin-top: 30px;">
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
                            <td><button class="btn btn-danger" style="margin-left: 240px;">Login</button></td>
                        </tr>
                </table>
            </div>
@endsection