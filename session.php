<?php
if(isset($_SESSION['role'])){
	if ($_SESSION['role'] == 'A')$role = 'admin';
	elseif ($_SESSION['role'] == 'U')$role = 'utilisateur';
	else $role = 'invite';
}
else $role = 'invite';
?>
