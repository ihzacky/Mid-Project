<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">PT Meksiko</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('listkaryawan')}}">Manage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="mx-5 my-5 p-5">
            <form action="{{route("editKaryawan", ["id" => $idKaryawan])}}" method="POST">
                @method("PUT")
                @csrf
         
                <fieldset>
                <legend>Edit Data Karyawan</legend>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nama</label>
                    <input name="nama_karyawan" type="text" id="disabledTextInput" class="form-control" placeholder="Nama" minlength="5" maxlength="20" value="{{$dataKaryawan->nama_karyawan}}">
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Umur</label>
                    <select id="disabledSelect" class="form-select" name="umur_karyawan" value="{{$dataKaryawan->umur_karyawan}}">
                    <?php for ($i = 21; $i <= 90; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Alamat</label>
                    <input name="alamat_karyawan" type="text" id="disabledTextInput" class="form-control" placeholder="Alamat" minlength="10" maxlength="40" value="{{$dataKaryawan->alamat_karyawan}}">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">No. Telepon</label>
                    <input name="telepon_karyawan" type="text" id="disabledTextInput" class="form-control" placeholder="08xxxxxxxxx" minlength="9" maxlength="12" value="{{$dataKaryawan->telepon_karyawan}}">
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Sumbit
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Karyawan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Data karyawan yang dimasukkan sudah sesuai
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Belum</button>
                        <button type="submit" class="btn btn-primary">Sudah</button>
                        </div>
                    </div>
                    </div>
                </div>
  
                </fieldset>
                
              </form>
        </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>