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
    <h1 class="text-center">Data pelanggan Yang Dihapus</h1>
    <div class="container">
        <table style="margin-top: 2rem;" class="table">
            <thead>
                <tr>
                    <th scope="col" class="table-warning">Pelanggan ID</th>
                    <th scope="col" class="table-warning">Nama pelanggan</th>
                    <th scope="col" class="table-warning">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pelanggan as $pelanggan)
                <tr>
                    <td>{{$pelanggan->pelanggan_id}}</td>
                    <td>{{$pelanggan->nama_pelanggan}}</td>
                    <td class="table-secondary">
                        <a href="restore-pelanggan/{{ $pelanggan->pelanggan_id }}" type="submit"
                            class="btn btn-success">kembalikan</a>
                        <a id="deleteButton" class="btn btn-danger" type="submit"
                            href="hapus-permanen-pelanggan/{{ $pelanggan->pelanggan_id }}">hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
<!-- Your existing view code -->

@if(session('info'))
<div class="alert alert-info">
  {{ session('info') }}
</div>
<script>
  setTimeout(function () {
    document.querySelector('.alert').style.display = 'none';
  }, 3000);
</script>
@endif

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('deleteButton').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default behavior (following the link) for now

        Swal.fire({
            title: "Anda Yakin?",
            text: "Anda tidak akan melihat ini lagi!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to the deletion URL
                window.location.href = this.getAttribute('href');
            }
        });
    });
</script>

</html>