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
              @if(session('success'))
                <div class="alert alert-success" role="alert">
                {{session('success')}}
              </div>
              @endif
              <div class="card">
                <div class="card-title">
                  <a href="{{route('videos.create')}}"class="btn btn-sm btn-success">Add Post</a>
                </div>
              </div>
              <p>  {{request()->session()->get('user_name')}}</p>
              <p>  {{Session()->get('user_name','this is the vlue')}}</p>
              <p>  {{Session()->has('user_name');}}</p><!--checked session-ace ki na--->
              <p>  {{Session()->has('user_name')?'yes':'no'}}</p><!--checked session-ace ki na--->

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">@id</th>
                    <th scope="col">Video Url</th>
                    <th scope="col">Video Path</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($videos as $video)
                  <tr>
                  
                    <td>{{$video->id}}</td>
                    <td>{{$video->url}}</td>
                    <td>{{$video->video_path}}</td>
                      <td>
                          <a href="videos/{{$video->video_path}}"class="btn btn-sm btn-primary">Show</a> 
                          <a href="videos/{{$video->id}}/edit"class="btn btn-sm btn-success">edit</a> 
                      </td>
                  </tr>
                  @endforeach
              
                </tbody>
              </table>  
            </div>
           
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></body>
</html>