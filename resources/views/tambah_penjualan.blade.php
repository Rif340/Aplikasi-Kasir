<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/tambah_penjualan.css')}}">
    <title>Tambah Penjualan</title>
</head>

<body>
    @include('layouts.sidebar')
    <div class="container">
    <a href="{{ url('penjualan') }}" type="button" class="btn btn-success kembali">Kembali</a>
    </div>
        <h1 class="text-center">Tambah Penjualan</h1>
        <div class="row" id="bungkus_pertama">
            <form class="col" id="input_produk" action="tambah_penjualan" method="post">
                @method('post')
                @csrf
                <input type="hidden" name="penjualan_id" value="{{ $penjualan_id}}">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Data Produk</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="produk">
                        @foreach($produk as $produk)
                        <option value="{{ $produk->produk_id }}">{{ $produk->nama_produk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Produk</label>
                    <input value="jumlah_produk" min="1" type="number" name="jumlah_produk" class="form-control" id="exampleFormControlInput1" >
                </div>
                <div class="form-group col">
                    <label for="exampleFormControlSelect1">Nama Pelanggan</label>
                    <select class="form-control" name="pelanggan" id="exampleFormControlSelect1">
                        @foreach($pelanggan as $pelanggan)
                        <option value="{{ $pelanggan->pelanggan_id }}">{{$pelanggan->nama_pelanggan}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success">Tambah</button>
            </form>
            <table class="table col">
                <thead>
                    <tr>
                    <th scope="col" class="table-warning">No Produk</th>
                        <th scope="col" class="table-warning">Nama Produk</th>
                        <th scope="col" class="table-warning">Harga</th>
                        <th scope="col" class="table-warning">Quantity</th>
                        <th scope="col" class="table-warning">Subtotal</th>
                        <th scope="col" class="table-warning">Detail</th>
                    </tr>
                </thead>
                <?php $no =1;
                        $total_harga=0?>
                <tbody>
                    @foreach($penjualan as $penjualan)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$penjualan->nama_produk}}</td>
                        <td>{{$penjualan->harga}}</td>
                        <td>{{$penjualan->jumlah_produk}}</td>
                        <td>{{$penjualan->subtotal}}</td>
                        <?php $total_harga =$total_harga + $penjualan->subtotal ?>
                        <td class="table-secondary">
                            <a href="cancel" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <div class="container" id="bungkus_kedua">                 
        <h1>total harga : {{ number_format($total_harga,0,',',',') }} </h1>
                <form class="container" action="/checkout" method="post">
                    @method('post')
                    @csrf
                    <input type="hidden" name="total_harga" value="{{ $total_harga }}">
                    <input type="hidden" name="penjualan_id" value="{{ $penjualan_id }}">
                    <button type="submit" class="btn btn-primary">checkout</button>
                </form>
        </div>
    </div>
</body>
</html>