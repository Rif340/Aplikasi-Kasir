<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @page {
            size: 80mm 200mm;
            /* Lebar 80mm, tinggi 200mm (ukuran struk kasir) */
            margin: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 5mm;
            /* Padding untuk memberikan ruang di sekitar struk */
            box-sizing: border-box;
            background-color: #fff;
            color: #000;
        }

        .struk {
            width: 100%;
            border: 1px solid #000;
            /* Garis batas struk */
            padding: 5mm;
            /* Padding dalam struk */
            box-sizing: border-box;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .header {
            text-align: center;
            font-size: 14px;
            margin-bottom: 5mm;
        }

        .address {
            text-align: center;
            font-size: 10px;
            margin-bottom: 5mm;
        }

        .content {
            font-size: 12px;
            margin-top: 5mm;
        }

        .item {
            display: grid;
            grid-template-columns: 4fr 1fr 2fr 2fr;
            /* Menentukan kolom untuk Nama, Qty, Harga, dan Total */
            gap: 2mm;
            margin-bottom: 3mm;
        }

        .total {
            font-weight: bold;
            font-size: 14px;
            margin-top: 3mm;
        }

        .payment {
            display: flex;
            justify-content: space-between;
            margin-top: 3mm;
        }

        .footer {
            text-align: center;
            font-size: 10px;
            margin-top: 5mm;
        }
    </style>
    <title>Struk Kasir</title>
</head>

<body>

    <div class="struk">
        <div class="header">
            <p style="font-size:20px;">K A S I R</p>
        </div>
        <div class="address">
            <p>Jl. Cikampek-Parakan Kec.Kota baru</p>
            <p>Telp. 085888060024 </p>

        </div>
        <p>-----------------------------------------------------------------------</p>
        <div class="content">
            <div >
                <p>Tanggal Penjualan :{{ $penjualan->tanggal_penjualan }}</p>
                @foreach ($percobaan as $percobaan)
                <p>Tanggal Penjualan :{{ $percobaan->nama_pelanggan }}</p>
                @endforeach
                <p>Penjualan ID :{{ $penjualan->penjualan_id }}</p>
            </div>
            <p>-----------------------------------------------------------------------------------------------</p>
            <div class="item">
                <p><b>Nama Produk</b></p>
                <p><b>Qty</b></p>
                <p><b>Harga</b></p>
                <p><b>Total</b></p>
            </div>@foreach ($detail as $detail)
            <div class="item">
                <p>{{ $detail->nama_produk }}</p>
                <p>{{ $detail->jumlah_produk }}</p>
                <p>{{ number_format($detail->harga, 0, ',', '.') }}</p>
                <p>{{ number_format($detail->jumlah_produk * $detail->harga, 0, ',', '.') }}</p>
            </div> @endforeach
            <p>-----------------------------------------------------------------------------------------------</p>
            <div class="total">
                <p>Total Belanja {{$count}} Produk</p>
                <p>Rp. {{ number_format($penjualan->TotalHarga, 0, ',', '.') }}</p>
            </div>
            <p>-----------------------------------------------------------------------------------------------</p>
        </div>
        <div class="payment">
            <p>Tunai</p>
            <p>Rp. {{ number_format($penjualan->TotalHarga, 0, ',', '.') }}</p>
        </div>
        <div class="payment">
            <p>Kembali</p>
            <p>Rp. 0,-</p> <!-- Untuk Kembali, mungkin perlu dikalkulasikan sesuai kebutuhan -->
        </div>
        <p>-----------------------------------------------------------------------</p>
        <div class="footer">
            <p>Terima Kasih Atas Kunjungan Anda</p>
            <p>Periksa barang sebelum dibeli. Barang yang sudah dibeli tidak bisa ditukar atau dikembalikan.</p>
        </div>
    </div>

    <script>
        window.onload = function () {
            // Automatically print the page when it loads
            window.print();
        };
    </script>
</body>

</html>
