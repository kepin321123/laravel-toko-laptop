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

    <h1 class="text-2xl flex justify-center mt-20">Edit Produk</h1>
    <div class="flex justify-center mt-4">
        <form action="{{ route('update-produk', $produk->id_produk)}}" method="post">
            @csrf
            @method('PUT')
    <div class="">
        <label for="text" class=" font-semibold">Nama produk</label>
        <input type="text" name="nama_produk"   placeholder="Nama produk" class=" outline-none focus:ring-2" value="{{old('nama_produk', $produk->nama_produk)}}">
        <br><br>
        <label for="text"  class="font-semibold">Merk produk</label>
        <input type="text" name="merk_produk"  placeholder="Merk produk" class="outline-none focus:ring-2" value="{{old('merk_produk', $produk->merk_produk)}}">
        <br><br>
        <label for="text"  class=" font-semibold">Harga</label>
        <input type="text" name="harga"  placeholder="Harga" class=" outline-none focus:ring-2" value="{{old('harga', $produk->harga)}}">
        <br> <br>
        <button type="submit" class=" bg-green-600 p-2 rounded-xl">edit</button>

    </div>
</form>
</div>

</body>
</html>
