<!DOCTYPE html>
<head>
</head>
<body>
    <h1>Registration form</h1>
    <form action="../controller/registration_controller.php" method="POST">
        <table>
            <tr>
                <td>
                    <input type="text" name="name" required placeholder="Enter Your Name"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="username" required placeholder="Enter Your Username"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="date" name="dob" placeholder="Enter Date of Birth" required> <br>
                </td>
            </tr>
            <tr>
        
                <td>
                    <input type="password" name="password" placeholder="Enter Password" required placeholder="Enter Password please" minlength="6" maxlength="6"><br>
            </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="phone" required maxlength="14" placeholder="Enter your phone number"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Register">
                </td>
            </tr>
        </table>
    </form>
   
</body>
</html>