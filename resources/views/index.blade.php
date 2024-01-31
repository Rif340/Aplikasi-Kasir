<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        #kasirContainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 80%;
            max-width: 900px;
            padding: 20px;
            box-sizing: border-box;
        }

        #formContainer {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 100%;
            margin-bottom: 20px;
        }

        #tableContainer {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        #totalContainer {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        #totalLabel {
            margin-right: 10px;
            font-weight: bold;
        }

        #totalHarga {
            font-size: 18px;
            font-weight: bold;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div id="kasirContainer">

        <h2>Kasir</h2>

        <div id="formContainer">
            <label for="namaPelanggan">Nama Pelanggan:</label>
            <input type="text" id="namaPelanggan">

            <label for="namaBarang">Nama Barang:</label>
            <input type="text" id="namaBarang">

            <label for="jumlah">Jumlah:</label>
            <input type="number" id="jumlah" min="1">

            <label for="hargaSatuan">Harga Satuan:</label>
            <input type="number" id="hargaSatuan" min="0">

            <button type="button" onclick="tambahBarang()">Tambah Barang</button>
        </div>

        <div id="tableContainer">
            <table id="barangTable">
                <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Daftar barang akan ditampilkan di sini -->
                </tbody>
            </table>
        </div>

        <div id="totalContainer">
            <span id="totalLabel">Total Harga:</span>
            <span id="totalHarga"> $0.00</span>
        </div>

        <button type="button" onclick="order()">Order</button>

    </div>

    <script>
         function tambahBarang() {
            var namaPelanggan = document.getElementById("namaPelanggan").value;
            var namaBarang = document.getElementById("namaBarang").value;
            var jumlah = parseInt(document.getElementById("jumlah").value);
            var hargaSatuan = parseFloat(document.getElementById("hargaSatuan").value);

            if (!namaPelanggan || !namaBarang || isNaN(jumlah) || isNaN(hargaSatuan)) {
                alert("Silakan isi semua kolom dengan benar.");
                return;
            }

            var total = jumlah * hargaSatuan;

            var table = document.getElementById("barangTable").getElementsByTagName('tbody')[0];
            var newRow = table.insertRow(table.rows.length);

            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);
            var cell5 = newRow.insertCell(4);
            var cell6 = newRow.insertCell(5);

            cell1.innerHTML = namaPelanggan;
            cell2.innerHTML = namaBarang;
            cell3.innerHTML = jumlah;
            cell4.innerHTML = hargaSatuan.toFixed(2);
            cell5.innerHTML = total.toFixed(2);
            cell6.innerHTML = '<button onclick="hapusBarang(this)">Hapus</button>';

            updateTotalHarga(); // Update total harga setiap kali barang ditambahkan
        }

        function hapusBarang(row) {
            var index = row.parentNode.parentNode.rowIndex;
            document.getElementById("barangTable").deleteRow(index);
            updateTotalHarga();
        }

        function updateTotalHarga() {
            var table = document.getElementById("barangTable").getElementsByTagName('tbody')[0];
            var rows = table.getElementsByTagName('tr');
            var total = 0;

            for (var i = 0; i < rows.length; i++) {
                var cells = rows[i].getElementsByTagName('td');
                var subtotal = parseFloat(cells[4].innerHTML);
                total += subtotal;
            }

            document.getElementById("totalHarga").innerHTML = total.toFixed(2);
        }

        function hitungTotalHargaOtomatis() {
            var jumlah = parseInt(document.getElementById("jumlah").value) || 0;
            var hargaSatuan = parseFloat(document.getElementById("hargaSatuan").value) || 0;
            var total = jumlah * hargaSatuan;
            document.getElementById("totalHarga").innerHTML = total.toFixed(2);
        }

        function order() {
            var namaPelanggan = document.getElementById("namaPelanggan").value;
            var totalHarga = parseFloat(document.getElementById("totalHarga").innerHTML);

            if (!namaPelanggan || totalHarga === 0) {
                alert("Silakan isi nama pelanggan dan tambahkan barang sebelum order.");
                return;
            }

            alert("Order berhasil! Nama Pelanggan: " + namaPelanggan + ", Total Harga: $" + totalHarga.toFixed(2));

            // Reset form and table
            document.getElementById("namaPelanggan").value = "";
            document.getElementById("namaBarang").value = "";
            document.getElementById("jumlah").value = "";
            document.getElementById("hargaSatuan").value = "";
            document.getElementById("barangTable").getElementsByTagName('tbody')[0].innerHTML = "";
            document.getElementById("totalHarga").innerHTML = "0";
        }

        document.getElementById("jumlah").addEventListener("input", hitungTotalHargaOtomatis);
        document.getElementById("hargaSatuan").addEventListener("input", hitungTotalHargaOtomatis);
   
    </script>

</body>
</html>