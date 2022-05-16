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
       
            
        
        <div class="row mt-5">
        <div class="col-md-12">
                <a href="{{url('/country/create')}}"class="btn btn-sm btn-success">Add Country</a>
            </div>
            <div class="col-md-12  mt-3">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Country Name</th>
                        <th>Capital Name</th>
                        <th>Currence Name</th>
                        <th>Population</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($country as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td><a href="{{route('country.show',$row->id)}}">{{$row->name}}</a></td>
                        <td>{{$row->capital}}</td>
                        <td>{{$row->currence}}</td>
                        <td>{{$row->population}}</td>
                        <td>{{$row->created_at->diffForHumans()}}</td>
                        <td>{{$row->updated_at->format('Y-m-d')}}</td>
                        <td>
                            <!-- <a href="/country/{{$row->id}}/edit"class="btn btn-sm btn-primary">Edit</a> |  -->
                            <a href="{{route('country.edit',$row->id)}}"class="btn btn-sm btn-primary">Edit</a> |
                            <form action="{{route('country.destroy',$row->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit"class="btn btn-sm btn-danger">delete</button>
                            </form>
                           
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>