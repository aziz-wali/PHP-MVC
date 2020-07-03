
<h2 class="text-center">Edit view </h2>
 <form class="form-member" action="/employee/save/<?= $employee['id'] ?>" method="POST" enctype="multipart/form-data">
				         
     <h4 class="text-center">Edit Items<h4><br>
    <h6 class="control-label">name</h6>

		<input class="form-control" type="text" name="name"  value="<?= $employee['name'] ?>" placeholder="enter name of object" required="required">

       <h6 class="control-label">Last name</h6>
		<input class="form-control" type="text" name="last" placeholder="enter your ordering." value="<?= $employee['lastname'] ?>">
		<h6 class="control-label">salary</h6>

		<input class="form-control" type="number" name="salary"  value="<?= $employee['salary'] ?>" placeholder="enter your desc.">
		<label class="control-label">address</label>
		<input class="form-control" type="text" name="address" value="<?= $employee['address'] ?>" placeholder="enter your desc.">
		<label class="control-label">Image</label>
		<input class="form-control" type="file" name="img" value="<?= $employee['img'] ?>" placeholder="enter your desc.">
	

		
	

         <button class="btn btn-primary">Save</button>
		 
		</form>