<?php
 // Create connection
  include ('../register/connection.php');
 global $conn;
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['txtEmail'])){
        die('');
    }  
          
    
    header('Content-Type: text/html; charset=UTF-8');
    $password   = addslashes($_POST['txtPassword']);
    $email      = addslashes($_POST['txtEmail']);
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$password || !$email)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
        $password = md5($password);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user_account WHERE email='$email' AND password='$password'")) > 0){
        echo "Quá trình đăng nhập thành công. <a href='/'>Về trang chủ</a>";
        exit;
    } else {
        echo "Có lỗi xảy ra trong quá trình đăng nhập. <a href='login.php'>Thử lại</a>";
        exit;
    }
?>