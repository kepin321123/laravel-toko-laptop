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

    <h1 class="text-2xl flex justify-center mt-20">Edit Transaksi</h1>
    <div class="flex justify-center mt-4">
        <form action="{{ route('update-transaksi', $transaksi->jumlah_produk)}}" method="post">
            @csrf
            @method('PUT')
        <div class="">
        <label for="text" class=" font-semibold">Jumlah produk</label>
        <input type="text" name="jumlah_produk"   placeholder="Jumlah produk" class=" outline-none focus:ring-2" value="{{old('jumlah_produk', $transaksi->jumlah_produk)}}">
        <br><br>
        <label for="text"  class=" font-semibold">Tanggal Transaksi</label>
        <input type="date" name="tgl_transaksi"  placeholder="Tanggal Transaksi" class="outline-none focus:ring-2" value="{{ old('tgl_transaksi', date('Y-m-d')) }}">
        <br><br>
        <label for="text"  class=" font-semibold">Id produk</label>
        <input type="text" name="id_produk"  placeholder="id_produk" class=" outline-none focus:ring-2" value="{{old('id_produk',  $transaksi->id_produk)}}">
        <br> <br>
        <label for="text"  class=" font-semibold">Id User</label>
        <input type="text" name="id_user"  placeholder="id_user" class=" outline-none focus:ring-2" value="{{old('id_user',  $transaksi->id_user)}}">
        <br> <br>
        <button type="submit" class=" bg-green-600 p-2 rounded-xl">edit</button>

    </div>
</form>
</div>

</body>
</html>
