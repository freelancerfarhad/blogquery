<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Author Create</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
             <form action="{{route('author.store')}}"method="POST">
                 @csrf

                 <div class="mb-3">
                    <label for="name" class="form-label">Author Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Author Name">
                    </div>

                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email"name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3">Create</button></div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>