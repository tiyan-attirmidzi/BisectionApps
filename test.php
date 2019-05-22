<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bisection</title>
</head>
<body>

    <center>Metode Bisection</center>

    <form action="proses.php" method="post" name="form1">
        <table width="241" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#CC0000">
            <tr bgcolor="#FF8C8C">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr bgcolor="#FFC6C6">
                <td width="129">Nilai A </td>
                <td width="112"><input name="a" type="text" id="a" size="5"></td>
            </tr>
            <tr bgcolor="#FFC6C6">
                <td>Nilai B </td>
                <td><input name="b" type="text" id="b" size="5"></td>
            </tr>
            <tr bgcolor="#FFC6C6">
                <td>Nilai Toleransi</td>
                <td><input name="tol" type="text" id="tol" size="5"></td>
            </tr>
            <tr bgcolor="#FF8C8C">
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>