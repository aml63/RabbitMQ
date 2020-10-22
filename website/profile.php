<?php
    function filter($date)
    {
        return trim(htmlspecialchars($date));
    }

    $user = filter($_POST['user'])
    $password = filter($_POST['password'])
    $recipe = filter($_POST['recipe'])
    $bio = filter($_POST['bio'])

    if (isUserLogIn)
    {
	    //SQL update query
	    UPDATE login
		    SET user = $user, password =  $password, recipe = $recipe,
		    bio = $bio;
    }

?>

