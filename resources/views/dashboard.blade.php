<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/4c68d22cde.js" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>

    <body>
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
                            .<div class="card text-left bg-light">
                                <div class="card-body">
                                    <p class="card-text">
                                        body
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            .<div class="card text-left bg-light">
                                <div class="card-body">
                                    <p class="card-text">Body</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            .<div class="card text-left bg-light">
                                <div class="card-body">
                                    <p class="card-text">Body</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="data-reservasi">
                            <center>
                                <h1 class="pb-2">Data Resrvasi Pelanggan</h1>
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
                                            <th scope="col">Note</th>
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
                                                <td scope="row"> {{ $data->note }}
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
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
    </body>

    </html>
