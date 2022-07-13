$('#loading').show();
createImage();

var countdown = Date.now(),
    currentTime = Date.now();

$(document).ready(function()
{
  $('.ellipsis').dotdotdot();
  $('#normalSubmit').click(function() {
    $('#directpost').val('');
    $('#coverForm').attr("target","_self").submit();
    $('#plzlike').fadeIn(800);
  });
  $('#facebookSubmit').click(function() {
    $('#directpost').val('1');
    $('#coverForm').attr("target","_blank").submit();
  });
  $("#text1, #text2, #text3").on('blur', function() {
    createImage();
  });
  $("#text1, #text2, #text3").on('keydown', function() {
    countdown = Date.now();
  });
  $("#text1, #text2, #text3").on('keyup', function() {
    setTimeout(function(){
      currentTime = Date.now();
      if((currentTime - countdown) >= 240 ) {
        $('#loading').show();
        createImage();
      }
    }, 250);
  });
  $("#background").on('change', function() {
    $('#loading').show();
    var background = $("#background").val();
    $('#coverprint').css('backgroundImage','url(images/board/'+background+'.jpg)');
    createImage();
  });
});

//ajax function
function createImage(){
  //$('#loading').show();
  $.ajax({
    url: 'ajax',
    dataType: 'html',
    type:'POST',
    data: {
      text1: $("#text1").val(),
      text2: $("#text2").val(),
      text3: $("#text3").val(),
      background: $("#background").val()
    },
    success: function(response){
      $('#coverprint').html(response).promise().done(function(){
        $('#loading').fadeOut();
      });
    }
  });
}

$(window).scroll(function (event) {
  var scroll = $(window).scrollTop();
  var height = $(window).height();
  if(scroll > height)
    $('.gototop').show();
  else
    $('.gototop').hide();
});
$('.gototop').click(function(){
  $('html,body').animate({scrollTop: 0},'fast');
});
