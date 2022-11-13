<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
  <table>
    <form action="../controller/login_controller.php" method="POST">
    <tr>
        <td>
            <input type="text" name="username" placeholder="Username">
        </td>
    </tr>
    <tr>
        <td>
            <input type="password" name="password" placeholder="Password">
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="submit" value="Login"></input>
        </td>
    </tr>
    </form>
  </table>
</body>
</html>