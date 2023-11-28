<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

    <h1 class="text-2xl flex justify-center mt-20">Edit User</h1>
    <div class="flex justify-center mt-4">
        <form action="{{ route('user-update', $user->id_user)}}" method="post">
            @csrf
            @method('PUT')
    <div class="">
        <label for="text" class=" font-semibold">Username</label>
        <input type="text" name="username"   placeholder="Username" class=" outline-none focus:ring-2" value="{{old('username', $user->username)}}">
        <br><br>
        <label for="text"  class="font-semibold">Password</label>
        <input type="password" name="password"  placeholder="Password" class="outline-none focus:ring-2" value="{{old('password', $user->password)}}">
        <br><br>
        <label for="text"  class=" font-semibold">Role</label>

        <select name="role" id="role">
            <option value="Admin">Admin</option>
            <option value="Customer">Customer</option>
        </select>
        <button type="submit" class=" bg-green-600 p-2 rounded-xl">edit</button>

    </div>
</form>
</div>

</body>
</html>
