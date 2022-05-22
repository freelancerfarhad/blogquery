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
             <form action="{{route('videos.update',$video->id)}}"method="POST">
                 @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="Url" class="form-label">  Url</label>
                         <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" id="Url"value="{{!empty(old('url')) ? old('url'):$video->url}}">
                            
                         @error('url')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        
                        </div>
                        <div class="mb-3">
                        <label for="video_path" class="form-label">  video_path</label>
                         <input type="text" name="video_path" class="form-control @error('video_path') is-invalid @enderror" id="video_path" placeholder=" video_path"value="{{$video->video_path}}">
                            
                         @error('video_path')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        
                        </div>
                        <div class="mb-3">
                        <label for="tags" class="form-label">  Tags</label>
                        
                         {{-- <select name="tags[]" class="form-control @error('tags') is-invalid @enderror" id="tags"multiple>
                             @foreach($tags as $tag)
                            <option value="{{$tag->id}}"
                                {{$selected_tags->contains($tag->id) ? 'selected' : ''}}
                                >{{$tag->tags}}</option>
                            @endforeach
                         </select> --}}
                         @foreach($tags as $tag)
                         <input type="checkbox" name="tags[]" id="tags"value="{{$tag->id}}"{{$selected_tags->contains($tag->id) ? 'checked' : ''}}>{{$tag->tags}}
                         @endforeach
                            
                         @error('tags')
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