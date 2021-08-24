<!doctype html>
<html lang="en">

<?php
include('head.php');
include('config.php');
?>

<body style="background-color: #000000;">

    <?php include('navbar.php') ?>

    <style>
        .jumbotron .judul {
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .jumbotron .lead {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: larger;
        }
    </style>

    <!-- Jumbotron -->
    <div class="container" style="padding-top: 7rem; color: aliceblue; margin-bottom: 10rem;">
        <div class="jumbotron">
            <h1 class="judul display-4" data-aos="fade-down" data-aos-duration="1000">Eureka, Eureka!!!</h1>
            <p class="lead" data-aos="fade-down" data-aos-duration="1000">Eureka merupakan proyek provider yang ada di Indonesia serba digital dan telah menggunakan sinyal 5G NR dari Study Box.</p>
            <hr class="my-4" data-aos="fade-down" data-aos-duration="1000">
            <p data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">Apa saja, Siapa saja, Kenapa saja, Di mana saja, Kapan saja, Bagaimana saja.</p>
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="font-size: 24px; font-weight: bold;">
                    SELAMAT!!!
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body rounded-3" style="background-color: #ff1966; color: aliceblue;">
                    <h5 class="text-center">
                        <span style="color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                            </svg></span>
                        Terima kasih telah bergabung dengan kami.
                        <span style="color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                            </svg></span>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ff1966" fill-opacity="1" d="M0,32L40,37.3C80,43,160,53,240,85.3C320,117,400,171,480,197.3C560,224,640,224,720,213.3C800,203,880,181,960,181.3C1040,181,1120,203,1200,202.7C1280,203,1360,181,1400,170.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>
    <footer class="text-center pb-5 fs-5" style="color: aliceblue; background-color: #ff1966;">
        <h4>
            <span style="color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                </svg></span>
            Eureka <-> Eureka
                <span style="color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg></span>
        </h4>
    </footer>
    <!-- Footer -->
</body>