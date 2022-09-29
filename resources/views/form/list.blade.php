<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
  .container{
    margin-top:50px;
  }
</style>  
</head>
<body>
<div class="container">

<table class="table table-bordered" >
  <thead  style="background-color:green;color:white">
    <tr>
      <th  style="text-align:center">#</th>
      <th  style="text-align:center">First Name</th>
      <th  style="text-align:center">Last Name</th>
      <th  style="text-align:center">Mobile Number</th>
      <th  style="text-align:center">Email</th>
      <th  style="text-align:center">Gender</th>
      <th  style="text-align:center">Profile</th>
      <th  style="text-align:center">Actions</th>
    </tr>
  </thead>
  <tbody style="text-align:center">
    @foreach($people as $man)
    <tr>
      <th scope="row">{{$man->id}}</th>
      <td>{{$man->first_name}}</td>
      <td>{{$man->last_name}}</td>
      <td>@if($man->mobilenumber != null){{$man->mobilenumber}}@else null @endif</td>
      <td>{{$man->email}}</td>
      <td>{{$man->gender}}</td>
      <td><img src="{{asset('storage/'.$man->image)}}"/ width="70px" height="70px"></td>
    <td>
    <a href="{{url('delete',$man->id)}}"><button class="btn btn-warning">Delete</button></a>
       &nbsp
    <a href="{{url('edit',$man->id)}}"><button class="btn btn-primary">Edit</button> </a> 
    </td>
    </tr>
    @endforeach
  
</div>
  </tbody>
</table>
</body>
</html>
