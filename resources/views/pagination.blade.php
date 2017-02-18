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
 <center><a href="{{url('/without_pagination')}}" class="btn btn-info" role="button">Click here for without pagination</a></center><br>
<div class="jumbotron text-center">
  <div class="container">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">

  <form action="{{url('/paginate_ajax')}}" method="get" id="frmsearch">
  <input type="text" name="search" placeholder="Search.." id="search">
  </form>

</div>
</div>
</div>
</div>
  
<div class="result">
  @if(count($posts)>0)
<div class="container">
  <div class="row">
    
  <div id="results_box">

    


    <div id="posts">
    @foreach ($posts as $post)
        <div class="col-sm-4">
      <img src="images/{{ $post->image_name }}" height="200px" width="100%" />
      <h3>{{ $post->name }}</h3>
      <p>{{ $post->position }}</p>
      <p>{{ $post->email }}</p>
    </div>
    @endforeach
    
</div>
  
    
   </div>
  </div>
  <div>{{$posts->render()}}</div>
</div>
@else
  
  <div class="container">
    <div class="row">

    <b>{{$search}}</b> was not found.
    </div>
  </div>

@endif
</div>


<br>
<script>
  $('#frmsearch').on('keyup',function(e){
  e.preventDefault();
  var url = $(this).attr('action');
  var data = $(this).serializeArray();
  var get = $(this).attr('method');
  $.ajax({
    type : get,
    url : url,
    data : data
  }).done(function(data){
    $('.result').html(data);
  })
})

$(document).on('click','.pagination a',function(e){
  e.preventDefault();
  var page = $(this).attr('href').split('page=')[1];
 // alert(page);
  getTeamMembers(page,$('#search').val());

})
function getTeamMembers(page,search)
{

  var url = "{{url('/getteaminfomembers')}}";

  $.ajax({
    type : 'get',
    url : url+'?page='+page,
    data : {'search':search},
  }).done(function(data){

    $('.result').html(data);
   
  })

}
</script>
</body>
</html>