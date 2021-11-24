<html>
    <head><title>Login</title>
    <style type="text/css">
    table {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 11px;
    }
    input {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 11px;
        height: 20px;
    }
    </style>
    </head>
    <body bgcolor="#cccccc"><br />
        <div align="center">
            <form name="form-login" method="POST" action="/hello/isi.php">
                <table width="310" border="0" cellpadding="0" cellspacing="0">
                    <tr bgcolor="blue">
                        <td height="25" colspan="2" align="center"><font color="#FFFFFF">Form Login</font>
                        </td>
                    </tr>
                    <tr>
                        <td width="106" height="16"> </td>
                        <td width="180"> </td>
                    </tr>
                    <tr>
                        <td height="18" align="right">Username : </td>
                        <td><input type="text" name="user" size="20" maxlength="9"></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td height="18" align="right" >Password : </td>
                        <td><input type="password" name="password" size="20"></td>
                    </tr>
                    <tr>
                        <td height="16"> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td height="18" align="top"> </td>
                        <td align="left"><input type="submit" value=" Login "></td>
                    </tr>
                    <tr>
                        <td height="16"> </td>
                        <td> </td>
                    </tr>
                    <tr bgcolor="blue">
                        <td height="25" colspan="2" align="top"> </td>
                    </tr>
                    <div class="m-t-20 m-b-40 p-b-40">
            Not a member yet? Click <a href="<?= site_url('Auth/register')?>">here</a> to register.
        </div>
            </table>
            </form>
        </div>
    </body>
</html>
<?php
    $username = [
        'name' => 'username',
        'id' => 'username',
        'value' => 'null',
        'class' => 'form-control'
    ];

    $password = [
        'name' => 'password',
        'id' => 'password',
        'class' => 'form-control',
    ];
   
?>
       
