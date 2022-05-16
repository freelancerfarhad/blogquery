@extends('layout.app')
@section('content')
@include('partial.singlepssidebar')
<div id="templatemo_right_column">
        
        <div id="templatemo_main">
        
            <div class="post_section">
            
                <span class="comment"><a href="">256</a></span>
            
                <h2>Aliquam lorem ante dapibus in viverra </h2>
    
                December 28, 2048 | <strong>Author:</strong> John | <strong>Category:</strong> <a href="#">Freebies</a>
                
                <a href="" target="_parent"><img src="{{asset('images/templatemo_image_01.jpg')}}" alt="image"></a>
                
              <p>Validate <a href="" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Mauris venenatis quam non nunc convallis tincidunt. Aliquam tempus neque nec nisl pellentesque nec dignissim lorem cursus. Integer cursus ultrices massa non vehicula. <a href="#">Etiam vitae lacus</a> eu arcu rutrum fermentum. Nullam fringilla imperdiet magna, id sagittis nisl feugiat at. </p>
                <p>Donec eget lacus eros, et blandit odio. Maecenas et urna vitae sapien dictum dapibus. Aliquam id sem metus. Aenean sapien felis, congue porttitor elementum quis, <a href="#">pretium sit amet urna</a>.</p>
              <p> Vestibulum eget ligula et ipsum laoreet aliquam sed ut risus. Nulla facilisi. Phasellus nibh justo, lobortis nec vehicula sit amet, <a href="#">cursus vitae ligula</a>.</p>
                
		  </div>
            
            <div class="comment_tab">
           	    Comments           </div>

            <!-- comment  -->
                @include('partial.comment')
             <!-- reply form -->
                @include('partial.commentform')
            
		</div> <!-- end of main -->
    
  <div class="cleaner"></div>
  </div>
  @endsection