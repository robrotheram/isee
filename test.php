<HTML>
<BODY>
<hr/>
<h1>Login</h1>
<form method="post" action="api.php">
    <input type="text" name="USERNAME" value="Username">
    <input type="text" name="PASSWORD" value="Password">
    <input type="hidden" name="request_type" value="LOGIN">
    <input type="submit" value="send">
</form>
<hr/>
<h1>Register</h1>
<form method="post" action="api.php">
    <input type="text" name="USERNAME" value="Username">
    <input type="text" name="PASSWORD" value="Password">
    <input type="text" name="EMAIL" value="EMAIL">
    <input type="hidden" name="request_type" value="REGISTER">
    <input type="submit" value="send">
</form>
<hr/>


</BODY>
</HTML>