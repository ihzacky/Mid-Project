<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Karyawan</title>
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

        <div class= "d-flex px-5 gap-4 my-5">
            <i class="bi bi-people-fill"></i>
            <h4>List Karyawan</h4>
            <a href="{{route('tambahkaryawan')}}">
                <button type="button" class="btn btn-primary">Tambah Karyawan</button>
            </a>
        </div>
        <hr class="mx-5">

        <div class="px-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No. Telpon</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                @foreach ($dataKaryawan as $karyawan)

                <tbody>
                  <tr>
                    <th scope="row">{{$karyawan->id}}</th>
                    <td>{{$karyawan->nama_karyawan}}</td>
                    <td>{{$karyawan->umur_karyawan}}</td>
                    <td>{{$karyawan->alamat_karyawan}}</td>
                    <td>{{$karyawan->telepon_karyawan}}</td>
                    <td>
                        <a href="{{route("editKaryawan", ["id" => $karyawan->id])}}"><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button></a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$karyawan->id}}"><i class="bi bi-trash"></i></button>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop{{$karyawan->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$karyawan->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel{{$karyawan->id}}">Hapus Data Karyawan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin untuk menghapus data karyawan?</p>
                                        <p class="ml-3">
                                        Nama        :   {{$karyawan->nama_karyawan}} <br>
                                        Umur        :   {{$karyawan->umur_karyawan}} <br>
                                        Alamat      :   {{$karyawan->alamat_karyawan}} <br>
                                        No. Telepon :   {{$karyawan->telepon_karyawan}}
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <a href="{{route("deleteKaryawan", ["id" => $karyawan->id])}}"><button type="button" class="btn btn-danger">Yakin</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    
                  </tr>
                      
                  @endforeach
                </tbody>
              </table>
        </div>




    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>