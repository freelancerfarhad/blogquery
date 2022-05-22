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
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">@id</th>
                    <th scope="col">Video Url</th>
                    <th scope="col">Video Path</th>
                    
                  </tr>
                </thead>
                <tbody>
                    
                  <tr>
                  
                    <td>{{$video->id}}</td>
                    <td>{{$video->url}}</td>
                    <td>{{$video->video_path}}</td>

                  </tr>
              
              
                </tbody>
              </table> 
              <div class="card">
                <div class="card-title">
                  <!-- <ul>
                   
                      <li></li>
                      <li></li>
                    
                  </ul> -->
                  <table class="table">
              
                <tbody>
                @foreach($video->comments as $vid)
                  <tr>
                  
                    
                    <td>{{$vid->comment_body}}</td>
                    <td>{{$vid->created_at->diffForHumans()}}</td>

                  </tr>
                  @endforeach
              
                </tbody>
              </table> 
                </div>
              </div>
              <form action="/videos/{{$video->id}}/comments"method="POST">
                 @csrf
           
                    <div class="mb-3">
                        <label for="comments" class="form-label">  Comment</label>
                         <textarea name="comment_body" id="comments" cols="30" rows="5" class="form-control @error('comment_body') is-invalid @enderror"placeholder=" Comment Now..."></textarea>
                         @error('comment_body')
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