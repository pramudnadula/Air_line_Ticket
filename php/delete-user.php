<?php
	
	include_once 'config.php';

?>
<?php 
	

	if (isset($_GET['card_no'])) {
		// getting the user information
		$card_no = mysqli_real_escape_string($conn, $_GET['card_no']);

			// deleting the user
			$query = "DELETE FROM payments WHERE CardNo = {$card_no} ";

			$result = mysqli_query($conn, $query);

			if ($result) {
				// user deleted
				header('Location: list.php?msg=user_deleted');
				
			} else {
				header('Location: list.php?err=delete_failed');
				
			}
		
		
	} else {
		header('Location: list.php');
	}
?>