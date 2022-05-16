<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Document</title>
    <style>
      .actions{float:right;}
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">@id</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date_Of_Birth</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                  <tr>
                  
                    <td>{{$student->id}}</td>
                    <td>{{$student->firstname}}</td>
                    <td>{{$student->lastname}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->date_of_birth->diffForHumans()}}</td>
                    <td>{{$student->username}}</td>
                      <td>
                          <a href="{{route('students.edit',$student->id)}}"class="btn btn-sm btn-primary">Edit</a> 
                          <div class="actions">
                          <form action="{{route('students.destroy',$student->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit"class="btn btn-sm btn-danger">Delete</button>
                          </form>
                          </div>
                          
                      </td>
                  </tr>
                  @endforeach
              
                </tbody>
              </table>  
            </div>
            {{ $students->links() }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></body>
</html>