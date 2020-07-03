<h2 class="text-center">add view </h2>
 <form class="form-member" action="/employee/save" method="POST" enctype="multipart/form-data">
				         
					    <h4 class="text-center">Add Employee<h4><br>
					   <h6 class="control-label">first name</h6>
				        
						<input class="form-control" type="text" name="name" placeholder="enter name of object" required="required">
				       <h6 class="control-label">last name</h6>
						<input class="form-control" type="text" name="last" placeholder="enter your ordering.">
						
							<label class="control-label">salary</label>
						<input class="form-control" type="number" name="salary" placeholder="enter your desc.">
						<label class="control-label">address</label>
						<input class="form-control" type="text" name="address" placeholder="enter your desc.">
						<label class="control-label">Image</label>
						<input class="form-control" type="file" name="img" placeholder="enter your desc.">
					
					<button class="btn btn-primary text-center"> add</button>
				</form>