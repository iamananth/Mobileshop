@extends("theme3")
@section("content1")
<br>
<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-lg-1"></div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <table class="table">
                <tr class="bg-light">
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>District</th>
                    <th>State</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>

                   
                </tr>
                @foreach($fview as $fview)
                <tr  @if ($loop->odd) class="bg-info" @endif
                && @if ($loop->even) class="bg-light" @endif>
                    
                    <td>{{$fview->name}}</td>
                    <td>{{$fview->phone}}</td>
                    <td>{{$fview->email}}</td>
                    <td>{{$fview->address}}</td>
                    <td>{{$fview->district}}</td>
                    <td>{{$fview->state}}</td>
                    <td>{{$fview->date}}</td>
                    
                    @if($fview->status == NULL)
                    <td><a class="btn btn-success" href="/BookingAccepted?bid={{$fview->id}}" >Accepted</a></td>
                    <td><a class="btn btn-danger" href="/BookingRejected?bid={{$fview->id}}" >Rejected</a></td>
                    @elseif($fview->status == "Accepted")
                    <td>ACCEPTED</td>
                    @elseif($fview->status == "Rejected")
                    <td>REJECTED</td>
                    @endif

                    <td> <a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete ?')" type="submit" href="/bdelete/{{$fview->id}}">Delete</a> </td>
    
                    
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-1"></div>
    
    </div>

</div>

@endsection