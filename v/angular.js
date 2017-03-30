$(document).ready(function(){
$(window).mousemove(function (pos) {
$("#pixel").css('left',(pos.pageX-47)+'px').css('top',(pos.pageY-15)+'px');
});
});

