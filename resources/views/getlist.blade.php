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