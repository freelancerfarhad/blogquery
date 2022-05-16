<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Books Create</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
             <form action="{{route('books.store')}}"method="POST">
                 @csrf

                 <div class="mb-3">
                    <label for="name" class="form-label">Book Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Book Name">
                    </div>

                    <div class="mb-3">
                    <label for="description" class="form-label">Book description</label>
                   <textarea name="description" class="form-control" id="description" cols="10" rows="3"></textarea>
                </div>

                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ISBN</label>
                    <input type="text"name="isbn" class="form-control" id="exampleFormControlInput1" placeholder="isbn number">
                    </div>

                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Author</label>
                    <select name="authors[]" id="" class="form-control"multiple>
                    <!-- <option value="">select author</option> -->
                        @foreach($author as $author)
                        <option value="{{$author->id}}">{{$author->name}}</option>
                        @endforeach
                    </select>   
                </div>

                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3">Book Create</button></div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>