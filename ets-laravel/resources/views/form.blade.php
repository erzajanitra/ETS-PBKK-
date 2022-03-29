<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Rekam Medis</title>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Formulir Rekam Medis</h3>
                        
                            <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror">
                                            @error('nama')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nrp">NRP</label>
                                            <input class="form-control" type="text" name="nrp" value="{{ old('nrp') }}" class="@error('nrp') is-invalid @enderror">  
                                            @error('nrp')
                                                         <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                               <label for="usia">Usia</label>
                                               <input class="form-control" type="text" name="usia" value="{{ old('usia') }}" class="@error('usia') is-invalid @enderror">
                                               @error('usia')
                                                          <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                         </div>
                                         {{-- <div class="form-group">
                                            <label for="nama">Angkatan</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="2018" id="2018" name="angkatan[]">
                                                <label class="form-check-label" for="2018">
                                                    2018
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="2019" id="2019" name="angkatan[]">
                                                <label class="form-check-label" for="2019">
                                                    2019
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="2020" id="2020" name="angkatan[]">
                                                <label class="form-check-label" for="2020">
                                                    2020
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="2021" id="2021" name="angkatan[]">
                                                <label class="form-check-label" for="2021">
                                                    2021
                                                </label>
                                            </div>
                                            @error('angkatan')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="alamat">Alamat Domisili</label>
                                            <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}" class="@error('alamat') is-invalid @enderror">
                                            @error('alamat')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="kontak">Nomor HP(WA)</label>
                                        <input class="form-control" type="text" name="kontak" value="{{ old('kontak') }}" class="@error('kontak') is-invalid @enderror">
                                        @error('kontak')
                                                   <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                     </div>
                                     <div class="form-group">
                                        <label for="durasi">Durasi Kontak dengan Pihak yang Terjangkit (dalam jam)</label>
                                        <input class="form-control" type="text" name="durasi" value="{{ old('durasi') }}" class="@error('durasi') is-invalid @enderror">
                                        @error('durasi')
                                                   <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                     </div>
                                     <div class="form-group">
                                        <label for="jarak">Jarak saat bertemu (dalam meter)</label>
                                        <input class="form-control" type="text" name="jarak" value="{{ old('jarak') }}" class="@error('jarak') is-invalid @enderror">
                                        @error('jarak')
                                                   <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                     </div>
                                     {{-- Dapat mengunggah dan menampilkan file gambar --}}
                                     <div class="form-group">
                                        <label for="bukti">Bukti Tes Covid</label>
                                        <input type="file" class="form-control-file" id="bukti" name="bukti" class="@error('bukti') is-invalid @enderror">
                                        @error('bukti')
                                                   <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                     </div>
                                         <div class="form-group">
                                               <input class="btn btn-primary" type="submit" value="Proses">
                                         </div>
                                </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</body>
</html>