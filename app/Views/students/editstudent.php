<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<a href="/students"><< Student List</a>

	<form action="/students/update/<?= $student['id'] ?>" method="post">

	<table>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="student_name" value="<?= $student['student_name'] ?>">
			</td>
		</tr>

		<tr>
			<td>Admission Number</td>
			<td><input type="text" name="admission_number" value="<?= $student['admission_number'] ?>" ></td>
		</tr>

		<tr>
			<td>Gender</td>
			<td>
				<select name="gender">
					<option <?= $student['gender'] == "Male" ? 'selected' : '' ?>>Male</option>
					<option <?= $student['gender'] == "Female" ? 'selected' : '' ?>>Female</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Department</td>
			<td><input type="text" name="department" value="<?= $student['department'] ?>"></td>
		</tr>
		<tr>
			<td>Faculty</td>
			<td><input type="text" name="faculty" value="<?= $student['faculty'] ?>"></td>
		</tr>
		<tr>
			<td>Age</td>
			<td><input type="number" name="age" value="<?= $student['age'] ?>"></td>
		</tr>

		<tr>
			<td style="text-align: center;" colspan="2"><button type="submit">Submit</button></td>
		</tr>
	</table>

	</form>

</body>
</html>