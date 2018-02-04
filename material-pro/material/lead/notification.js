function check(){
	///alert("hh");
	$.ajax({
            type: 'GET',
            url: 'check_notif.php',
            dataType: 'json',
            success: function(data) {
            	var stat=data.status;
            	var type= data.type;
            	var carid=data.carid;
            	if(stat==1){
            		//alert("Notify");
            		if(type==1){
            		var deal_title=data.dealtitle.toString();
                	var text_show="CAR ID: "+carid+ "<br /> NAME: "+deal_title;



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

            		else if(type==2){
            		var deal_title=data.dealtitle.toString();
                	var text_show="CAR ID: "+carid+ "<br /> NAME: "+deal_title;



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
            	}

            	else if(stat==0){
            		//alert("wrong");
            	}
            	else{
            		//alert("Very wrong");
            	}
        
            },
            error: function (xhr, ajaxOptions, thrownError) {
						alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
						alert("responseText: "+xhr.responseText);
					}
});
}

setInterval(check,1000);

