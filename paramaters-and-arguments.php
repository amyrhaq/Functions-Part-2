<!-- Write a function called greetings. It should take $name as a parameter.
The function should echo a string equal to "Greetings, " . $name . "!". -->
<html>
	<head>
		<title>Parameters and Arguments</title>
	</head>
	<body>
      <p>
        <?php
        function greetings($name){
            echo "Greetings, " . "" .$name ."!";
        }
        greetings("Amyr");
        ?>
      </p>
    </body>
</html>