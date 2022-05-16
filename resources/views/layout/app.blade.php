
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clean Blog Template</title>
<meta name="keywords" content="clean blog template, html css layout" />
<meta name="description" content="Clean Blog Template is provided by templatemo.com" />
<link href="{{asset('css/templatemo_style.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('css/s3slider.css')}}" rel="stylesheet" type="text/css" />
@yield('style')

</head>
<body>
<div id="templatemo_wrapper">

	<div id="templatemo_menu">
                
        <ul>
            <li><a href="{{route('blog.index')}}" class="current">Home</a></li>
            <li><a href="">Portfolio</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>	
    
    </div> <!-- end of templatemo_menu -->
@yield('content')




  <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>
  
  	<div id="templatemo_footer">
    
		Copyright © 2048 <a href="#">Your Company Name</a> | 
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        
    </div>
  
    <div class="cleaner"></div>
</div> <!-- end of warpper -->

<!-- JavaScripts-->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/s3Slider.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 1600
        });
    });
</script>
</body>
</html>