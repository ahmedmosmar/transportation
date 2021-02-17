$(function() {

'use strict';

$("html").niceScroll({
  cursorcolor:"#fff",
  cursorwidth:"12px",
  cursorborder:"2px solid #fff",
  cursorborderradius:"0px",

});
$('.scrollable').niceScroll({
  cursorcolor:"#0E1436",
  cursorwidth:"10px",
  cursorborderradius:"0px"
});
$('.scroll').niceScroll({
  cursorcolor:"#0E1436",
  cursorwidth:"10px",
  cursorborderradius:"0px"
});




$('[placeholder]').focus(function(){

  $(this).attr('data-text',$(this).attr('placeholder'));
  $(this).attr('placeholder','');
}).blur(function(){
$(this).attr('placeholder',$(this).attr('data-text'));
});

$('[data-toggle="offcanvas"]').click(function(){
	$('#side-menu').toggleClass('hidden-xs');
  $('#user-image').hide();
});

//fonfirmation Message in click Button
$('.confirm').click(function(){
return confirm( "Are You Sure ?");










//swal({

  // title:"kkkkk",
  // text:"nnnnnn",
  // button:"ok",

 //});



});






$('#button').click(function(){

$('#confirm').simpleConfirm({
  message:"????????",
  success:function(){
    $('#alert').simpleAlert({
      message:"success"
    })
  },
  cancel:function(){
    $('#alert').simpleAlert({
      message:"cancel"
    })
  }
})




});



});
