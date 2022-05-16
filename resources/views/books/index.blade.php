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
            <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Book Name</th>
      <th scope="col">Book description</th>
      <th scope="col">Author</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($book as $book)
    <tr>
    
      <td>{{$book->id}}</td>
      <td>{{$book->name}}</td>
      <td>{{$book->description}}</td>
      <td>
      @foreach($book->authors as $author)
      <ul>
          <li>{{$author->name}}</li>
      </ul>
      @endforeach
      </td>
     
      <td><a class="btn btn-sm btn-primary"href="{{route('books.edit',$book->id)}}">Edit</a></td>
    </tr>
    @endforeach
 
  </tbody>
</table>
            </div>
        </div>
    </div>
    
</body>
</html>