<?php include 'header.php';
	include 'controllers/add_controller.php';
	$Students = getAll_Students();
?>


<div class="center">
	<h3 class="text">All Students</h3>
	<table class="table table-striped">
		<thead>
			<th>Name</th>
			<th> ID</th>
			<th>DOB </th>
			<th> Credit</th>
			<th>CGPA</th>
			<th>DEPT_ID</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$i = 1;
				foreach($students as $s){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$s["name"]."</td>";
						echo '<td><a href="edit_student.php?id='.$s["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
<?php include 'footer.php';?>