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
    <h1>Country Choice Korun</h1>
    <form action="{{route('country.store')}}" method="post">
        @csrf
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Country Name</label>
            <input type="text" class="form-control" name="name" placeholder="Country Name">
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Capital Name</label>
            <input type="text" class="form-control" name="capital" placeholder="Capital Name">
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Currence Name</label>
            <input type="text" class="form-control" name="currence" placeholder="Currence Name">
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Population Name</label>
            <input type="text" class="form-control" name="population" placeholder="Population Name">
            </div>

            <div class="mb-3">
            
            <button type="submit"class="btn btn-sm btn-success">Create</button>
            <a href="{{url('/country')}}"class="btn btn-sm btn-danger">Back</a>
            </div>
            
    </form>
    </div>
</body>
</html>