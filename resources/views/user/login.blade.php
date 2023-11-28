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
    <form action="{{ route('login-proses') }}" method="post">
         @csrf
           <h1 class=" text-center text-2xl font-semibold">login</h1>
        <div class="w-96 p-6 shadow-lg bg-white rounded-md">
            <h1 class=" text-center text-2xl font-semibold"></h1>
            <br>
            <div>
                <label for="username" class="block text-base mb-2">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" class="w-full px-2 py-1 focus:outline-none focus:ring-2">
                @error('username')
                    <p  class=" text-red-700 italic">{{ $message }}</p>
                @enderror
            </div>


            <div>
                <label for="password" class="block text-base mb-2">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="w-full px-2 py-1 focus:outline-none focus:ring-2">

                @error('password')
                <p  class=" text-red-700 italic">{{ $message }}</p>
            @enderror
            </div>


            <button name="submit" type="submit" class=" bg-blue-700 w-full mt-5 rounded-xl p-1">Login</button>

            @if($message = Session::get('failed'))

            <p class=" text-red-700 italic">{{ $message }}</p>

            @endif
            </div>





</form>
</div>
</body>
</html>
