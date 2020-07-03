<h2 class="text-center">add view </h2>
 <form class="form-member" action="/manage/save/<?= $controllers['control_id'] ?>" method="POST" enctype="multipart/form-data">
				         
					    <h4 class="text-center">Add Article<h4><br>
					   <h6 class="control-label">Title</h6>
				        
						<input class="form-control" type="text" name="title" placeholder="" value="<?= $controllers['title'] ?>" required="required">
				       <h6 class="control-label">Article</h6>
						<input class="form-control" type="text" name="text"  value="<?= $controllers['article'] ?>"placeholder="enter your ordering.">
						
						
						<label class="control-label">Image</label>
						<input class="form-control" type="file" name="img" placeholder="enter your desc.">
					
					<button class="btn btn-primary text-center"> Save</button>
				</form>