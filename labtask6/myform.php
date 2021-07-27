<?php //include "control/results.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration Form</title>

<script src="js/validation.js"></script>
	</head>
	<body>
		<h1>Registration Form</h1>
		
		<hr>
		
		<form action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
			<table>
				<tr>
				<td>Name :</td>
				<td><input type="text" id="name" onkeyup="nameval()" name="name"><br><br><p id="errorname"></p></td>
				</tr>
				
				<tr>
				<td>Email :</td>
				<td><input type="email" id="email" onkeyup="emailval()" name="email"> <p id="errormail"></p></td>
				</tr>
				
				<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" onkeyup="passval()" name="pass"> <p id="errorpass"></p></td>
				</tr>
				
				<tr>
				<td>Comment :</td>
				<td><textarea rows="4" cols="40" id="comment" onkeyup="commentval()" name="comment"></textarea> <p id="errorcomment"></p></td></td>
				</tr>
				
				<tr>
					<td>Gender :</td>
					<td>
						<input type="radio" id="male" name="gender"  value="Male"> Male
						<input type="radio" id="female" name="gender" value="Female"> Female
						<input type="radio" id="other" name="gender" value="Other"> Other
						<p id="gender"></p>
					</td>
				</tr>
                <tr>
                    <td>
                        <?php //echo $infog;?>
                    </td>
					<td>
                        <?php //echo $validateradio; ?>
					</td>
				</tr>
			   
				<tr>
					<td>Please Choose a hobby :</td>
					<td>
						<input type="checkbox" name= "hobby1" id="sing" value="Singing"> Singing
						<input type="checkbox" name= "hobby2" id="dance" value="Dancing"> Dancing
						<input type="checkbox" name= "hobby3" id="read" value="Reading"> Reading
						<p id="hobby"></p>
					</td>
				</tr>
                <tr>
                    <td>
                        <?php //echo $infoh;?>
                    </td>
                    <td>
                        <?php //echo $validatecheckbox; ?>
                        <?php //echo $h1;?>
                        <?php //echo $h2;?>
                        <?php //echo $h3;?>
    
                    </td>
				</tr>
				<tr>
					<td>Please Choose a file :</td>
					<td>
						<input type="file" name="filetoupload">
					</td>
				</tr>
                
				
				<tr>
					<td><input type="submit" value="Submit">&nbsp;&nbsp;<input type="reset" value="Reset"></td>
				</tr>
			</table>
		</form>
		
	</body>
</html>