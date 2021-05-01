<html>
<head>
    <title>Laravel Sanctum Tutorial | User create</title>
</head>
<style>

</style>
<body>
<div id="root">
    <div class="container">
        <h1>User Create</h1>
        <form method="post" action="/user">
            @csrf
            <div>
            <label>Name</label>
            <input type="text" name="name" />
            </div>
            <div>
            <label>EMail</label>
            <input type="email" name="email" />
            </div>
            <div>
            <label>Password</label>
            <input type="password" name="password" />
            </div>

            <input type="submit" value="作成" />
        </form>
    </div>
</div>
</body>
</html>
