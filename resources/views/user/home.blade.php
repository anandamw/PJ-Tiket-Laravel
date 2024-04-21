@extends('user.layouts.app')

@section('content')

    <main id="home" data-aos="fade-down" class="container h-96 lg:h-[600px]  flex items-center lg:pt-11  justify-evenly flex-wrap-reverse gap-2 ">
        <img src="{{ asset('') }}assets_user/img/banner.jpg" class=" h-64 w-full lg:h-[500px]  rounded-xl" alt="">

        <div class="flex items-center justify-between w-full lg:pb-8">
            <div class="flex items-center gap-8">
                <img src=" {{ asset('') }}assets_user/img/admin.jpg" class=" rounded-full w-20 h-20 border border-black"
                    alt="">
                <div class="gap-0">
                    <h2 class="text-2xl font-bold ">Penyelenggara</h2>
                    <h3 class="italic">D’ATTA Production</h3>
                </div>
            </div>
            <h4 class="font-bold text-2xl">11 Mei 2024</h4>
        </div>


    </main>

    <div class="container h-32 mt-8 lg:h-48  flex items-start justify-center  ">
        <div class="flex gap-12 lg:gap-80">
            <div class="flex flex-col items-center text-2xl font-bold ">
                <span id="days" class=" text-4xl lg:text-8xl"></span>
                Days
            </div>
            <div class="flex flex-col items-center text-2xl font-bold">
                <span id="hours" class=" text-4xl lg:text-8xl"></span>
                Hours
            </div>
            <div class="flex flex-col items-center text-2xl font-bold">
                <span id="minutes" class=" text-4xl lg:text-8xl"></span>
                Minutes
            </div>
            <div class="flex flex-col items-center text-2xl font-bold">
                <span id="seconds" class=" text-4xl lg:text-8xl"></span>
                Seconds
            </div>
        </div>
    </div>


   


    <div class="container pt-5 pb-8" id="detailevent">

        <div id="accordion-color" data-accordion="collapse"
            data-active-classes="bg-purple dark:bg-gray-800 text-white dark:text-white">

            <h2 id="accordion-color-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 hover:text-white border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-purple dark:focus:ring-red-500 dark:border-gray-700 dark:text-white hover:bg-purple dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                    aria-controls="accordion-color-body-1">
                    <span class="">Detail Event</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <div class="flex gap-4 lg:gap-0 mb-2"><i data-feather="calendar" class="w-8 lg:w-32 "></i>
                        <div>
                            <div class="font-bold text-2xl">Tanngal</div>
                            <div class="text-xl">11 Mei 2024</div>
                        </div>
                    </div>
                    <div class="flex  gap-4 lg:gap-0 mb-2"><i data-feather="clock" class="w-8 lg:w-32"></i>
                        <div>
                            <div class="font-bold text-2xl">Waktu</div>
                            <div class="text-xl">19:00 - Selesai</div>
                        </div>
                    </div>
                    <div class="flex  gap-4 lg:gap-0 mb-2"><i data-feather="map-pin" class="w-8 lg:w-32"></i>
                        <div>
                            <div class="font-bold text-2xl">Lokasi</div>
                            <div class="text-xl">Area Parking Gedung Graha Adipoday - Sumenep</div>
                        </div>
                    </div>

                </div>
            </div>
            <h2 id="accordion-color-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-white hover:text-white border border-b-0 border-gray-200 focus:ring-4 focus:ring-purple dark:focus:ring-purple dark:border-gray-700 dark:text-white hover:bg-purple dark:hover:bg-purple gap-3"
                    data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                    aria-controls="accordion-color-body-2">
                    <span>Deskripsi</span>

                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400"><span class="ml-5">Hello word</span></p>
                </div>
            </div>

            <h2 id="accordion-color-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-purple dark:focus:ring-purple dark:border-gray-700 dark:text-gray-400 hover:bg-purple dark:hover:bg-purple hover:text-white gap-3"
                    data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                    aria-controls="accordion-color-body-3">
                    <span>Fasilitas</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>


            <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">
                        <ul class="ml-5">
                            <li class="list-disc">UMKM</li>
                            <li class="list-disc">Toilet</li>
                            <li class="list-disc">Area Parkir</li>
                            <li class="list-disc">Musholla</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('user.tiket')


    <div class="container mt-5">
        <footer class="bg-purple dark:bg-gray-900">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="#" class="flex items-center">
                            <img src="{{ asset('') }}assets_user/img/logo.png" class="h-14 me-3 w-32 "
                                alt="FlowBite Logo" />
                            {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Flowbite</span> --}}
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        {{-- <div>
                            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Resources</h2>
                           
                        </div> --}}
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Follow us</h2>
                            <ul class="text-white dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline ">Instagram</a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">TikTok</a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Facebook</a>
                                </li>
                                {{-- <li class="mb-4">
                                    <a href="#" class="hover:underline">Facebook</a>
                                </li> --}}
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Legal</h2>
                            <ul class="text-white dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2024 <a
                            href="#" class="hover:underline">D'ATTA PRODUCTION™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 sm:justify-center sm:mt-0">
                        <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd"
                                    d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                       
                        <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 17">
                                <path fill-rule="evenodd"
                                    d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Twitter page</span>
                        </a>
                        <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">GitHub account</span>
                        </a>
                        <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Dribbble account</span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

  
    @include('user.modal')





    <div id="bottom-banner" tabindex="-1"
        class="fixed bottom-0 start-0 z-50 flex justify-between w-full p-4 border-t border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
        <div class="flex items-center mx-auto">
            <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
                <span
                    class="inline-flex p-1 me-3 bg-gray-200 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center">
                    <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M18.435 7.546A2.32 2.32 0 0 1 17.7 5.77a3.354 3.354 0 0 0-3.47-3.47 2.322 2.322 0 0 1-1.776-.736 3.357 3.357 0 0 0-4.907 0 2.281 2.281 0 0 1-1.776.736 3.414 3.414 0 0 0-2.489.981 3.372 3.372 0 0 0-.982 2.49 2.319 2.319 0 0 1-.736 1.775 3.36 3.36 0 0 0 0 4.908A2.317 2.317 0 0 1 2.3 14.23a3.356 3.356 0 0 0 3.47 3.47 2.318 2.318 0 0 1 1.777.737 3.36 3.36 0 0 0 4.907 0 2.36 2.36 0 0 1 1.776-.737 3.356 3.356 0 0 0 3.469-3.47 2.319 2.319 0 0 1 .736-1.775 3.359 3.359 0 0 0 0-4.908ZM8.5 5.5a1 1 0 1 1 0 2 1 1 0 0 1 0-2Zm3 9.063a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm2.207-6.856-6 6a1 1 0 0 1-1.414-1.414l6-6a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Discount</span>
                </span>
                <span>Selamat datang di  <a href="#"
                        class="flex items-center ms-0 text-sm font-medium text-blue-600 md:ms-1 md:inline-flex dark:text-blue-500 hover:underline">D'ATTA PHORIA SUMENEP 2024<svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg></a></span>
            </p>
        </div>
        <div class="flex items-center">
            <button data-dismiss-target="#bottom-banner" type="button"
                class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close banner</span>
            </button>
        </div>
    </div>


    <script>
        feather.replace();
    </script>
    <script>
        function updateCountdown() {
            const targetDate = new Date("2024-05-11T00:00:00"); // Tentukan tanggal target di sini
            const now = new Date();
            const timeDifference = targetDate - now;

            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            document.getElementById("days").textContent = days;
            document.getElementById("hours").textContent = hours;
            document.getElementById("minutes").textContent = minutes;
            document.getElementById("seconds").textContent = seconds;
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
@endsection
