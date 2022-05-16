<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
                <a href="{{url('/countryuser/create')}}"class="btn btn-sm btn-success">Add User</a>
            </div>
            <div class="col-md-12">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Country</th>
    </tr>
  </thead>
  <tbody>
      @foreach($countryuser as $person)
    <tr>
      <th scope="row">{{$person->id}}</th>
      <td>{{$person->name}}</td>
      <td>{{$person->email}}</td>
      <td>{{$person->phone}}</td>
      <td>{{$person->country->name}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
            </div>
        </div>
    </div>
</body>
</html>