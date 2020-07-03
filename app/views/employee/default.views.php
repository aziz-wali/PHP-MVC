<div class="container">
 <div class="text-center table-responsive">
<h2>hallo from Employees </h2>
<table class="table-bordered ">
		<tr><td><b>ID</b></td>
			<td><b>Name</b></td>
			<td><b>Last name</b></td>
			<td><b>Image</b></td>
            <td><b>Address</b></td>
			<td><b>Salary</b></td>
			<td><b>Options</b></td>


		</tr>
	<?php 
	foreach($employees as $employee){ ?>
	<tr> <td><?= $employee['id']  ?> </td>
		<td><?= $employee['name']  ?> </td>
		<td><?= $employee['lastname']  ?> </td>
		<td><img src="/public/upload/image/<?= $employee['img']  ?> "></td>
		<td><?= $employee['address']  ?> </td>
		<td><?= $employee['salary']  ?>&euro; </td>
		<td><a class="btn btn-primary" href="edit/<?= $employee['id']?>/">Edit</a>
		   <a class="btn btn-danger"onclick="return confirm('Are you sure?!')" href="delete/<?= $employee['id']?>/">Delete</a>


		</td>

	</tr>
	<?php }  ?>
</table>
<a class="btn btn-success" href="add/">Add Employee</a>
</div>
</div>