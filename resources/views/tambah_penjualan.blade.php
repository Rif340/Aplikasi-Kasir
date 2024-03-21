<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/tambah_penjualan.css')}}">
    <title>kasir.com</title>
</head>

<body>
    @include('layouts.sidebar')
    <div class="container">
        <a href="{{ url('penjualan') }}" type="button" class="btn btn-warning kembali">Kembali</a>
        @if (session()->has('info'))
        <div class="alert alert-danger" role="alert" style="text-align: center; width:50%; margin:auto">
            {{ session('info') }}
        </div>
        @endif
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
                    <option value="{{ $produk->produk_id }}" required>{{ $produk->nama_produk }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Add the following script for SweetAlert -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                @if (session('info') && (session('info') == 'Produk tidak ditemukan' || session('info') == 'Pelanggan tidak ditemukan'))
                    Swal.fire({
                        title: "{{ session('info') }}",
                        icon: "error"
                    });
                @endif
            </script>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Produk</label>
                <input value="jumlah_produk" min="1" type="number" name="jumlah_produk" class="form-control"
                    id="exampleFormControlInput1" required>
            </div>
            <div class="form-group col">
                <label for="exampleFormControlSelect1">Nama Pelanggan</label>
                <select class="form-control" name="pelanggan" id="exampleFormControlSelect1" {{ isset($dataPenjualan)
                    ? 'disabled' : '' }}>
                    @foreach($pelanggan as $pelanggan)
                    <option value="{{ $pelanggan->pelanggan_id }}" {{ (isset($dataPenjualan) && $pelanggan->pelanggan_id
                        ==
                        $dataPenjualan->pelanggan_id) ? 'selected' : '' }}>
                        {{ $pelanggan->nama_pelanggan }}
                    </option>
                    @endforeach
                </select>
            </div>

            @if(session('info'))

            <script>
                setTimeout(function () {
                    document.querySelector('.alert').style.display = 'none';
                }, 3000); // Menyembunyikan alert setelah 3 detik
            </script>
            @endif


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
                        $total_harga=0;
                            $uang=0;
                                $kembalian=0;?>
            
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
                        <a href="/cancel/{{$penjualan->penjualan_id}}" class="btn btn-danger">hapus</a>
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
           
            <input type="input" name="uang" placeholder="masukan nominal uang">
            <input type="hidden" name="total_harga" value="{{ $total_harga }}">
            <input type="hidden" name="kembalian" value="{{ $kembalian }}">
            <input type="hidden" name="penjualan_id" value="{{ $penjualan_id }}">
            <button type="submit" class="btn btn-primary">checkout</button>
        </form>
    </div>
    </div>
</body>

</html>
