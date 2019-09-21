<html>
<body>

<?php
	
	//Receive input from clint side
    $username = $_POST['username'];
    $password = $_POST['password'];
	$identifyer=$username;
	$identifyer .=",";
	$identifyer .= $password;
	$identifyer .=",";

	
	//check if the input exist
    $exist = 0;
    $login = 0;

           //read the file line by line
          $file = fopen("database.txt","r");
           while(!feof($file))  {
                 // get a line without the last “newline” character
                $line = trim(fgets($file));

                list($usernameline, $passwordline) = explode(",",$line);
				//print $a
                //compare the content of the input and the line
                echo $password;
                echo $passwordline;


               if($username == $usernameline && $password == $passwordline){
			$exist = 1;
			break;
	     }			
              }
             fclose($file);	

	
	if($exist == 1){
		echo "user and password entered correctly";
	}else{
        //open a file named "database.txt"
        echo "Wrong password";

	}
?>

</body>
</html>
