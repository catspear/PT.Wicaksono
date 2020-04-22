<?php
include 'config.php';
$username = $_POST['username'];
$password = $_POST['pass'];
$cek      = mysqli_query($conn, "select * from users where username='$username' and password='$password'");
$result   = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
 
if($result>0){
    if ($data['level_user'] == 'admin') {
        echo "<script>alert('Selamat Datang, Admin.');document.location.href='on-admin/index.php'</script>";
 
    }elseif($data['level_user'] == 'member'){
        echo "<script>alert('Selamat Datang, Member.');document.location.href='on-member/index.html'</script>";
    }
}else{
    header("location:login.html");
}
?>