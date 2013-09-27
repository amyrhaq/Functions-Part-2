<!-- Write a function called aboutMe.
It takes two parameters $name and $age.
It should echo out "Hello! My name is $name, and I am $age years old.".
Call your function and check out the results panel to see if it works! -->
<html>
<p>
<?php	
function aboutMe($name, $age) {
        print "Hello! My name is $name, and I am $age years old.";
    }

    aboutMe("NoSpacesInTheNameWorksAtTheMoment", 99);
?>    
</p>
</html>
