<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 62.5%;
            font-family: 'Roboto', sans-serif;
        }

        li {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        .header {
            border-bottom: 1px solid #4B092F;

        }

        .navbar {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            padding: 1rem 1.5rem;
            background-color: #4B092F
        }

        .hamburger {
            display: none;
        }

        .bar {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px auto;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background-color: white;
        }

        .nav-menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-item {
            margin-left: 5rem;
        }

        .nav-link {
            font-size: 1.6rem;
            font-weight: 400;
            color: white;
        }

        .nav-link:hover {
            color: yellow;
        }

        .nav-logo {
            font-size: 2.1rem;
            font-weight: 500;
            color: white;
        }

        .nav-logo:hover {
            color: yellow;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                justify-content: space-between;

            }

            .nav-menu {
                position: fixed;
                left: -100%;
                top: 5rem;
                flex-direction: column;
                background-color: #4B092F;
                width: 100%;
                border-radius: 10px;
                text-align: center;
                transition: 0.3s;
                box-shadow:
                    0 10px 27px rgba(0, 0, 0, 0.05);
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-item {
                margin: 2.5rem 0;
            }

            .hamburger {
                display: block;
                cursor: pointer;
            }

            .hamburger.active .bar:nth-child(2) {
                opacity: 0;
            }

            .hamburger.active .bar:nth-child(1) {
                -webkit-transform: translateY(8px) rotate(45deg);
                transform: translateY(8px) rotate(45deg);
            }

            .hamburger.active .bar:nth-child(3) {
                -webkit-transform: translateY(-8px) rotate(-45deg);
                transform: translateY(-8px) rotate(-45deg);
            }
        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #eaeaea; /* Ubah opasitas dan warna latar belakang sesuai kebutuhan */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Pastikan preloader muncul di atas konten lain */
        }

        #preloader img {
            width: 200px; /* Sesuaikan ukuran gambar preloader */
            height: auto;
        }
    </style>
    <!-- nav  -->
    <header class=" header ">
        <nav class="navbar">
            <a href="#" class="nav-logo"><img src="{{ asset('') }}assets_user/img/logo.png" class="w-28 "
                    alt=""></a>

            <ul class="nav-menu">
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li> --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">Hubungi Kami</a>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li> --}}

                <li data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                    class="nav-item bg-yellow-400 flex text-white items-center justify-center gap-2 py-1 px-3 rounded-md">
                    <i data-feather="shopping-cart" class="w-6"></i>
                    <a href="#" class="text-lg">
                        Beli Tiket
                    </a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <div id="preloader">
        <img src="{{ asset('') }}assets_user/preloader.svg"  alt="">
    </div>

    {{-- preloader  --}}


    @yield('content')



    
    <script>
      window.addEventListener('load', function() {
            // Menampilkan preloader selama 4 detik
            setTimeout(function() {
                document.getElementById('preloader').style.display = 'none'; // Menghilangkan preloader
            }, 3000); // Ubah angka 4000 menjadi 4000 milidetik (4 detik)
        });


        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");
        const navLink = document.querySelectorAll(".nav-link");

        hamburger.addEventListener("click", mobileMenu);
        navLink.forEach(n => n.addEventListener("click", closeMenu));

        function mobileMenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }

        function closeMenu() {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
        }
    </script>
</body>

</html>
