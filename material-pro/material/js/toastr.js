/*
Template Name: Monster Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: js
*/
$(function() {
    "use strict";
      $(".tst1").click(function(){
           $.toast({
            heading: 'Welcome to Monster admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'info',
            hideAfter: 3000, 
            stack: 6
          });

     });

      $(".tst2").click(function(){
           $.toast({
            heading: 'Welcome to Monster admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'warning',
            hideAfter: 3500, 
            stack: 6
          });

     });
     //  $(".tst3").click(function(){
     //    var id=this.id;
     //    var thisId="#"+id;
     //    var lastChar = id.substring(6);
     //    var text_show="shh";
     //      $.ajax({
     //          type: "GET",
     //          url: "getcarid_toastr.php",
     //          data: {id:lastChar},
     //          cache: false,
     //          dataType: 'json',
     //          success: function(data) {
     //            //var op=parseInt(data.status);
     //              alert(data.status);
     //              var car_id=data.carid.toString();
     //              var deal_title=data.dealtitle.toString();
     //              var text_show="CAR ID: "+car_id+ "<br /> NAME: "+deal_title;

     //               $.toast({
     //                heading: 'Car added to inspection list',
     //                text: text_show,
     //                position: 'top-right',
     //                loaderBg:'#ff6849',
     //                icon: 'success',
     //                hideAfter:4000, 
     //                stack: 6
     //              });
                  
     //          },
     //          error: function(err) {
     //            alert(err);
     //          }
     //      });






     // });

     //  $(".tst4").click(function(){
     //    // var id=this.id;
     //    // var thisId="#"+id;
     //    // var lastChar = id.substring(6);
     //    // var text_show="shh";
     //    //   $.ajax({
     //    //       type: "GET",
     //    //       url: "getcarid_toastr.php",
     //    //       data: {id:lastChar},
     //    //       cache: false,
     //    //       dataType: 'json',
     //    //       success: function(data) {
     //    //         //var op=parseInt(data.status);
     //    //           alert(data.status);
     //    //           var car_id=data.carid.toString();
     //    //           var deal_title=data.dealtitle.toString();
     //    //           var text_show="CAR ID: "+car_id+ "<br /> NAME: "+deal_title;



     //    //            $.toast({
     //    //             heading: 'Car removed from inspection list.',
     //    //             text: text_show,
     //    //             position: 'top-right',
     //    //             loaderBg:'#ff6849',
     //    //             icon: 'error',
     //    //             hideAfter: 4000,
     //    //             stack: 6
                    
     //    //           });
     //    //       },
     //    //       error: function(err) {
     //    //         alert(err);
     //    //       }
     //    //   });




     // });
});
          
