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
 

    <h1 class="text-center">Data Produk Yang Dihapus</h1>
    <div class="container">   
    <table style="margin-top: 2rem;" class="table">
      <thead>
        <tr>
          <th scope="col" class="table-warning">Produk ID</th>
          <th scope="col" class="table-warning">Nama Produk</th>
          <th scope="col" class="table-warning">Opsi</th>
        </tr>
      </thead>
      <tbody>
      @foreach($produk as $produk)
        <tr>
        <td>{{$produk->produk_id}}</td>
        <td>{{$produk->nama_produk}}</td>
        <td class="table-secondary">
            <a href="restore-produk/{{ $produk->produk_id }}" type="submit" class="btn btn-success">kembalikan</a>
            <a href="/hapus-permanen-produk/{{$produk->produk_id}}" class="btn btn-warning">hapus</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
<script>
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: "btn btn-success",
    cancelButton: "btn btn-danger"
  },
  buttonsStyling: false
});
swalWithBootstrapButtons.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel!",
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire({
      title: "Deleted!",
      text: "Your file has been deleted.",
      icon: "success"
    });
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire({
      title: "Cancelled",
      text: "Your imaginary file is safe :)",
      icon: "error"
    });
  }
});
</script>
</html>