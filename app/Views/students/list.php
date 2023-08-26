<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		table{
			border: 1px solid black;
			border-collapse: collapse;

		}

		tr,td{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<?php if(session()->has('message')): ?>
		<div>
			<p><?= session('message'); ?></p>
		</div>
	<?php endif; ?>
	<a href="students/create">Create student</a>
	<h3>Students List</h3>
	<table >
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Admission Number</th>
				<th>Department</th>
				<th>Faculty</th>
				<th>Gender</th>
				<th>Age</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($students as $student): ?>
				<tr>
					<td><?= $sn++ ?></td>
					<td><?= $student['student_name'] ?></td>
					<td><?= $student['admission_number'] ?></td>
					<td><?= $student['department'] ?></td>
					<td><?= $student['faculty'] ?></td>
					<td><?= $student['gender'] ?></td>
					<td><?= $student['age'] ?></td>
					<td>
						<a href="/student/edit/<?= $student['id'] ?>">Edit</a>
						<a href="/student/delete/<?= $student['id'] ?>">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>