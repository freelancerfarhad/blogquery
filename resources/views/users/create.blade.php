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
            <!-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->
             <form action="{{route('users.store')}}"method="POST">
                 @csrf
           
                    <div class="mb-3">
                        <label for="Name" class="form-label">  Name</label>
                         <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder=" Name"value="{{old('name')}}">
                            
                         @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        
                        </div>
                        <div class="mb-3">
                        <label for="email" class="form-label">  email</label>
                         <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder=" email"value="{{old('email')}}">
                            
                         @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        
                        </div>
                        <div class="mb-3">
                        <label for="path" class="form-label">  path</label>
                         <input type="text" name="path" class="form-control @error('path') is-invalid @enderror" id="path" placeholder=" path"value="{{old('path')}}">
                            
                         @error('path')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        
                        </div>



                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3">Create</button></div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>