<html>
<body>

<?php
	
	//Receive input from clint side
	$input = $_POST['username'];
	$password = $_POST['password'];
	$identifyer=$input;
	$identifyer .=",";
	$identifyer .= $password;
	$identifyer .=",";
	echo $password;
	
	//check if the input exist
	$exist = 0;
           //read the file line by line
          $file = fopen("database.txt","r");
           while(!feof($file))  {
                 // get a line without the last “newline” character
				$line = trim(fgets($file));
				list($usernameline, $passwordline) = explode(",",$line);
				//print $a
	

				//compare the content of the input and the line
               if($usernameline == $input ){
				echo "The user already exists!";
			$exist = 1;
			break;
	     }			
              }
             fclose($file);	

	
	if($exist == 1){
		echo "The input  exists! <br/><br/>Please enter another one via <a href='register.html'>register.html</a>";
	}else{
		//open a file named "database.txt"
		$file = fopen("database.txt","a");
		//insert this input (plus a newline) into the database.txt
		fwrite($file,$identifyer."\n");
		//close the "$file"
		fclose($file);
		echo "The input is added to the database.txt. <br/><br/>Please try to enter the same input again via <a href='register.html'>register.html</a>";
	}
?>

</body>
</html>
