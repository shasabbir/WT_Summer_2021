<html>
<head>
<script src="js/validation.js"></script>
</head>
<body>

<form action="" onsubmit="return validateForm()" method="post">
  First Name: <input type="text" id="fname" onkeyup="fnameval()" name="fname"><br><br><p id="errorfname"></p>
  Last Name: <input type="text" id="lname" onkeyup="lnameval()" name="lname"><br><br><p id="errorlname"></p>
  Email: <input type="text" id="email" name="email"><br><br><p id="errormail"></p>
  <input type="submit" value="Submit">
  <button id="btn" onclick="myfunc()" >Click </button>
</form>



</body>
</html>
