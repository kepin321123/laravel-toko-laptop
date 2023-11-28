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

    <h1 class=" ml-56 text-3xl mt-5 font-semibold">Selamat Datang</h1>
    <div class="sidebar bg-slate-600 fixed top-0 left-0 h-[100%] p-5 w-[185px]">
            <ul class=" space-y-2 font-medium">
                <li class="">
                    <a href="{{ route('user') }}">
                        <span class="text-2xl">User</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('produk') }}">
                        <span class="text-2xl">Produk</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('transaksi') }}">
                        <span class="text-2xl">Transaksi</span>
                    </a>
                </li>
            </ul>
        </div>
</body>
</html>
