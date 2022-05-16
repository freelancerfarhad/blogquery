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
             <form action="{{route('students.store')}}"method="POST">
                 @csrf
           
                    <div class="mb-3">
                        <label for="Eamil" class="form-label"> First Name</label>
                         <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="FirstName" placeholder="First Name"value="{{old('firstname')}}">
                            
                         @error('firstname')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        
                        </div>

                    <div class="mb-3">
                        <label for="LastName" class="form-label"> Last Name</label>
                         <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="LastName" placeholder="Last Name"value="{{old('lastname')}}">
                             
                         @error('lastname')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="form-label"> Email</label>
                         <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="Email" placeholder="Email"value="{{old('email')}}">
                             
                         @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        
                    </div>

                    <div class="mb-3">
                        <label for="PHone" class="form-label">Phone</label>
                         <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="PHone" placeholder="Phone"value="{{old('phone')}}">
                             
                         @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        
                    </div> 

                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label"> Date OF Birth</label>
                         <input type="date" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" id="date_of_birth" placeholder="Date OF Birth"value="{{old('date_of_birth')}}">
                             
                         @error('date_of_birth')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label"> User Name</label>
                         <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="User Name"value="{{old('username')}}">
                             
                         @error('username')
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