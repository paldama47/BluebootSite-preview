$(document).ready(function(){
$('li').mouseenter(function(){
$(this).find('p').fadeTo(200,1);
$(this).find('.bgli').fadeTo(200,.65);
});
$('li').mouseleave(function(){
$(this).find('p').fadeTo(200,0);
$(this).find('.bgli').fadeTo(200,0);

});
});