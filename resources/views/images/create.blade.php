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
             <form action="{{route('images.store')}}"method="POST" enctype="multipart/form-data">
                 @csrf
           
                    <div class="mb-3">
                        <label for="img_up" class="form-label"> img_ups Upload</label>
                         <input type="file" name="img_up[]" multiple class="form-control @error('img_up') is-invalid @enderror" >
                            
                         @error('img_up')
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