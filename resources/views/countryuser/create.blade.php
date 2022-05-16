<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>country user create</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <form action="{{route('countryuser.store')}}" method="post">
                @csrf    

        

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">User Name</label>
                <input type="text" class="form-control"name="name"placeholder="Enter Your Name">
                </div>

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">User Email</label>
                <input type="email" class="form-control"name="email" id="exampleFormControlInput1" placeholder="Enter Your Email">
                </div>

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">User Phone</label>
                <input type="text" class="form-control"name="phone" id="exampleFormControlInput1" placeholder="Enter Your phone">
                </div>

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">User Country</label>
                <select name="country_id"  class="form-control">
                    <option value="">Selected Country</option>
                    @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                  
                </select>
              
                 </div>

                <div class="mb-3">
            
            <button type="submit"class="btn btn-sm btn-success">Create</button>
            <a href="{{url('/countryuser')}}"class="btn btn-sm btn-danger">Back</a>
            </div>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>