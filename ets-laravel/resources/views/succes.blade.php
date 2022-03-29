<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendataan Tracing Covid 19 Mahasiswa TC</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                {{-- button close untuk tutup flash message --}}
                <div class="alert alert-success">
                    <button type="button" class="close close-alert" data-dismiss="alert">x</button>
                    {{ session()->get('success') }}
                </div>
                <div class="card mt-5">
                    <div class="card-body">
                        <h4>Submitted Form</h4>
                        <h3 class="my-4">Pendataan Tracing COVID 19 Mahasiswa TC </h3>
                        <table class="table table-bordered table-striped">
                            {{-- data : objek dari controller yg di enkapsulasi --}}
                            <tr>
                                <td style="width:220px">Nama</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>NRP</td>
                                <td>{{ $data->nrp }}</td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>{{ $data->usia }} Tahun</td>
                            </tr>
                            {{-- <tr>
                                <td>Angkatan</td>
                                <td>{{ $data->angkatan }}</td>
                            </tr> --}}
                            <tr>
                                <td>Alamat Domisili</td>
                                <td>{{ $data->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Nomor HP(WA)</td>
                                <td>{{ $data->kontak }}</td>
                            </tr>
                            <tr>
                                <td>Durasi Kontak dengan Pihak Terjangkit</td>
                                <td>{{ $data->durasi }} Jam</td>
                            </tr>
                            <tr>
                                <td>Jarak Saat Bertemu</td>
                                <td>{{ $data->jarak  }} Meter</p></td>
                                    
                            </tr>
                            {{-- Dapat mengunggah dan menampilkan file gambar --}}
                           <tr>
                                <td>Bukti Hasil Tes</td>
                                <td><img src="{{ asset('images/'.$data->bukti) }}" class="img-thumbnail" alt="Responsive image">
                                </td>
                            </tr>
                        </table>

                        <a href="/input" class="btn btn-primary">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(".close-alert").click(function (e) {
        pid = $(this).parent().hide(500)
        console.log(pid)
    })
</script>
</html> 