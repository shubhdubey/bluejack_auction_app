$(".inspectCheck").click(function(){

	var id=this.id;
	var thisId="#"+id;
	var lastChar = id.substring(6);
	var iconId="#iconstatus"+lastChar;
	//alert(lastChar);
	$.ajax({
	    type: "GET",
	    url: "changeStatus.php",
	    data: {id:lastChar},
	    cache: false,
	    dataType: 'json',
	    success: function(data) {
	    	//var op=parseInt(data.status);
	        //alert(data.status);
	        if(data.status==1){
		        $(thisId).removeClass("btn-success");
		    	$(iconId).removeClass("mdi-check");
		    	$(thisId).addClass("btn-danger");
		    	$(iconId).addClass("mdi-close");
                var deal_title=data.dealtitle.toString();
                var text_show="CAR ID: "+lastChar+ "<br /> NAME: "+deal_title;



                   $.toast({
                    heading: 'Car removed from inspection list.',
                    text: text_show,
                    position: 'top-right',
                    loaderBg:'#ff6849',
                    icon: 'error',
                    hideAfter: 4000,
                    stack: 6
                    
                  });



                   //Chrome Notification
                       var options = {
        body: "Body text"
    }
  // Let's check if the browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }

  // Let's check if the user is okay to get some notification
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
    var notification = new Notification("Custom notification!",options);
  }

  // Otherwise, we need to ask the user for permission
  // Note, Chrome does not implement the permission static property
  // So we have to check for NOT 'denied' instead of 'default'
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {

      // Whatever the user answers, we make sure we store the information
      if(!('permission' in Notification)) {
        Notification.permission = permission;
      }

      // If the user is okay, let's create a notification
      if (permission === "granted") {
        var notification = new Notification("Hi there!");
      }
    });
  }





				}
			else if(data.status==2){
				$(thisId).addClass("btn-success");
		    	$(iconId).addClass("mdi-check");
		    	$(thisId).removeClass("btn-danger");
		    	$(iconId).removeClass("mdi-close");


		    	var deal_title=data.dealtitle.toString();
                var text_show="CAR ID: "+lastChar+ "<br /> NAME: "+deal_title;



                   $.toast({
                    heading: 'Car added to inspection list',
                    text: text_show,
                    position: 'top-right',
                    loaderBg:'#ff6849',
                    icon: 'success',
                    hideAfter:4000, 
                    stack: 6
                  });
			}
	        
	    },
	    error: function(err) {
	    	alert(err);
	    }
    });
});



function filterStatus(buttonid){
	//alert(buttonid);
	var thisId="#"+buttonid;
	var lastChar = buttonid.substring(6);
	var iconId="#iconstatus"+lastChar;
	//alert(lastChar);

		$.ajax({
	    type: "GET",
	    url: "changeStatus.php",
	    data: {id:lastChar},
	    cache: false,
	    dataType: 'json',
	    success: function(data) {
	    	//var op=parseInt(data.status);
	        //alert(data.status);
	        if(data.status==1){
		        $(thisId).removeClass("btn-success");
		    	$(iconId).removeClass("mdi-check");
		    	$(thisId).addClass("btn-danger");
		    	$(iconId).addClass("mdi-close");

		    	var deal_title=data.dealtitle.toString();
                var text_show="CAR ID: "+lastChar+ "<br /> NAME: "+deal_title;



                   $.toast({
                    heading: 'Car removed from inspection list.',
                    text: text_show,
                    position: 'top-right',
                    loaderBg:'#ff6849',
                    icon: 'error',
                    hideAfter: 4000,
                    stack: 6
                    
                  });


				}
			else if(data.status==2){
				$(thisId).addClass("btn-success");
		    	$(iconId).addClass("mdi-check");
		    	$(thisId).removeClass("btn-danger");
		    	$(iconId).removeClass("mdi-close");


		    	var deal_title=data.dealtitle.toString();
                var text_show="CAR ID: "+lastChar+ "<br /> NAME: "+deal_title;



                   $.toast({
                    heading: 'Car added to inspection list',
                    text: text_show,
                    position: 'top-right',
                    loaderBg:'#ff6849',
                    icon: 'success',
                    hideAfter:4000, 
                    stack: 6
                  });
			}
	        
	    },
	    error: function(err) {
	    	alert(err);
	    }
    });
	
}