<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kaos Distro</title>
    <style>
        #background-audio {
            display: none;
            /* Sembunyikan elemen audio dari tampilan */
        }
    </style>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=New+Rocker&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'New Rocker', cursive;
        }

        .display-4 {
            font-family: 'New Rocker', cursive;
        }

        .lead {
            font-family: 'New Rocker', cursive;
        }

        .bg-dark {
            background-color: #343a40;
            /* Contoh warna latar belakang gelap */
        }

        .text-center {
            text-align: center;
        }

        .text-white {
            color: #ffffff;
        }

        .py-5 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .card-wrapper {
            /* Add some margin and padding to the card wrapper */
            margin: 20px;
        }

        .card-img-top {
            transition: transform 0.5s ease;
            /* Smooth transition for the zoom effect */
            cursor: pointer;
            /* Change cursor to pointer to indicate it's clickable */
        }

        .card-img-top:hover {
            transform: scale(1.2);
            /* Zoom in the image */
        }

        .card {
            overflow: hidden;
            /* Hide overflow to ensure zoomed image is contained */
        }

        .whatsapp-logo {
            position: fixed;
            bottom: 20px;
            /* Jarak dari bawah */
            left: 20px;
            /* Jarak dari kiri */
            width: 50px;
            /* Sesuaikan ukuran logo */
            height: auto;
            z-index: 1000;
            /* Pastikan logo tetap di atas elemen lain */
        }

        .whatsapp-logo:hover {
            transform: scale(1.1);
            /* Membesarkan logo saat hover */
            transition: transform 0.3s ease;
        }
    </style>
</head>

<body>
    <!-- Header-->
    <header class="bg-header py-2">
        <!-- Elemen audio -->
        <audio id="background-audio">
            <source src="audio/1.mp4">
            Your browser does not support the audio element.
        </audio>

        <!-- Tombol untuk memulai audio -->
        <button id="play-audio-button">Play Music </button>

        <script>
            // Mendapatkan elemen audio dan tombol
            const audio = document.getElementById('background-audio');
            const playButton = document.getElementById('play-audio-button');

            // Menambahkan event listener pada tombol
            playButton.addEventListener('click', () => {
                if (audio.paused) {
                    audio.play(); // Memutar audio saat tombol diklik
                    playButton.textContent = 'Pause Music'; // Mengubah teks tombol
                } else {
                    audio.pause(); // Memberhentikan audio jika sudah diputar
                    playButton.textContent = 'Play Music'; // Mengubah teks tombol
                }
            });
        </script>
        <div class="text-center">
            <h1 class="display-4 text-white fw-bolder">Shirt <b>Name Brand</b></h1>
        </div>
        <div class="container px-4 px-lg-1 my-5">
            <div class="text-center text-white">
                <div class="description">
                    <p class="fw-normal text-white">
                        Welcome to <b>Kaos Distro</b>, where music passion meets high quality. We
                        provide
                        premium band t-shirts with quality materials and cool designs. Order custom t-shirts with your personal
                        design or your favorite band artwork. With advanced printing technology, every design is sharp and durable.
                        Find the perfect band t-shirt at <b>Kaos Distro</b> and show your support in style!
                    </p>
                </div>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-1 bg-dark">
        <div class="container px-1 px-lg-1 mt-1">
            <div class="overflow-auto">
                <div class="d-flex flex-nowrap">
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/2.jpeg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/5.jpeg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/6.jpeg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://down-id.img.susercontent.com/file/id-11134207-7r98p-logxl14m8ups34" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://s3.bukalapak.com/img/8833016212/large/Kaos_Band_Rock_Metallica_C06___Hitam_Baju_Distro_Kaos_Metal_.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://cf.shopee.co.id/file/f6802400ead90a93c2c2b3684b795476" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/99/MTA-35908063/brd-44261_kaos-band-nirvana-baju-distro-musik-punk-rock-pria-dan-wanita_full01.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://cf.shopee.co.id/file/706986a41e44638df1bed9ac17bf05d6" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://down-sg.img.susercontent.com/file/a4cbd4729c8bb0198a8fb76db9220555" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://cf.shopee.co.id/file/3d14ba31409d1203dbbf2869521f2865" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://cf.shopee.co.id/file/e3a9ddd2cdc25bda42405c5853a35f86" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://cf.shopee.co.id/file/4003b1ad5b052fbf41837ffd2517b563" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2023/5/20/9806b1a4-21a6-49d7-86b7-8bd2b1d8f855.png?ect=4g  " alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/61v0m9sDVcL._UL1500_.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                        </div>
                    </div>
                    <div class="card-wrapper">
                        <!-- Example Card -->
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://3.bp.blogspot.com/-gwy3XRPDz-c/UjpeFMe2saI/AAAAAAAAA38/-oqS9OZSiWg/s1600/kaos+new.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->

                            <!-- Product actions-->

                        </div>
                    </div>
                    <!-- Repeat the above <div class="card-wrapper"> block for each card you want to display -->
                    <!-- Additional cards can be added here in the same format -->
                </div>
            </div>
        </div>
    </section>

    <style>
        .d-flex {
            display: flex;
        }

        .card-wrapper {
            flex: 0 0 auto;
            margin-right: 1rem;
        }

        .card {
            width: 18rem;
            /* Adjust width as needed */
        }
    </style>

    <!-- Footer-->
    <footer class="py-1 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Gilang Rizky Ramadhan</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <a href="https://wa.me/089694156005" target="_blank">
        <img src="img/wa.png" alt="Chat dengan kami di WhatsApp" class="whatsapp-logo">
    </a>

</body>

</html>