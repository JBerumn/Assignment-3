<!DOCTYPE html>
<html>
	<head>
		<title>Title</title>
	</head>

	<body>
		<?php

        $Num1=$_POST['num1'];
        $Num2=$_POST['num2'];
		$Opp=$_POST['opp'];
		
       
                if ($Opp=='+') 
				{
					$Answer = $Num1+$Num2;
                        echo("<p>Your answer is </p>".$Answer);
                } 
				if ($Opp=='-') 
				{
					$Answer = $Num1-$Num2;
                        echo("<p>Your answer is </p>".$Answer);
                } if ($Opp=='*') 
				{
					$Answer = $Num1*$Num2;
                        echo("<p>Your answer is </p>".$Answer);
                } if ($Opp=='/') 
				{
					$Answer = $Num1/$Num2;
                        echo("<p>Your answer is </p>".$Answer);
                } 
      
      
      

      
?>
	</body>
</html>

			
			
			