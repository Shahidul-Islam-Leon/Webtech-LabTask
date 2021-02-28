<html>
	<head></head>
	<body>
  		<?php
		  $uname="";
		  $err_uname="";
		  $password="";
		  $err_password="";
		  $bio="";
		  $err_bio="";
		  $err_profession="";
		  $profession="";
		  $err_gender="";
		  $err_hobbies="";

		  if($_SERVER['REQUEST_METHOD']=='POST'){
			
			
			if(empty($_POST["uname"])){
				$err_uname="*Username required";
			}
		  
			else if(strlen ($_POST["uname"])<=6){
				$err_uname="*Username should be at least 6 characters";
			}
			else{
				$uname=$_POST["uname"];
			}

			if(empty($_POST["pass"])){
				$err_password="*Password required";
			}
			else if(strlen($_POST["pass"]<=8)){
				$err_password="*Password must be at least 8 characters";
			}
			else{
				$password=$_POST["pass"];
			}

			if(empty($_POST["bio"])){
				$err_bio="*inser bios";
			}
			else{
				$bio=$_POST["bio"];
			}

			if(empty($_POST["profession"])){
				$err_profession="*Select your profession";
			}
			else{
				$profession=$_POST["profession"];
			}

			if(empty($_POST["gender"])){
				$err_gender="*Please select gender";
			}
			
			if(empty($_POST["hobbies"])){
				$err_hobbies="*Select hobby or hobbies";
			}

		}
		 ?>
	
		<form action="submited.php" method="post">
			<table>
				<tr>
					<td rowspan="2"><span>User access </span></td>
					<td>:<input type="text" placeholder="Username" name="uname" value= <?php echo $uname;?> > 
					<span> <?php echo $err_uname; ?> </span> 
					</td>
				</tr>
				<tr>
					
					<td>:<input type="password" placeholder="Password" name="pass" value= <?php echo $password; ?>>
					<span> <?php echo $err_password; ?> </span>
					</td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
					<span> <?php echo $err_gender;?> </span>
					</td>
				</tr>
				<tr>
					<td><span>Hobbies</span></td>
					<td>:<input type="checkbox" value="Movies" name="hobbies[]">Movies 
					     <input type="checkbox" value="Music" name="hobbies[]">Music 
						 <input type="checkbox" value="Games" name="hobbies[]">Games
						 <span> <?php echo $err_hobbies?> </span>
						 </td>
				</tr>
				<tr>
					<td><span>Profession </span></td>
					<td>:
						<select name="profession" value= <?php echo $profession; ?> >
							<option disabled selected>Choose</option>
							<option>Teaching</option>
							<option>Business</option>
							<option>Service</option>
						</select> 

					<span> <?php echo $err_profession; ?> </span>	
					</td>
				</tr>
				<tr>
					<td><span>Bio </span></td>
					<td>:<textarea name="bio"></textarea>
					<span> <?php echo $err_bio; ?> </span>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit"></td>
				</tr>
				
			</table>
			 
			
		</form>
	</body>
</html>