<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
    
          <img src="public/x.jpg" class="d-block w-100" alt="...">
      
        <div class="carousel-caption">
            <h4 class="color">This is The First Foto</h4>
             <p>Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in the 1960s wits containing Lorem Ipsum passages
          
             Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in the 1960s wits containing Lorem Ipsum passages, and mor an</p>
            
           <button type="button" class="btn btn-danger back-color">
             <span class="first-span"></span>
              <span class="second-span"> Show</span>
          </button>
        
        
         </div>
      
      </div>
      <div class="carousel-item">
        <img src="public/x2.jpg" class="d-block w-100" alt="...">
         <div class="carousel-caption">
              <h4 class="color">This is The second Foto</h4>
             <p class="lead"> Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in the 1960s wits containing Lorem Ipsum passages
            
               Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in the 1960s wits containing Lorem Ipsum passages, and mor and more rec</p>
            
           <button type="button" class="btn btn-danger back-color">
                <span class="first-span"></span>
               <span class="second-span"> Show</span>
             
           </button>
       </div>
      </div>
      
    
     <div class="carousel-item">
        <img src="public/s.jpg" class="d-block w-100" alt="...">
         <div class="carousel-caption">
                <h4 class="color">This is The Third Foto</h4>
               <p class="lead"> Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in the 1960s wits containing Lorem Ipsum passages
              
                 Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in </p>
                <button type="button" class="btn btn-danger back-color">
                   <span class="first-span"></span>
                  <span class="second-span"> Show</span>

                </button>
         </div>
     </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
  </a>
</div>

<div class="container"  id="service">
 
  <div class="service">
     <h2 class="text-center color"> Our Service </h2>
 
        <div class="row">
           
       <div class="col-lg-4">
         <div class="block  wow bounceInLeft">
            <i class="far fa-arrow-alt-circle-up fa-5x color"></i>
           <p class="lead">Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in the 1960s wits containing Lorem Ipsum passages</p>
         </div>
       </div>
     <div class="col-lg-4">
        <div class="block wow bounceInDown">
            <i class="far fa-bell fa-5x color  wow bounceInDown"></i>
            <p class="lead">Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in the 1960s wits containing Lorem Ipsum passages</p>
          </div>
       </div>
     <div class="col-lg-4">
        <div class="block  wow bounceInRight">
            <i class="far fa-check-circle fa-5x color"></i>
            <p class="lead">Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in the 1960s wits containing Lorem Ipsum passages</p>
          </div>
      </div>
        </div>
        </div>
 </div>
        <div class="resource">
           <div class="container">
              <div class="row">
               <div class="col-lg-6">
                  <h4 class="color"><?= $cont['title'] ?></h4>

                 <p class="lead"><?= $cont['article'] ?></p>
               </div>
                <div class="col-lg-6">
                <img src="public/upload/image/<?= $cont['article_img'] ?>">
             
                </div>
              </div>
           </div>
        </div>

<div id="carouselExampleCaptions" class="carousel our-team" data-ride="carousel">
 <ol class="carousel-indicators">
   <li data-target="#carouselExampleCaptions" class="x active" data-slide-to="0" ><img src="/public/a33.jpg"></li>
    <!--<li data-target="#carouselExampleCaptions" class="x" data-slide-to="1"><img src="/public/a33.jpg"></li>
    <li data-target="#carouselExampleCaptions" class="x" data-slide-to="2"><img src="/public/a33.jpg"></li>
    <li data-target="#carouselExampleCaptions" class="x" data-slide-to="3" ><img src="/public/a33.jpg"></li>
    <li data-target="#carouselExampleCaptions" class="x" data-slide-to="4"><img src="/public/a33.jpg"></li>-->
    <?php $i=1; foreach($employees as $employee){ echo'<li data-target="#carouselExampleCaptions" class="x" data-slide-to="'.$i++ .'"><img src="public/upload/image/'.$employee['img'].'"></li>';} ?>
   </ol>
  
  <div class="carousel-inner wow bounceInDown">
    <h2  class=" color text-center" style="color:"> Our Team</h2>

    <div class="carousel-item team active">

      <h3 >Markus Hoffmann</h3>
       <p class="lead">Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in the 1960s wits containing Lorem Ipsum passages</p>

    
    </div>
    <div class="carousel-item team">
     
       <h3> Muster Mann </h3>
        <p class="lead">Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in the 1960s wits containing Lorem Ipsum passages</p>
        
    </div>
    <div class="carousel-item team">
        <h3> Hoffmann Muster</h3>
         <p class="lead">Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in the 1960s wits containing Lorem Ipsum passages</p>
    </div>
    <div class="carousel-item team">
     
        <h3> Alfred  john</h3>
         <p class="lead">Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in the 1960s wits containing Lorem Ipsum passages</p>
    </div>
  <div class="carousel-item team">
     <h3> Hoffmann</h3>
      <p class="lead">Lorem Ipsum is simply dummy text ofting, remaining essentially unchanged. It was popularised in the 1960s wits containing Lorem Ipsum passages</p>
    
  </div>
  

  </div>
  
