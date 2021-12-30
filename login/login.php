<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Trang đăng nhập</title>
    </head>
    <body>
        <h1>Trang đăng nhập</h1>
        <form action="process_login.php" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                        Email :
                    </td>
                    <td>
                        <input type="text" name="txtEmail" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type="password" name="txtPassword" size="50" />
                    </td>
                </tr>
            </table>
            <input type="submit" value="Đăng nhập" />
            <input type="reset" value="Nhập lại" />
        </form>
    </body>
</html>