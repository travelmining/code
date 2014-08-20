$(document).ready(function(){

   $(".alignment .btn").click(function() {
		$.ajax({
		type: "POST",
		 url: "getPOI.php",
		data: {'cityPOI' : $(this).text()},
	dataType: 'html',
	 success: function(msg){ 
			   $("#thanks").html(msg);  
			  },
	   error: function(){
			  alert("failure");
			  }
	  });    
    
    });
    

	$("button#loginsubmit").click(function(){
	alert("login");
	 if ( $( "form.contact input[name='Email']").val().length == 0 ) {
		 //alert("need input");
		   if (!$("form.contact p span")) $("form.contact p span").remove();
			 $("form.contact p").append('<span style="color:red">Please key in the email address! </span>' ); 
			 return false;	 

		} else if ( $( "form.contact input[name='Password']").val().length == 0 ){
		 if (!$("form.contact p span")) $("form.contact p span").remove();
		 $("form.contact p").append('<span style="color:red">Please key in your password! </span>' );
		 return false;
		} else {
				$.ajax({
				type: "POST",
				 url: "process.php",
				data: $('form.contact').serialize(),
			 success: function(msg){
					  $("#thanks").html(msg)
					   $("#myModal").modal('hide');    
					  },
			   error: function(){
					  alert("failure");
					  }
			  });
		}
      });
    
}); 

//$(document).ready(function(){
//  $('.loadHtml').click(function(e) {
//    var url = $(this).attr('href') ;
//    $('#destination').html('loading...').load(url);
//    e.preventDefault();
//  });
// });

//$(function(){
//    var URL = 'http://www.flickr.com/photos/namho/2430049659/';
//    var imgCont = '<div class="image-container" style="background: url(' + URL +');"> </div>'; 

//	$(imgCont).appendTo('#image-container');	
//});



// $(function(){
// 	
// 	//assign your api key equal to a variable
// 	var apiKey = '4ef2fe2affcdd6e13218f5ddd0e2500d';
// 
// 	
// 	//the initial json request to flickr
// 	$.getJSON('http://api.flickr.com/services/rest/?&method=flickr.places.find&api_key=' + apiKey + '&query=Beijing&format=json&jsoncallback=?', function(data){
// 		
// 		//loop through the results with the following function
// 		$.each(data.places.place, function(i,placeItem){
// 		
// 		  var woeID = placeItem.woeid;
// 		  //alert(woeID);
// 		  
// 		  $.getJSON('http://api.flickr.com/services/rest/?&method=flickr.photos.search&api_key=' + apiKey + '&woe_id=' + woeID + '&per_page=100&format=json&jsoncallback=?',
//      		function(allItems){
//      		
//      		$.each(allItems.photos.photo, function(k,photoItem){
// 			//build the url of the photo in order to link to it
//      		var photoURL = 'http://farm' + photoItem.farm + '.static.flickr.com/' + photoItem.server + '/' + photoItem.id + '_' + photoItem.secret + '_s.jpg';		
//      		
//      		$.getJSON('http://api.flickr.com/services/rest/?&method=flickr.photos.getInfo&api_key=' + apiKey + '&photo_id=' + photoItem.id + '&format=json&jsoncallback=?',
//  				function(photoInfo){
//  				
//  				if (photoInfo.photo.comments._content>=5) {
// 					//alert(photoURL);
// 			
// 					//create an imgCont string variable which will hold all the link location, title, author link, and author name into a text string
// 					var imgCont = '<div class="image-container" style="background: url(' + photoURL + ');"> </div>'; 
// 					//append the 'imgCont' variable to the document
// 					$(imgCont).appendTo('#image-container');	
// 					}	
//  				
//  				}); //end of photo comments count
// 
// 			});
// 
// 		  }); 
// 			
// 	    }); 
// 
//     });
// 	
// 	jQuery('#loader').remove();
// 	
// }); 
		
		
	
	
	
