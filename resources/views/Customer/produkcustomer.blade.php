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
<div class="flex justify-center">
<table border="1" cellpadding="15" cellspacing="0">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama produk</th>
        <th>Merk produk</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($produk as $produks)
        <tr>
            <td>{{$nomor++}}</td>
            <td>{{$produks->nama_produk}}</td>
            <td>{{$produks->merk_produk}}</td>
            <td>{{$produks->harga}}</td>

        </tr>

        @empty

        @endforelse
    </tbody>
  </table>
</div>
</body>
</html>
