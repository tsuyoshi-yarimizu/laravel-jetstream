<html>
<head>
    <title>Laravel Sanctum Tutorial | Users list</title>
</head>
<style>
    table, th, td {
        border: #1a202c 1px solid;
    }
</style>
<body>
<div id="root">
    <div class="container">
        <h1>Users List</h1>
        <div>
            <a href="/user/create">新規作成</a>
        </div>
        <div>
            <table>
                <thead>
                <tr>
                    <th>user id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>created_at / updated_at</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td><a href="/user/{{ $user->id }}/edit">{{ $user->id }}</a></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }} / {{ $user->updated_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
