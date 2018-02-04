$(".viewUser").click(function(){
	var id= this.id;
	var lastChar= id.substring(8);
	    $.ajax({
			    type: "GET",
			    url: "getuserdetail.php",
			    data: {id:lastChar},
			    cache: false,
			    dataType: 'json',
			    success: function(data) {
			        document.getElementById("sidebarName").innerHTML = data.name;
			        document.getElementById("sidebarType").innerHTML = data.type;
			        document.getElementById("sidebarEmail").innerHTML = data.email;
			        document.getElementById("sidebarContact").innerHTML = data.contact;
			        document.getElementById("sidebarAddress").innerHTML = data.address;
			        
			    },
			    error: function(err) {
			    	alert(err);
			    }
			});

});