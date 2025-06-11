<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel CRUD Operations - Basic</title>

        <!-- bootstrap minified css 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <!-- jQuery library 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
        <!-- bootstrap minified js 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        
        <!-- custom CSS -->

      <link rel="stylesheet" href="{{asset('css/bootstrapv5.min.css')}}">
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrapv5.min.js')}}"></script>

         <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">      
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script> -->
        
        <style>
        h1{font-size:23px;}
        .pull-left h2{margin-top:0;font-size:20px;}

        .thumbnail {
    cursor: pointer;
    height: 10em;
    width: 100%;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    box-sizing: content-box;
    outline: 1px solid red;
}



.thumbnail > img {
    max-height: 10em;
    max-width: 10em;
}

.label-wrap{
  display:flex;
}

        </style>
        
      
    </head>

    <body style="background-color: aqua;">
        <div class="container mt-1">
             <div class="text-center mb-4">
            <h1 style="font-weight: bold;color: red;">STUDENT CRUD</h1>
           </div>
             
            @yield('content')
        </div>
    </body>
</html>