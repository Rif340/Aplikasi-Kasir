<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kasir.com</title>
</head>
<body>
    @include('layouts.sidebar')
    <div class="container">
        <BR>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col" colspan="7" style="text-align: center">
                            <h1>Detail penjualan</h1>
                        </th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center">Nama Produk</th>
                        <th scope="col" style="text-align: center">Harga</th>
                        <th scope="col" style="text-align: center">jumlah_produk</th>
                        <th scope="col" style="text-align: center">Sub Total</th>

                    </tr>
                </thead>
                @foreach ($detail as $detail) 
                    <tbody>
                        <tr>
                            <td style="text-align: center;">{{$detail->nama_produk}}</td>
                            <td style="text-align: center;">{{$detail->harga}}</td>
                            <td style="text-align: center;">{{$detail->jumlah_produk}}</td>
                            <td style="text-align: center;">{{$detail->subtotal}}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        <h1> Total Harga : {{ number_format($detail->TotalHarga, 0, ',', '.') }}</h1>
        <div>
            <a href="{{ url('penjualan') }}" type="submit" class="btn btn-outline-dark"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                    <path fill-rule="evenodd"
                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                </svg> kembali</a>
        </div>
    </div>
</body>
</html>