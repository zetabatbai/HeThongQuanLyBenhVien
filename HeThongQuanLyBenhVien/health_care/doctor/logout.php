<?php
session_start();
include('include/connect.php');
$_SESSION['dlogin']=="";
date_default_timezone_set('Asia/VietNam');
$ldate=date( 'd-m-Y h:i:s A', time () );
$did=$_SESSION['id'];
mysqli_query($con,"UPDATE doctorslog  SET logout = '$ldate' WHERE uid = '$did' ORDER BY id DESC LIMIT 1");
session_unset();
//session_destroy();
$_SESSION['errmsg']="Bạn đã đăng xuất thành công";
?>
<script language="javascript">
document.location="../../index.php";
</script>
