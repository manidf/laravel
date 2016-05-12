	<?php
		$firstString = "The quick brown fox";
		$secondString = "jumped over the lazy dog.";
	?>

	<?php
		$thirdString = $firstString;
		$thirdString .= $secondString;
		echo $thirdString;
	?>
