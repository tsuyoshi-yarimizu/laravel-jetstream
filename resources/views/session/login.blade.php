<html>
<head>
    <title>Login</title>
</head>
<body>
<div>
    <form method="post" action="/session/login">
        @csrf
        <div>
            <label>email</label>
            <input type="email" name="email" />
        </div>
        <div>
            <label>password</label>
            <input type="password" name="password" />
        </div>
        <div>
            <input type="submit" value="Login" />
        </div>
    </form>
</div>
</body>
</html>
