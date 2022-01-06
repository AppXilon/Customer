@extends('master')
@section('content')

  <!-- Shipping Address Start -->
  <div class="checkout">
            <div class="container">
                <div class="section-header text-center">
                    <h2>My Profile</h2>
                </div>
               
                <div class="panel panel-primary">


                <table class="table table-hover">

                @foreach ($list as $item)

                <tr>
                    <th>Name</th>
                    <td>{{$item->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$item->email }}</td>
                </tr>
                <tr>
                    <th>Phone number</th>
                    <td>0{{$item->phone }}</td>
                </tr>
                <tr>
                    <th>Street</th>
                    <td>{{$item->street_1 }}</td>
                </tr>
                <tr>
                    <th>postcode</th>
                    <td>{{$item->postcode }}</td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>{{$item->city }}</td>
                </tr>
                <tr>
                    <th>State</th>
                    <td>{{$item->state }}</td>
                </tr>
                <tr>
                    <th>Birthdate</th>
                    <td>{{$item->birthdate }}</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>{{$item->gender }}</td>
                </tr>
                <tr>
                    <th>Occupation</th>
                    <td>{{$item->occupation }}</td>
                </tr>

                @endforeach
                </table>
                </div>
                <a href="edit/{{$item ->id}}" class= "btn btn-primary" > Edit Profile </a>
            </div>
        </div>
        <!-- Shipping Address End -->


@endsection