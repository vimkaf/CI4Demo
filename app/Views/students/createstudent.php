<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form action="/students/create" method="post">

	<table>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="student_name">
			</td>
		</tr>

		<tr>
			<td>Admission Number</td>
			<td><input type="text" name="admission_number"></td>
		</tr>

		<tr>
			<td>Gender</td>
			<td>
				<select name="gender">
					<option>Male</option>
					<option>Female</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Department</td>
			<td><input type="text" name="department"></td>
		</tr>
		<tr>
			<td>Faculty</td>
			<td><input type="text" name="faculty"></td>
		</tr>
		<tr>
			<td>Age</td>
			<td><input type="number" name="age"></td>
		</tr>

		<tr>
			<td style="text-align: center;" colspan="2"><button type="submit">Submit</button></td>
		</tr>
	</table>

	</form>

</body>
</html>