<div class="header">
	<div class="headerleft">
		<b>System de Gestion Hospitalière</b>  >>>>
		<?php print date("l, F j, Y h:m:s a", strtotime("+3 hours"));
			?>
	</div>
	<div class="headerright">
		<b>
			<?php
			require '../includes/connect.php';
			require '../includes/users.php';
			admindetails();
			 ?>
		</b>
	</div>
</div>
