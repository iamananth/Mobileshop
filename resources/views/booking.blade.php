<!DOCTYPE html>
<html lang="en">
<head>
  <style type = "text/css">
    p
    {
        font-family: "Myriad Pro", "sans-serif";
        font-size: 10pt;
        color: black;
    }
    h1
    {
        font-family: "Myriad Pro", "sans-serif";
        font-size: 10pt;
        color: black;
    }
   
   </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <script src="{{asset('js/script.js')}}"> </script>
</head>
<body>
    <style>
        body {
          background-color: black;
        }
        </style>
      <h1 style="color: white;"><center>BOOKING DETAILS</center></h1>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4">
            <form action="/storebooking" method="post">
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
                        <td><strong style="color: white;"> Name</strong></td>
                        <td><input style="color: maroon;" type="text" name="name" class="form-control" placeholder="Username" required></td>
                    </tr>
                    <tr>
                        <td><strong style="color: white;">Phone</strong></td>
                        <td><input type="tel" class="form-control" name="phone" placeholder="Enter your Phone number"  pattern="[6-9]{1}[0-9]{9}" required></td>
                    </tr>
                    <tr>
                        <td><strong style="color: white;"> Email id</strong></td>
                        <td><input style="color: maroon;" type="text" name="email"  class="form-control" placeholder="abc@gmail.com" required></td>
                    </tr>
                    <tr>
                        <td><strong style="color: white;">Address</strong></td>
                        <td><input style="color: maroon;" type="text" name="address"  class="form-control" placeholder="address" required></td>
                    </tr>
                    <tr>
                        <td><strong style="color: white;"> District</strong></td>
                        <td><input style="color: maroon;" type="text" class="form-control" name="district" placeholder="District" required  ></td>
                    </tr>
                    <tr>
                        <td><strong style="color: white;"> State</strong></td>
                        <td><input style="color: maroon;" type="text" class="form-control" name="state" placeholder="state" required></td>
                    </tr>
                    <tr>
                        <td><strong style="color: white;"> Date</strong></td>
                        <td><input style="color: maroon;" type="date" class="form-control" name="date" id="userdate"  placeholder="Confirm Date"required></td>
                    </tr>
                    <!-- <tr>
                        <td><strong style="color: white;">   Event Time</strong></td>
                        <td><input style="color: maroon;" type="time" class="form-control" name="time" placeholder="Event Starting Time" required></td>
                    </tr> -->
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                
      
                  <tr>
                    <td></td>
                    <center>
                    <td><a href=""><button class="btn btn-success">Order</button></a></td></center>
                </tr><br>
            </table>
            </form>
            </div>
        </div>
    </div>
</body>
</html>