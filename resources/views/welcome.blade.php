<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}


</style>
</head>
<body>
<br>
 <center><a href="{{url('/')}}" class="btn btn-info" role="button">Click here for with pagination</a></center><br>
<div class="jumbotron text-center">
  <div class="container">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
  <form>
  <input type="text" name="search" id="search-body" placeholder="Search.." onkeyup="myFunction()">
</form>

</div>
</div>
</div>
</div>
  
<div class="container">
  <div class="row">
    
  <div id="results_box">

    <div class="col-sm-4">
      <img src="images/jahid.jpg" height="200px" width="100%" />
      <h3>Jahid</h3>
      <p>Web Developer</p>
      <p>jahidulpathan@gmail.com</p>
    </div>
  
    <div class="col-sm-4">
      <img src="images/faisal.jpg" height="200px" width="100%" />
      <h3>Faisal</h3>
      <p>Java Programmer</p>
      <p>faisal@gmail.com</p>
    </div>
  
    <div class="col-sm-4">
      <img src="images/junayed.jpg" height="200px" width="100%" />
      <h3>Junayed</h3>
      <p>IOS App Developer</p>
      <p>junayed@gmail.com</p>
    </div>
  
    <div class="col-sm-4">
      <img src="images/mishu.jpg" height="200px" width="100%" />
      <h3>Mishu</h3>
      <p>Android App Developer</p>
      <p>mishu@gmail.com</p>
    </div>
  
    <div class="col-sm-4">
      <img src="images/piklo.jpg" height="200px" width="100%" />
      <h3>Piklo</h3>
      <p>Web Developer</p>
      <p>piklo@gmail.com</p>
    </div>
  
    <div class="col-sm-4">
      <img src="images/rabbi.jpg" height="200px" width="100%" />
      <h3>Rabbi</h3>
      <p>PHP Programmer</p>
      <p>rabbi@gmail.com</p>
    </div>
  
    <div class="col-sm-4">
      <img src="images/ridoy.jpg" height="200px" width="100%" />
      <h3>Ridoy</h3>
      <p>Android App Developer</p>
      <p>ridoy@gmail.com</p>
    </div>
  
    <div class="col-sm-4">
      <img src="images/shipa.jpg" height="200px" width="100%" />
      <h3>Shipa</h3>
      <p>Java Developer</p>
      <p>shipa@gmail.com</p>
    </div>

    <div class="col-sm-4">
      <img src="images/jubayed.jpg" height="200px" width="100%" />
      <h3>Jubayed</h3>
      <p>IOS app developer</p>
      <p>jubayed@gmail.com</p>
    </div>
   </div>
  </div>
  
</div>
<br>
<script type="text/javascript">
     var token = '{{ Session::token() }}';
     var urlEdit = '{{ route('edit') }}';
</script>
<script src="{{ URL::to('js/search.js') }}"></script>
</body>
</html>