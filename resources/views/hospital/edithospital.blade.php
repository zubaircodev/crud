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
             <form method="POST" action="{{route('hospitals.update', $hospitals->id)}}">
             @csrf
                 <div class="form-group">
                 <label for="Name" class="form-label">Hospital Name</label>
                <input type="text"class="form-control" value="{{$hospitals->name}}" name="name" ><br>
                 @error('name')
                 {{$message}}<br>
                 @enderror

                 <label for="Address" class="form-label">Address</label>
                <input type="text"class="form-control" value="{{$hospitals->address}}"  name="address" ><br>
                 @error('address')
                 {{$message}}<br>
                 @enderror

                 <label for="Latitute" class="form-label">Latitude</label>
                <input type="text"class="form-control"value="{{$hospitals->lat}}"  name="lat" ><br>
                 @error('latitude')
                 {{$message}}<br>
                 @enderror

                 <label for="longitude" class="form-label">longitude</label>
                <input type="text"class="form-control"value="{{$hospitals->long}}"  name="long" ><br>
                 @error('longitude')
                 {{$message}}<br>
                 @enderror

                 <label for="City" class="form-label">Select City</label>
                 <select name="city_id"  type="text" class="form-control">
                 @foreach($cities as $city)
                 <option value="{{ $city->id }}" {{ ( $hospitals->city_id == $city->id) ? 'selected' : ""}}> {{ $city->name}}</option>
                 @endforeach
                </select><br>
       

                <label for="Area" class="form-label">Select Area</label>
                <select name="area_id" type="text" class="form-control">
                 @foreach($areas as $area)
                 <option value="{{ $area->id }}" {{ ( $hospitals->area_id == $area->id) ? 'selected' : ""}}> {{ $area->name}}</option>

                 @endforeach
                </select><br>

              
                
                 </div>
                 <button type="submit" class="btn btn-primary mb-5">Submit</button>
              </form>
        </div>
     </div>
 </div>

</body>
</html>