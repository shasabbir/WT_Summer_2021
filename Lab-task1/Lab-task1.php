<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
<h2>Registration Form</h2>
<form>
	<table style="width:40%">
  <tr>
    <th> </td>
    <th> </td>
  </tr>
  <tr>
    <td>Full Name: </td>
    <td><input type="text" name="name"><br></td>
  </tr>
  <tr>
    <td>Email: </td>
    <td><input type="email" name="email"><br></td>
  </tr>
  <tr>
    <td>Password: </td>
    <td><input type="hidden" name="pass"><br></td>
  </tr>
  <tr>
    <td>Comment: </td>
    <td><textarea name="comment" rows="4" cols="50"></textarea><br></td>
  </tr>
  <tr>
    <td>Choose gender</td>
    <td>male<input type="radio" name="gender">
	female<input type="radio" name="gender">
	other<input type="radio" name="gender"><br>
  </tr>
  <tr>
    <td>Please select hobby</td>
    <td>singing<input type="checkbox" name="hobby">
	dancing<input type="checkbox" name="hobby">
	reading<input type="checkbox" name="hobby"></td>
  </tr>
  <tr>
    <td>Please choose a file</td>
    <td><input type="file"></td>
  </tr>
</table>

	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>