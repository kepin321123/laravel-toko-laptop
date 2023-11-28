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

<h1 class="flex justify-center font-semibold text-2xl mt-10">Data Transaksi</h1>
<a href=" {{ route('transaksi-create') }}"  class="flex justify-center text-gray-500 mt-3 font-bold">Tambah Transaksi</a>
<div class="flex justify-center">
<table border="1" cellpadding="15" cellspacing="0">
    <thead>
      <tr>
        <th>Jumlah produk</th>
        <th>Tanggal Transaksi</th>
        <th>Id Produk</th>
        <th>Id User</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($transaksi as $data)
        <tr>
            <td>{{$data->jumlah_produk}}</td>
            <td>{{$data->tgl_transaksi}}</td>
            <td>{{$data->id_produk}}</td>
            <td>{{$data->id_user}}</td>
            <td class=" font-semibold">

                <a href="{{ route('edit-transaksi', $data->jumlah_produk) }}" class=" bg-green-500 rounded-xl py-1 px-2 text-white">Edit</a>

                <form  class=" inline-block" action="{{ route('destroytransaksi', $data->jumlah_produk) }}" method="post">
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
