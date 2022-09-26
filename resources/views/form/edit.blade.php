<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
<h1>Update profile form</h1>
<form action="{{url('update',$people->id)}}" method='POST'>
  @csrf
<div class="form-group">
    <label for="exampleInputname">Name</label>
    <input type="text" name='name' value="{{$people->name}}" class="form-control" id="exampleInputname" placeholder="Enter Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputmobilenumber">Mobile Number</label>
    <input type="text" name='mobile_number' value="{{$people->mobilenumber}}" class="form-control" id="exampleInputmobilenumber" placeholder="Optional">
  </div>
  
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name='email' value="{{$people->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
 

<div class="form-group">      
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>

</body>
</html>