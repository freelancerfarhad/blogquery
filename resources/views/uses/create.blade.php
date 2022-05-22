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
             <form action="{{route('uses.store')}}"method="POST">
                 @csrf
           
                    <div class="mb-3">
                        <label for="Name" class="form-label">  Name</label>
                         <input type="text" name="user_name" class="form-control" id="user_name" placeholder=" user_name">
                            
                         {{-- @error('user_name') @error('user_name') is-invalid @enderror
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --}}
                        
                        </div>
                        <div class="mb-3">
                        <label for="password" class="form-label">  password</label>
                         <input type="text" name="passowrd" class="form-control" placeholder="password">
                            
                         {{-- @error('password') @error('password') is-invalid @enderror" id="password
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --}}
                        
                        </div>
                   
                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3">Create</button></div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>