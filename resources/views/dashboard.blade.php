<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/4c68d22cde.js" crossorigin="anonymous"></script>
        <title>Dashboard Reservasi</title>
    </head>

    <body style="background-color: rgb(236, 237, 245)">
        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="/img/climbuplogo.png" alt="climbup" class="logo" style="width: 155px">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --}}
                            <a href="{{ route('logout') }}" class="btn btn-outline-danger" type="submit">LOGOUT</a>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="main">
                <div class="info">
                    <div class="row pt-5 pb-5">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card text-white bg-info mb-3">
                                <div class="card-header text-center"> <b> RESERVASI TODAY</b></div>
                                <div class="card-body" style="height: 5rem">
                                    <div class="row">
                                        <div class="col-9">
                                            <h5 class="card-title">{{ $reservasiToday }} Customer Reservasi Today</h5>
                                        </div>
                                        <div class="col-3">
                                            <i class="fa-solid fa-users" style="font-size: 3rem"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card text-white bg-warning mb-3">
                                <div class="card-header text-center"> <b>CANCEL RESERVASI</b></div>
                                <div class="card-body" style="height: 5rem">
                                    <div class="row">
                                        <div class="col-9">
                                            <h5 class="card-title">{{ $countCancel }} Customer Cancel Reservasi</h5>
                                        </div>
                                        <div class="col-3">
                                            <i class="fa-solid fa-ban" style="font-size: 3rem"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-header text-center"> <b>JUMLAH RESERVASI SELESAI</b></div>
                                <div class="card-body" style="height: 5rem">
                                    <div class="row">
                                        <div class="col-9">
                                            <h5 class="card-title">{{ $countDone }} Reservasi Done</h5>
                                        </div>
                                        <div class="col-3">
                                            <i class="fa-solid fa-clipboard-check" style="font-size: 3rem"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="data-reservasi">
                            <center>
                                <h1 class="pb-2">Data Resrvasi Customer</h1>
                            </center>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <th scope="col">email</th>
                                            <th scope="col">Kontak</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Waktu</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reservasi as $data)
                                            <tr class="">
                                                <td scope="row"> {{ $data->nama }}
                                                </td>
                                                <td scope="row"> {{ $data->email }}
                                                </td>
                                                <td scope="row"> {{ $data->no_hp }}
                                                </td>
                                                <td scope="row"> {{ $data->jumlah_orang }}
                                                </td>
                                                <td scope="row"> {{ $data->tanggal }}
                                                </td>
                                                <td scope="row"> {{ $data->waktu }}
                                                </td>
                                                <td scope="row">
                                                    @if ($data->status == 'Selesai')
                                                        <BUTton class="btn btn-success disabled">
                                                            {{ $data->status }}
                                                        </BUTton>
                                                    @elseif ($data->status == 'Batal')
                                                        <BUTton class="btn btn-danger disabled">
                                                            {{ $data->status }}
                                                        </BUTton>
                                                    @else
                                                        <BUTton class="btn btn-secondary disabled">
                                                            {{ $data->status }}
                                                        </BUTton>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control update-status" id="update-status"
                                                            name="status" data-id="{{ $data->id }}">
                                                            <option value=""
                                                                {{ empty($data->status) ? 'selected' : '' }}>Pilih Ubah
                                                                Status</option>
                                                            <option value="Batal"
                                                                {{ $data->status == 'Batal' ? 'selected' : '' }}>Batal
                                                            </option>
                                                            <option value="Selesai"
                                                                {{ $data->status == 'Selesai' ? 'selected' : '' }}>
                                                                Selesai</option>
                                                            <option value="Reservasi"
                                                                {{ $data->status == 'Reservasi' ? 'selected' : '' }}>
                                                                Reservasi</option>
                                                        </select>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @include('sweetalert::alert')
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    timer: 15000, // Durasi dalam milidetik (5000ms = 5 detik)
                    timerProgressBar: true, // Menampilkan progress bar
                    showConfirmButton: false // Tombol "OK" tidak ditampilkan
                });
            </script>
        @endif
        <script>
            $(document).on('change', '.update-status', function() {
                var status = $(this).val(); // Ambil nilai status dari dropdown
                var id = $(this).data('id'); // Ambil ID data dari atribut data-id

                if (status) {
                    $.ajax({
                        url: "{{ route('Update Reservasi') }}",
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: id,
                            status: status
                        },
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: response.message,
                                timer: 3000,
                                timerProgressBar: true,
                                showConfirmButton: false
                            });

                            // Setelah berhasil update, lakukan GET untuk memperbarui tabel
                            fetchData();
                        },
                        error: function(xhr) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal!',
                                text: 'Terjadi kesalahan, silakan coba lagi.',
                            });
                        }
                    });
                }
            });

            // Fungsi untuk mendapatkan data terbaru dan memperbarui tabel
            function fetchData() {
                $.ajax({
                    url: "{{ route('getDataReservasi') }}", // Sesuaikan dengan route untuk mendapatkan data terbaru
                    method: "GET",
                    success: function(data) {
                        // Replace data tabel dengan data baru
                        $('tbody').html(data);
                        fetchCardData();
                    },
                    error: function(xhr) {
                        console.error('Error fetching data:', xhr);
                    }
                });
            }

            function fetchCardData() {
                $.ajax({
                    url: "{{ route('getCardData') }}",
                    method: "GET",
                    success: function(data) {
                        // Perbarui card dengan data baru
                        $('.card-title:contains("Customer Reservasi Today")').text(
                            `${data.reservasiToday} Customer Reservasi Today`);
                        $('.card-title:contains("Customer Cancel Reservasi")').text(
                            `${data.countCancel} Customer Cancel Reservasi`);
                        $('.card-title:contains("Reservasi Done")').text(`${data.countDone} Reservasi Done`);
                    },
                    error: function(xhr) {
                        console.error('Error fetching card data:', xhr);
                    }
                });
            }
        </script>

    </body>

    </html>