</div>

<section class="statistic">
		<div class="overlay">
			<div class="container">
			<h4 class=text-center style="margin-bottom:32px"> Website Statistics</h4>
				<div class="row">
				<div class="members text-center col-lg-4 wow bounceInDown">
					<h6>Members</h6>
					<i class="fas fa-users fa-5x"></i><br>
					<span class="fa-2x">38668</span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
					</div>
				<div class="members text-center col-lg-4 wow heartBeat">
					<h6>Members</h6>
					<i class="fas fa-broadcast-tower fa-5x"></i><br>
					<span class="fa-2x">9642567</span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
					</div>
				
				<div class="members text-center col-lg-4  wow bounceInRight">
					<h6>Members</h6>
					<i class="fas fa-id-card fa-5x"></i><br>
					<span class="fa-2x">6782</span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
					</div>
				
				
				</div>
			</div>
			</div>
		</section>

<section class="contactus" >

  <div class="overlay">
  <div class="container " id="contact">
      <h2 class="text-center color">Contact Us</h2>
   
      
            <div class="login">
              <form class="form-group form-contact" action="aziz.waly6@gmail.com">
                 <div class="row">
                  <div class="col-lg-6">
               
                  
                            <i class="fa fa-user fa-2x"></i>
                      
                        <input class="form-control" type="text" name="name" placeholder="User Name" required="required">
                      
                          <i class="fas fa-unlock-alt fa-2x"></i>
                        <input class="form-control" type="text" name="password" placeholder="Password">
                         <i class="fas fa-phone fa-2x"></i>
                         <input class="form-control" type="text" name="phone" placeholder="phone number">
                         
                  </div>
                  <div class="col-lg-6">
                         <textarea cols="textarea">
              


                           </textarea>
                  </div>
                  
                 </div>
                      <button class="btn btn-danger back-color">
                         <span class="first-span"></span>
                         <span class="second-span ">Send</span>
                      </button>
              </form>
             
       
      


      </div>

</div>
</div>
</section>

<!-- <div class="progress">
    <span data-progress="44"></span>
    </div> -->
<a class=""><i class="fas fa-angle-up fa-3x color " id="scroll-top"></i></a>

  
<section class="n">
	<div class="container ">
		
		<div class="row">
			<div class="col-lg-6 wow bounceInLeft">
		<div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" ><span> PHP 25%</span></div>
</div>

<div class="progress">
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span> mysql 50%</span></div>
</div>
<div class="progress">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span>javascript75%</span></div>
</div>
<div class="progress">
  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span>css3/html 100%</span></div>
</div>
		</div>	
		<div class="col-lg-6 wow bounceInRight">
    <h4>this section is Progress</h4>
			<p>
			this teil speak about our the programming and design langugs that we use in our work Lorem Ipsum is simply dummy text of the printing and t Lorem Ipsum is simply dummy text of the printing and tyy</p>
			
			
			
			</div>
		
		</div>
		
		
		
		</div>
	
	</section>
<div class="popup">
  <div class="inner">
   <p>  often the first stop in any user’s journey through a website or blog.
            If your visitors aren’t impressed, you can expect them to leave without reading your awesome content or completing
  </p> 
            <button>Close</button>
    
  </div>
</div>





