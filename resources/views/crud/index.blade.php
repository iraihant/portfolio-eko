<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card border border-0 my-5">
                    <h5 class="card-title">Daftar Tamu</h5>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body shadow-lg rounded">
                        <div class="row my-3">
                            <div class="col-md-7">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah Tamu
                                  </button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Daftar Tamu</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                            <div class="col-md-12">
                                                <form action="{{ route('tugas_store') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                      <label for="nama" class="form-label">Nama</label>
                                                      <input type="text" class="form-control" id="name" name="name">
                                                    </div>
                                                    <div class="mb-3">
                                                      <label for="email" class="form-label">Email</label>
                                                      <input type="email" class="form-control" id="email" name="email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="kota" class="form-label">Kota</label>
                                                        <input type="text" class="form-control" id="city" name="city">
                                                      </div>
                                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                                    <button type="button" class="btn  btn-secondary" data-bs-dismiss="modal">Close</button>
                                                  </form>

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <form action="{{ route('tugas_search') }}" method="GET">
                                <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                      <label for="search" class="col-form-label">Search</label>
                                    </div>
                                    <div class="col-auto">
                                      <input type="text" id="search" name="search" class="form-control" value="{{ old('search') }}">
                                    </div>
                                  </div>

                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Lengkap</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Kota</th>
                                                <th scope="col">Aksi</th>

                                            </tr>
                                          </thead>
                                          <tbody>
                                            @if ($data->isEmpty())
                                                <tr >
                                                    <td colspan="5" class="text-center">TIDAK ADA DATA YANG TERSEDIA</td>
                                                </tr>
                                            @else
                                                <ul>
                                                    @foreach ($data as $index => $tamu)
                                                    <tr>
                                                        <th scope="row">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</th>
                                                        <td>{{ ucfirst($tamu->name) }}</td>
                                                        <td>{{ $tamu->email }}</td>
                                                        <td>{{ ucfirst($tamu->city) }}</td>
                                                        <td class="px-1">
                                                            <button class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#edit{{$tamu->id}}"><i class="fas fa-edit"></i></button>
                                                            <button class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#delete{{$tamu->id}}"><i class="fas fa-trash"></i></button>
                                                        </td>
                                                    </tr>

                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="edit{{$tamu->id}}" tabindex="-1" aria-labelledby="editModalLabel{{$tamu->id}}" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="editModalLabel{{$tamu->id}}">Edit Tamu {{ $tamu->name }}</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('tugas_update', $tamu->id) }}" method="POST">
                                                                        @csrf
                                                                        <div class="mb-3">
                                                                            <label for="nama" class="form-label">Nama</label>
                                                                            <input type="text" class="form-control" id="name" name="name" value="{{ $tamu->name }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="email" class="form-label">Email</label>
                                                                            <input type="email" class="form-control" id="email" name="email" value="{{ $tamu->email }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="kota" class="form-label">Kota</label>
                                                                            <input type="text" class="form-control" id="city" name="city" value="{{ $tamu->city }}">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal Delete -->
                                                    <div class="modal fade" id="delete{{$tamu->id}}" tabindex="-1" aria-labelledby="DeleteModal{{$tamu->id}}" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="DeleteModal{{$tamu->id}}">Hapus Tamu {{ $tamu->name }}</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Apakah Anda Yakin Menghapus Tamu {{ $tamu->name }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('tugas_delete', $tamu->id)}}" method="POST">
                                                                        @csrf

                                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </ul>
                                                 <!-- Pagination Links -->
                                            @endif


                                          </tbody>
                                      </table>
                                </div>
                                {{ $data->links('vendor.pagination.bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>
