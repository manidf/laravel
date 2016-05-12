	<?php
		echo "string: Hello World <br/>";
		echo 'string: Hello World <br/>';
		$my_variable = "var: Hello World <br/>";
		echo $my_variable;
		echo "<br/>";
		echo $my_variable ." Again";
	?>

	<br/>

	<?php
		echo "$my_variable Again.<br/>";
		echo "<br/>";
		/*
		 * use double quotes te ensure in place variable substitution
		 */
		echo "{$my_variable}Again. <br/>";
		echo '{$my_variable}Again. <br/>';

	?>

