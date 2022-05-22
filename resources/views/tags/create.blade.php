<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tags Create</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                {{session('success')}}
              </div>
              @endif
             <form action="{{route('tags.store')}}"method="POST">
                 @csrf
           
                    <div class="mb-3">
                        <label for="tags" class="form-label"> tags Upload</label>
                         <input type="text" name="tags" multiple class="form-control @error('tags') is-invalid @enderror" >
                            
                         @error('tags')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        
                        </div>
                    
                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3">Upload</button></div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>