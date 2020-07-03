function showmenu(){
		var btn=document.getElementById("btn");
		if(btn.innerHTML=='X'){
        btn.innerHTML='<i class="fas fa-bars"></i>';}else{btn.innerHTML='X';}

		document.getElementById("slide").classList.toggle('active-m');}

var scroll= document.getElementById('scroll-top');
	window.onscroll=function(){

     if(window.pageYOffset >= 1000){
     	scroll.style.display='block';
     }else{
     		scroll.style.display='none';
     }


		}
		scroll.onclick=function(){
			scrollTo(0,0);
		}