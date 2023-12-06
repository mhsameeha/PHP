<html>
 <head>
 </head>
	<body>
		<h2>New User</h2>
		<form method="GET" action="process.php">
			Name: <input type="text" name="uname"/> <br/><br/>
			Password: <input type="password" name="password"/><br/><br/>
			Gender: Male<input type="radio" name="gender" value="M" />
					Female<input type="radio" name="gender" value="F" /><br/><br/>
		
			Interests
			<input type="checkbox" name="icricket"  value="T" />Cricket
			<input type="checkbox" name="inetball"  value="T" />Netball
			<input type="checkbox" name="ifootball"  value="T" />Football<br/><br/>
			
			Date of Birth: <input type="date" name="dob" /><br/><br/>
			
			<label>District</label>
			<select name="district[]" multiple>
				 <option name="districtC" value="cmb">Colombo</option>
				 <option name="districtzk" value="knd">Kandy</option>
				 <option name="districtM" value="mtr">Matara</option>
				 <option name="districtG" value="gmp">Gampaha</option>
			</select>
			<br/><br/>
			
			
			<input type="submit" name="submit" value="Submit" />
			<input type="reset" name="reset" value="Clear" />
		</form>	
	</body>
</html>