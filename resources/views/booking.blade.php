@extends("theme")
@section("content")

<h1 style="color: rgb(14, 150, 230);">
    <center>BOOKING DETAILS</center>
</h1>
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
                        <td><strong style="color: white;">Name</strong></td>
                        <td><input style="color: maroon;" type="text" name="name" class="form-control" placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: white"> Phone</strong></td>
                        <td><input style="color: maroon;" type="number" name="phone" class="form-control" placeholder="Phone Number"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: white"> Email id</strong></td>
                        <td><input style="color: maroon;" type="text" name="email" class="form-control" placeholder="abc@gmail.com"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: white;"> Address </strong></td>
                        <td>
                            <textarea class="form-control" name="address" id="" rows="3"></textarea>
                        </td>
        </div>
        </tr>
        <tr>
            <td><strong style="color: white;"> District</strong></td>
            <td><input style="color: maroon;" type="text" name="district" class="form-control" placeholder="District"></td>
        </tr>
        <tr>
            <td><strong style="color: white;"> State</strong></td>
            <td><input style="color: maroon;" type="text" name="state" class="form-control" placeholder="state"></td>
        </tr>
        <tr>
            <td><strong style="color: white;"> Date</strong></td>
            <td><input style="color: maroon;" type="date" class="form-control" name="date" id="userdate" placeholder="Confirm Date" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <center>
                <td><button class="btn btn-success">Order Now</button></td>
            </center>
        </tr>
        </table>
        </form>
    </div>
    <div class="col col-12 col-sm-4 col-md-4">
    </div>
    <div class="col col-12 col-sm-4 col-md-4">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqoHtGDfEi_OqFpV1OxeoxG0gOVU69PfKkmw&usqp=CAU" alt="">
        <address style="font-family: Georgia, 'Times New Roman', Times, serif; color: white;">
            <strong>Salala Mobiles</strong><br>
            Phone Number : +91- 4869 - 232203<br>
            Cochin <br>
            Aluva-Kalamasery Road<br>
            Eranakulam,Kerala<br>
            685531 India
        </address>
    </div>
</div>
</div>
</div>
@endsection
