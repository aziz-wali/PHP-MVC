<div class="container">
	<div class="manage">
 <a class="btn btn-success" href="/manage/add/">Add article</a>
		
	<?php 
	foreach($controllers as $cont){ ?>
	<div class="row">
		<div class="col-lg-6">
			<h4><?= $cont['title']  ?> </h4>
	    	<p><?= $cont['article']  ?> </p>
		
		</div>
		<div class="col-lg-6">
			<img src="/public/upload/image/<?= $cont['article_img']  ?>">
			</div>
          
	</div>
	
		
		<a class="btn btn-primary" href="edit/<?= $cont['control_id'] ?>/">Edit</a>
		   <a class="btn btn-danger"onclick="return confirm('Are you sure?!')" href="delete/<?= $cont['control_id']?>/">Delete</a>

<hr class="separator">
	<?php }  ?>


</div>
</div>

