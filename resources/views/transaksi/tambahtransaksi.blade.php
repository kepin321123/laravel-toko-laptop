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

    <h1 class="text-2xl flex justify-center mt-20">Tambah Transaksi</h1>
    <div class="flex justify-center mt-4">
        <form action="{{ route('transaksi-store') }}" method="post">
            @csrf
        <div class="">
        <label for="text" class=" font-semibold">Jumlah produk</label>
        <input type="text" name="jumlah_produk"  id="jumlah_produk" placeholder="Jumlah produk" class=" outline-none focus:ring-2">
        <br><br>
        <label for="text"  class=" font-semibold">Tanggal Transaksi</label>
        <input type="date" name="tgl_transaksi" id="tgl_transaksi" placeholder="Tanggal Transaksi" class=" outline-none focus:ring-2">
        <br><br>
        <label for="text"  class=" font-semibold">Id Produk</label>
        <input type="text" name="id_produk" id="id_produk" placeholder="id_produk" class=" outline-none focus:ring-2">
        <br> <br>
        <label for="text"  class=" font-semibold">Id User</label>
        <input type="text" name="id_user" id="id_user" placeholder="Id User" class=" outline-none focus:ring-2">
        <br> <br>
        <button type="submit" class=" bg-green-600 p-2 rounded-xl">Tambah</button>

    </div>
</form>
</div>

</body>
</html>
