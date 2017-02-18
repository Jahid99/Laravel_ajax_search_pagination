function myFunction() {
	//alert('jahid');
	var results_box = document.getElementById("results_box");
    $.ajax({
            method: 'POST',
            url: urlEdit,
            
            data: {body: $('#search-body').val(), _token: token},
        	dataType:'json',
        success :function(response){
    
    //alert(response[1].name);
   // alert(response.length);


  //   for(i = 0; i < response.length; i++){
       
  //   		 html_output += '<div class="col-sm-4"><img src="images/' + response[i].image_name +
  // '" height="200px" width="100%"  /><h3>'+response[i].name+'</h2><p>'+response[i].position+'</p>';

  //     }
  	html_output = '';
  	for(i=0;i<response.length;i++){
  		   		 html_output += '<div class="col-sm-4"><img src="images/' + response[i].image_name +
  '" height="200px" width="100%"  /><h3>'+response[i].name+'</h2><p>'+response[i].position+'</p><p>'+response[i].email+'</p></div>';
  	}

      results_box.innerHTML = html_output;
    }

       
});
}