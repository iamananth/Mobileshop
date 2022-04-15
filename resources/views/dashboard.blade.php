@extends("theme3")

@section("content2")
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-light p-4">
   <a href="/admin/dashboard"> <h5 class="text-dark h4">Admin </h5></a>
    <span class="text-muted"></span>
  </div>
</div>
@section("content1")
<br>
    <div class="container">
        <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-md-offset-3 col-lg-3 col-lg-offset-3">
        </div>
             <div class="col col-12 col-sm-6 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
           

            <table class="table table-hover">
            <thead class="bg-light">
              
                <th>Email</th>
                
                <th></th>
            </thead>
            <tbody>
              <tr class="bg-light">
                
                <td>admin123@gmail.com</td>
               
                <td><a href="/welcome"><button class="btn btn-danger">Logout</button></a></td>
             </tr>
            </tbody>
            </table>
<br><br>
            <table class="table table-hover">
            <tr>
              <td>View Feedbacks</td>
              <td><a href="/admin/fview"><button class="btn btn-info">View</button></a></td>
            </tr>
            <tr>
              <td>View Bookings</td>
              <td><a href="/admin/bookingview"><button class="btn btn-info">View</button></a></td>
            </tr>
            <tr>
            <!-- <td><a href="/admin/register"> <button class="btn btn-danger">Add Admin</button>  </a></td> -->
            <td></td>
            </tr>
            </table>
            
                
                
            </ul>
        
            </div>
        </div>
    </div>


@endsection