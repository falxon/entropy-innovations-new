$(document).ready(function(){
   if(window.location.pathname != "/current"){
     $("#project").hide();
   }else{
     $("#project").show();
   }

   $("#topic").change(function(){
     if($("#topic").val() != "current"){
       $("#project").hide();
     }
     else {
       $("#project").show();
     }
   });
});
