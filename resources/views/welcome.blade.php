<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Climb Up Coffee Jakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4c68d22cde.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        /* @media (max-width: 768px) {

        } */
    </style>
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary fixed-top bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/climbuplogo.png" alt="climbup" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" data-toggle="modal" data-target="#exampleModal">Reservasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="jumbotron">
            <div class="overlay"></div>
            <img src="/img/POSTER 22.png" alt="" class="img_jumbotron">

        </div>
        <div class="menu">
            <section>
                {{-- <div class="container">
                     <div class="card_form">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <form>
                                    <div class="row p-0 m-0">
                                        <div class="col-lg-3 col-sm-3 ">
                                            <div class="mb-3">
                                                <label for="date" class="form-label">Tanggal </label>
                                                <input name="date" type="date" class="form-control" id="date"
                                                    aria-describedby="time">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-3 ">
                                            <div class="mb-3">
                                                <label for="time" class="form-label">Waktu</label>
                                                <input name="time" type="time" class="form-control" id="time"
                                                    aria-describedby="time">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-3 p-0">
                                            <label for="select" class="form-label">Jumlah</label>
                                            <select name="jumlah_orang" class="form-select"
                                                aria-label="Default select example">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div
                                            class="col-lg-4 col-sm-2 pt-3 d-flex justify-content-end align-items-center">
                                            <button class="btn btn-primary tombol-check">Check</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="container">
                    <div class="product_container pb-4">
                        <div class="container">
                            <div class="card card-custom">
                                <div class="row g-0 align-items-center">
                                    <!-- Left Section -->
                                    <div class="col-md-4 left-section">
                                        <p class="fw-bold head_card_title">Coffee Party</p>
                                        <hr style="color:white; width:150px; padding: 0; padding:0;">
                                        <p class="mt-3 fw-semibold head_card_deskripsi">Everyday & Everyone</p>
                                        <p class="text-muted head_card_subdeskripsi">Consectetur adipisicing elit, sed
                                            do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua.</p>
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#exampleModal" style="font-size: 1.2rem">Make
                                            Reservation</button>


                                    </div>
                                    <div class="col-md-3 center-section">
                                        <img src="\img\coffe_scratch.png" alt="Coffee Cup" class="coffee-img">
                                    </div>
                                    <!-- Right Section -->
                                    <div class="col-md-4 left-section">
                                        <p class="fw-bold head_card_title"> Location </p>
                                        <hr style="color:white; width:150px; padding: 0; padding:0;">
                                        <p class="text-muted head_card_subdeskripsi">
                                            You can find us consectetur elit, sed do eiusmod tempor incididun</p>
                                        <p class="mt-3 fw-semibold head_card_deskripsi">Addres</p>
                                        <p class="text-muted head_card_subdeskripsi">Jl.Kenangan No.27 Jakarta Barat</p>
                                        <a href="#" class="btn btn-link p-0 fw-bold btn-custom">See On Goolge Maps
                                            &rarr;</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="about" class="about_content pt-5">
                        <div class="row pt-5">
                            <div class="col-lg-7 col-sm-12">
                                <div class="row">
                                    <div class="text_content_header text-center p-0">
                                        <p>Tentang Cafe Climb Up</p>
                                        Climb Up Coffee Jakarta
                                        <p>Welcome!</p>

                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-6 d-flex justify-content-end">
                                        <div class="produk">
                                            <div class="gambar_produk">
                                                <img src="/img/produk3.png" class="rounded w-100" alt="">
                                                {{-- <img src="" class="rounded w-100" alt=""> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="produk">
                                            <div class="gambar_produk">
                                                <img src="/img/poster1.png" class="rounded w-100" alt="">
                                                {{-- <img src="" class="rounded w-100" alt="climbup"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 d-flex justify-content-end">
                                        <div class="produk">
                                            <div class="gambar_produk">
                                                <img src="/img/produk1.png" class="rounded w-100 leftbtm_img_produk"
                                                    alt="climbup">
                                                {{-- <img src="" class="rounded w-100 leftbtm_img_produk"
                                                    alt="climbup"> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="produk">
                                            <div class="gambar_produk">
                                                <img src="/img/rooftop.png" class="rounded w-100" alt="climbup">
                                                {{-- <img src="" class="rounded w-100" alt="climbup"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-sm-12">
                                <div class="row">
                                    <div class="text_content_body">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="text_content_body">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining
                                        essentially unchanged.
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="text_content_header">
                                        Varian Coffee
                                    </div>
                                    <div class="text_content_body">
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="text_content_header">
                                        Varian Coffee
                                    </div>
                                    <div class="text_content_body">
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section>
        </div>
    </main>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Reserv Table</h3>
                </div>
                <form action="{{ route('Post Reservasi') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="exampleFormControlInput1">Nama Pemesan</label>
                            <input required name="nama" type="text" class="form-control"
                                id="exampleFormControlInput1" placeholder="Nama Pemesan Atas Nama ?">
                        </div>
                        <div class="form-group mt-2">
                            <label for="exampleFormControlInput1">Email Pemesan</label>
                            <input required name="email" type="email" class="form-control"
                                id="exampleFormControlInput1" placeholder="Email Pemesan">
                        </div>
                        <div class="form-group mt-2">
                            <label for="exampleFormControlInput1">No Hanphone</label>
                            <input required name="no_hp" type="number" class="form-control"
                                id="exampleFormControlInput1" placeholder="Kontak Pemesan">
                        </div>
                        <div class="form-group mt-2">
                            <label for="exampleFormControlSelect1">Jumlah Orang</label>
                            <select name="jumlah_orang" class="form-control" id="exampleFormControlSelect1">
                                <option value="1-3 orang">1-3 Orang</option>
                                <option value="3-5 Orang">3-5 Orang</option>
                                <option value="+5 orang">+5 Orang</option>
                                <option value="+10 orang">+10 Orang</option>
                            </select>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mt-2">
                                    <label for="exampleFormControlInput1">Reservation</label>
                                    <input required name="tanggal" type="date" class="form-control"
                                        id="exampleFormControlInput1" placeholder="tanggal reservasi ? ">

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mt-2">
                                    <label for="exampleFormControlInput1"> </label>
                                    <input required name="waktu" type="time" class="form-control"
                                        id="exampleFormControlInput1" placeholder="tanggal reservasi ? ">

                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="exampleFormControlTextarea1">Note or Special Request</label>
                            <textarea name="note" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <footer class="pt-5 pb-5">
        <div class="container">

            <div id="contact" class="footer_main">
                <div class="row">
                    <img src="/img/climbuplogo.png" class="logo-footer" alt="logo">

                </div>
                <div class="row">
                    <div class="col-5">
                        <div class="deskripsi mt-5">
                            <h5>ClimbUp Jakarta merupakan t has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining
                                essentially unchanged.</h5>
                        </div>
                        <div class="copyright mt-5">
                            © Climb Up Coffee Jakarta 2025. All rights reserved.
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <div class="deskripsi mt-5">
                                    <h2>Sosial Media</h2>
                                </div>
                                <li>
                                    <button class="btn btn-outline-danger my-2 mx-0 ">
                                        <i class="fa-brands fa-square-instagram fa-xl"></i>
                                        Instagram
                                    </button>
                                </li>
                                <li>
                                    <button class="btn btn-outline-danger my-2">
                                        <i class="fa-brands fa-tiktok  fa-xl"></i>
                                        Tiktok
                                    </button>
                                </li>

                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="deskripsi mt-5">
                                    <h2>Hubungi Kami</h2>
                                    <a href="" class="btn btn-outline-secondary my-2">
                                        <i class="fa-brands fa-square-whatsapp fa-2xl "></i>
                                        +62 1238 3217
                                    </a>
                                    <a href="" class="btn btn-outline-secondary my-2 text-left">
                                        <i class="fa-solid fa-envelope fa-xl"></i>
                                        @climbup@gmail.com
                                    </a>
                                </div>

                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="deskripsi mt-5" style="font-weight: 800">
                                    <h2>Opening hours</h2>
                                    Mon - Fry : 8AM – 8PM <br>
                                    Saturday : 8AM – 4PM <br>
                                    Sunday : 8AM – 2PM <br>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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

    <script>
        window.addEventListener("scroll", function() {
            const navbar = document.getElementById("navbar");
            if (window.scrollY > 50) { // Jika scroll lebih dari 50px
                navbar.classList.add("navbar-scrolled");
            } else {
                navbar.classList.remove("navbar-scrolled");
            }
        });
    </script>
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
