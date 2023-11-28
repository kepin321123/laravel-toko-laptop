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
    <div class="flex justify-center items-center h-screen">
    <form action="{{ route('register-proses') }}" method="POST">
    @csrf

        <div class="w-96 p-6 shadow-lg bg-white rounded-md">
            <h1 class=" text-center text-2xl font-semibold">Register</h1>
            <br>
            <div>
                <label for="username" class="block text-base mb-2">Username</label>
                <input type="text" name="username" placeholder="Username" class="w-full px-2 py-1 focus:outline-none focus:ring-2">
            </div>
            <div>
                <label for="password" class="block text-base mb-2">Password</label>
                <input type="password" name="password" placeholder="Password" class="w-full px-2 py-1 focus:outline-none focus:ring-2">
            </div>
            <div>
                <select name="role">
                    <option value="">Pilih</option>
                    <option value="Admin">Admin</option>
                    <option value="Customer">Customer</option>
                </select>
            </div>

            <button name="submit" type="submit" class=" bg-blue-700 w-full mt-5 rounded-xl p-1">Register</button>
        </div>


</form>
</div>
</body>
</html>
