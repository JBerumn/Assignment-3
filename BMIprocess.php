<!DOCTYPE html>
<html>
	<head>
		<title>Title</title>
	</head>

	<body>
		<?php

        $Height=$_POST['height'];
        $Weight=$_POST['weight'];
		$Name=$_POST['name'];
		$Age=$_POST['age'];
		$Sex=$_POST['sex'];
		
       $HeightInches=$Height*12;
                $BMIIndex = round($Weight/($HeightInches*$HeightInches)* 703,2);
                if ($BMIIndex < 18.5) {
                        echo("<p>You are a ".$Sex.". You are ".$Age." years old. You are currently ".$Height."'".$HeightInches.
						"and ".$Weight." pounds. Your BMI is ".$BMIIndex." which means you are underweight</p>");
                } else if ($BMIIndex <= 24.9) {
                        echo("<p>You are a ".$Sex.". You are ".$Age." years old. You are currently ".$Height."'".$HeightInches.
						"and ".$Weight." pounds. Your BMI is ".$BMIIndex." which means you are normal weight</p>");
                } else if ($BMIIndex <= 29.9) {
					echo("<p>You are a ".$Sex.". You are ".$Age." years old. You are currently ".$Height."'".$HeightInches.
						"and ".$Weight." pounds. Your BMI is ".$BMIIndex." which means you are overweight</p>");
                } else {
                        echo("<p>You are a ".$Sex.". You are ".$Age." years old. You are currently ".$Height."'".$HeightInches.
						"and ".$Weight." pounds. Your BMI is ".$BMIIndex." which means you are obese</p>");

                }
        
?>
	</body>
</html>

			
			
			