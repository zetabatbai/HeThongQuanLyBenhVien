<?php
session_start();
include('include/connect.php');
$_SESSION['login']=="";
date_default_timezone_set('Asia/VietNam');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($con,"UPDATE userlog  SET logout = '$ldate' WHERE uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1");
session_unset();
//session_destroy();
$_SESSION['errmsg']="Bạn đã đăng xuất thành công";
?>
<script language="javascript">
document.location="../index.php";
</script>
