<?php
	include_once 'dbaseconnect.php';

	session_destroy();
    unset($_SESSION['user_session']);

    $user->redirect('LoginPage.php');
?>