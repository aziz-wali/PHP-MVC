$(function(){

'use strict ';
// $('body').css('paddingTop',$('.navbar').innerHeight());


$('.navbar li span a').click(function(e){
e.preventDefault();
$('html, body').animate({
	scrollTop: $('#'+ $(this).data('scroll')).offset().top}, 1000);
})


$('.navbar li a').click(function(){
	/*if(this.href==window.location.href){
		$(this).addClass('active');
	}*/

	  $('.navbar  a').removeClass('active');
	  $(this).addClass('active');
	// $(this).addClass('active').parent().sibings().find('a').removeClass('active');
});




/*$('.popup .inner button').click(function(){
	$('.popup').fadeOut();
})
$('window').onLoad(function(){

$('.popup').fadeIn();

})*/
$('button').hover(function () {

	$(this).find('span').eq(0).animate({
		width:'100%'
	},300);
},function () {

	$(this).find('span').eq(0).animate({
		width:0
	},300);
})
$('.progress span').each(function(){
	$(this).animate({
		
		width: $(this).attr('data-progress') + '%'
	},1000);
	
	
	
});


/*$('#btn').on('click',(function(){

	$(this).parent('.slide-menu').toggleClass('is-visible');
	if($(this).parent('.slide-menu').hasClass('is-visible')){
		$(this).parent('.slide-menu').animate({
		left:0	
	},500);
		$('body').animate({

			paddingLeft:'250px'
		},500);
	}else{
		$(this).parent('.slide-menu').animate({
		left:'-250px'	
	},500);
		$('body').animate({

			paddingLeft:0
		},500);
	}
}));*/

$('.colors ul li').on('click',(function(){

$('body').attr('add-data-color' ,$(this).data('color'));

}));


})













