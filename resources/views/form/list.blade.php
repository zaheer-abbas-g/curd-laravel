<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
</h1>Data Listing</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($people as $man)
    <tr>
      <th scope="row">{{$man->id}}</th>
      <td>{{$man->name}}</td>
      <td>@if($man->mobilenumber != null){{$man->mobilenumber}}@else null @endif</td>
      <td>{{$man->email}}</td>
      <td>
    <a href="{{url('delete',$man->id)}}"><button class="btn btn-warning">Delete</button></a>
       &nbsp
    <a href="{{url('edit',$man->id)}}"><button class="btn btn-primary">Edit</button> </a> 
    </td>
    </tr>
    @endforeach
  
    
  </tbody>
</table>
</body>
</html>
