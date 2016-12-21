<?php


include_once 'dbaseconnect.php';
if(!$user->is_loggedin())
{
 $user->redirect('LoginPage.php');
}
$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="style.css" type="text/css"  />
<title>welcome - <?php print($userRow['email']); ?></title>
</head>

<body>

<div class="header">
 <div class="right">
     
    </div>
    <div class="left">
     <label><a href="logoutpage.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
    </div>
</div>
<div class="content">
welcome : <?php print($userRow['username']); ?>
</div>
</body>
</html>