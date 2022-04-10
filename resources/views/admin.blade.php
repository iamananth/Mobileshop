<!DOCTYPE html>
<html lang="en">
<head>
  <style type = "text/css">
    p
    {
        font-family: "Myriad Pro", "Segoe Scrip";
        font-size: 30pt;
        color: black;
        
    }
    h1
    {
        font-family:Arial, Helvetica, sans-serif;
        font-size: 50px;
        color: white;
    }
	 h2
    {
        font-family: "Myriad Pro", "sans-serif";
        font-size: 20pt;
        color: white;
    }
	
    h5
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
    <title>Admin Panel</title>
    
</head>
<body style="background-color:black">
      <div class="container">
    <div class="row" style="margin-top:45px">
    <div class="col col-12 col-sm-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
    <img src="https://carmelschool.edu.in/_next/static/images/carmel-intrologo-302d6698ea1e5dd3dcad16de642ce399.png" alt="">
    </div>
        <div class="col col-12 col-sm-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
        
        <h4 style="color: white;">Login  </h4><hr>
            <form action="/admin/check" method="post">
            @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
            @endif
            @csrf
            
                <div class="form-group">
                <label style="color: white;">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{old('email')}}">
                <span class="text-danger">@error('email'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                <label style="color: white;">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
                <span class="text-danger">@error('password'){{$message}} @enderror</span>
                </div>
                <br>
                <button type="submit" class="btn btn-block btn-primary"> Sign In</button>
                <br>
                <!-- <a href="/admin/register"> sign up </a>
                 -->
            </form>
        
        </div>
    
    </div>

</div>
</body>
</html>
