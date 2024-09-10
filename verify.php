<?php
include 'conn.php'; 
if(isset($_POST['verify'])){
    $code  = $_POST['vcode'];
    $sql = "SELECT * FROM `user` where u_v_code = '$code'";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)> 0){
        echo "<script>
    alert('Verified');
</script>";
    }
    else{
        echo "<script>
        alert('InVerification Code');
    </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="vcode">
        <button type="submit" name="verify">Verify</button>
    </form>
</body>
</html>