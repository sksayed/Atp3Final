<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body align="center">
    <table align="center">
   
       <form method="post" action="/login">
       @csrf
       <tr>
       <th></th>
       <th></th>
       </tr>
       <tr>
       <td> <h3>UserName</h3> </td>
       <td> <input type="text" name="username" > </td>
       </tr>
       <tr>
       <td><h3>password</h3></td>
       <td><input type="password" name="password" > </td>
       </tr>
       <tr>
           <td></td>
           <td><input type="submit" name="submit" ></td>
       </tr>
      </form>
    </table>
</body>
</html>