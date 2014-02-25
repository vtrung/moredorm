<div id='troublefooter'>
<?php
print_r($_COOKIE);
print_r($_SESSION); 
?>

<div>
mysqli_connect_errno : <?php echo mysqli_connect_errno($con);?>
</div>

<div>
<h3> Troubleshooting variables </h3>
Login Fail: <?php echo $loginfail; ?>\n
Rows: <?php echo $result; ?>
</div>

</div>