$(document).ready(function(){
   if(window.location.pathname != "/current"){
     $("#project").hide();
     $("#project2").removeAttr("required");

   }else{
     $("#project").show();
     $("#project2").attr("required", "true");
   }

   $("#topic").change(function(){
     if($("#topic").val() != "current"){
       $("#project").hide();
       $("#project2").removeAttr("required");
     }
     else {
       $("#project").show();
       $("#project2").attr("required", "true");
     }
   });
});

$(function () {
  $('.example-popover').popover({
    container: 'body'
  })
})

$('.popover-dismiss').popover({
  trigger: 'focus'
})

$('#name').popover("click");
$('#email').popover("click");
$('#subject').popover("click");
$('#project2').popover("click");
