<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
@include('layouts.app')

    <div class="container-fluid">
        <center><h1>Hospital Panel</h1></center> 
        <a href="{{route('hospital.create')}}"><button type="button" class="btn btn-success fas fa-plus"> Add Hospital</button></a>
        <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Hospital Name</th>
      <th scope="col">City</th>
      <th scope="col">Area</th>
      <th scope="col">Address</th>
      <th scope="col">Latitude</th>
      <th scope="col">Longitude</th>
      
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($hospitals as $hospital)
    <tr>
      <td>{{ $hospital->id}}</td>     
      <td>{{ $hospital->name}}</td>  
      <td>{{ $hospital->city->name}}</td>   
      <td>{{ $hospital->area->name}}</td>     
      <td>{{ $hospital->address}}</td>     
      <td>{{ $hospital->lat}}</td>     
      <td>{{ $hospital->long}}</td>     
  
      <td><a href="{{route('hospitals.edit', $hospital->id)}}"><button type="button" class="btn btn-primary fas fa-edit "></button></a>
      <a href="{{route('hospitals.delete', $hospital->id)}}"><button type="button" class="btn btn-danger fas fa-trash-alt"></button></a></td>  
    </tr>
    @endforeach
  </tbody>
</table>


</div>
</body>
</html>