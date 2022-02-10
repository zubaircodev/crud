<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>create</title>
</head>
<body>
    <!--form-->
 <div class="container">
     <h3>Create Hospital</h3>
     <div class="row">
         <div class="col-md-2">
         </div>
        <div class="col-md-8">
             <!-- <form method="POST" action="{{URL::to('store')}}"> -->
             <form method="POST" action="{{route('hospital.store')}}">
                 @csrf
                 <div class="form-group">
                 <label for="Name" class="form-label">Hospital Name</label>
                <input type="text"class="form-control"  name="name" ><br>
                 @error('name')
                 {{$message}}<br>
                 @enderror

                 <label for="Address" class="form-label">Address</label>
                <input type="text"class="form-control"  name="address" ><br>
                 @error('address')
                 {{$message}}<br>
                 @enderror

                 <label for="Latitute" class="form-label">Latitude</label>
                <input type="text"class="form-control"  name="lat" ><br>
                 @error('latitude')
                 {{$message}}<br>
                 @enderror

                 <label for="longitude" class="form-label">longitude</label>
                <input type="text"class="form-control"  name="long" ><br>
                 @error('longitude')
                 {{$message}}<br>
                 @enderror

             
                 <select name="city_id"type="text" class="form-control">
                 <option value="">Select city</option>
                 @foreach($cities as $city)
                 <option value="{{$city->id}}">{{$city->name}}</option>
                 @endforeach
                </select><br>

                <select name="area_id" type="text" class="form-control">
                 <option value="">Select area</option>
                 @foreach($areas as $area)
                 <option value="{{$area->id}}">{{$area->name}}</option>
                 @endforeach
                </select><br>

    


                 </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
     </div>
 </div>


</body>
</html>