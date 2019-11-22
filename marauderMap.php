<?php
	    if (isset($_POST['mdp']) AND $_POST['mdp'] == "Jejuresolennellementquemesintentionssontmauvaises") // if the password is good
	    {
	       	header('Location: index.html');// we are redirected to index.html
		}else{
	        header ('Location: false.html');// else, we are redirected to false.php
	    }
    ?>