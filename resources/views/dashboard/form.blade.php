<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Register</title>
</head>
<body>
    <form action="/welcome" method="post">
        @csrf
        <table>
            <tr>
                <td colspan="2">Form Register</td>
            </tr>
            <tr>
                <td>First Name :</td>
                <td>
                    <input type="text" name="firstname">
                </td>
            </tr>
            <tr>
                <td>Last Name :</td>
                <td>
                    <input type="text" name="lastname">
                </td>
            </tr>
            <tr>
                <td>Gender :</td>
                <td>
                    <input name="gender" type="radio" value="male"> Male<br>
                    <input name="gender" type="radio" value="female"> Female
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>