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

<h1 class="flex justify-center font-semibold text-2xl mt-10">Data Produk</h1>
<a href=" {{ route('create-produk') }}"  class="flex justify-center text-gray-500 mt-3 font-bold">Tambah produk</a>
<div class="flex justify-center">
<table border="1" cellpadding="15" cellspacing="0">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama produk</th>
        <th>Merk produk</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($produk as $produks)
        <tr>
            <td>{{$nomor++}}</td>
            <td>{{$produks->nama_produk}}</td>
            <td>{{$produks->merk_produk}}</td>
            <td>{{$produks->harga}}</td>
            <td class=" font-semibold">

                <a href="{{ route('edit-produk', $produks->id_produk)}}" class=" bg-green-500 rounded-xl py-1 px-2 text-white">Edit</a>

                <form  class=" inline-block" action="{{ route('destroyproduk', $produks->id_produk) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div><button type="submit" class= " text-white bg-red-600  py-1 px-2 rounded-xl mt-2">Hapus</button></div>
            </form>
            </td>
        </tr>

        @empty

        @endforelse
    </tbody>
  </table>
</div>
</body>
</html>
