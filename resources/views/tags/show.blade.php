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
                  
                    <td>{{$tags->id}}</td>
                    <td>{{$tags->tags}}</td>
        

                  </tr>
              
              
                </tbody>
              </table> 
              
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">@id</th>
                    <th scope="col">Video Url</th>
                    <th scope="col">Video Path</th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($tags->videos as $vid)
                  <tr>
                  
                    
                    <td>{{$vid->id}}</td>
                    <td>{{$vid->url}}</td>
                    <td>{{$vid->video_path}}</td>

                  </tr>
                  @endforeach
              
                </tbody>
              </table> 
      
            </div>
           
        </div>
    </div>
</body>
</html>