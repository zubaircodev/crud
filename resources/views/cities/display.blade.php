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
   <center><h1>Cities Panel</h1></center> 
    <a href="{{route('cities.create')}}"><button type="button" class="btn btn-success"> Add City</button></a>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cities as $city)
    <tr>
      <td>{{ $city->id }}</td>
      <td>{{ $city->name }}</td>
      <td><a href="{{route('cities.edit', $city->id)}}"><button type="button"  class="btn btn-primary fas fa-edit"></button></a>
      <a href="{{route('cities.delete', $city->id)}}"><button type="button" class="btn btn-danger fas fa-trash-alt"></button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
</body>
</html>