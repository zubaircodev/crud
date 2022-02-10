<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit City</title>
</head>
<body>
    <h1>Edit City</h1>
    <div class="container">
     <div class="row">
         <div class="col-md-2">
         </div>
        <div class="col-md-8">
             <form method="POST" action="{{route('cities.update',$city->id)}}">
                 @csrf
                 <div class="form-group">
                 <label for="Name" class="form-label">City Name</label>
                <input type="text"class="form-control" value="{{ $city->name }}" name="name" placeholder="Enter City Name"><br>
                 @error('name')
                 {{$message}}<br>
                 @enderror
                 </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
     </div>
 </div>

</body>
</html>