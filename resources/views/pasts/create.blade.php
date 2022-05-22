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
             <form action="{{route('pasts.store')}}"method="POST">
                 @csrf
           
        <div class="mb-3">
            <label for="title" class="form-label">  title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder=" title">
                
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            
            </div>
            
            <div class="mb-3">
            <label for="path" class="form-label">  path</label>
                <input type="text" name="path" class="form-control @error('path') is-invalid @enderror" id="path" placeholder=" path">
                
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