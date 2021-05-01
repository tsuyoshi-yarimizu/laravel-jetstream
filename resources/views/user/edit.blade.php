<html>
<head>
    <title>Laravel Sanctum Tutorial | User edit</title>
</head>
<style>

</style>
<body>
<div id="root">
    <div class="container">
        <h1>User Create</h1>
        <form method="post" action="/user/{{ $user->id }}">
            @method("PUT")
            @csrf
            <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ $user->name }}" />
            </div>
            <div>
            <label>EMail</label>
            <input type="email" name="email" value="{{ $user->email }}"/>
            </div>
            <div>
            <label>New Password</label>
            <input type="password" name="new_password" />
            </div>

            <input type="submit" value="更新" />
        </form>
    </div>
</div>
</body>
</html>
