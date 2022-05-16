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
                 <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      
    </tr>
  </thead>
  <tbody>
         <tr>
          <td>{{$country->name}} (Country)</td>
          <td>{{$country->capital}} (Capital)</td>
          
      </tr>
      @foreach($country->persons as $person)
      
    <tr>
      <th scope="row">{{$person->id}}</th>
      <td>{{$person->name}}</td>
      <td>{{$person->email}}</td>
      <td>{{$person->phone}}</td>
      
    </tr>
   @endforeach
  </tbody>
</table>
            </div>
        </div>
    </div>
</body>
</html>