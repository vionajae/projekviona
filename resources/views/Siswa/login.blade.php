<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <div id="main" class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px;">
                <div class="card-body">
                    <h4 class="h4">LOGIN</h4>
                    
                    @if (session('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{session('pesan')}}
                      </div>
                    @endif
                    {{-- pesan jika validasi gagal --}}
                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Gagal login dek
                      </div>
                    @endif

                    <form action="{{url('siswa/login')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nisn" class="form-label">Nisn</label>
                            <input type="text" class="form-control" name="nisn" id="nisn" placeholder="nisn">
                            @error('nisn')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">
                            @error('nama')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn form-control btn-primary mb-2">Login</button>
                            <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>