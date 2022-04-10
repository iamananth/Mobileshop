@extends("theme")
@section("content")

<div class="container" style="margin-top: 30px; margin-left: 350px;">
    <div class="row">
        <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 col-xxl-6">
            <h1 style="color: white;">
                <center><b>
                        Sign Up
                </center>
                </b>
            </h1>
            <form action="{{route('register-user')}}" method="post">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label" style="color: white;">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" value="{{old('name')}}">
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter Email" aria-describedby="emailHelp" value="{{old('email')}}">>
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" style="color: white;">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" value="{{old('name')}}">>
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" style="color: white;">Accept Terms and Conditions</label>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-left: 240px;">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection