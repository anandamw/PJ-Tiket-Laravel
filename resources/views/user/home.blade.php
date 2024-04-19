@extends('user.layouts.app')

@section('content')
    <main class="container h-96 lg:h-[600px]  flex items-center lg:pt-11  justify-evenly flex-wrap-reverse gap-2 ">
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


    <div class="container flex h-10 ">
        <div data-modal-target="crud-modal" data-modal-toggle="crud-modal"
            class="flex items-center hover:bg-yellow-500 transition-all ease-in bg-yellow-400 gap-2 py-1 px-3 rounded-md pr-7">
            <i data-feather="shopping-cart" class="w-7 text-white"></i><span class="text-white text-xl">Beli Tiket</span>
        </div>
    </div>

    <div class="container mt-5 pb-8">

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
                            <div class="text-xl">Jl Adi Poday - Sumenep</div>
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
                    <span>What are the differences between Flowbite and Tailwind UI?</span>
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
                        1. Entry Pass yang valid adalah yang dibeli melalui artatix.co.id

                        2. Satu Entry Pass berlaku untuk satu orang.

                        3. Panitia dan Promotor tidak bertanggung jawab/ tidak ada penggantian kerugian atas pembelian tiket
                        acara melalui calo/tempat/kanal/platform/ yang bukan mitra resmi penjualan tiket "Lepas Penat Vol.
                        3”.

                        4. Tiket yang hilang/dicuri tidak akan diganti atau diterbitkan ulang. Meskipun anda memiliki bukti
                        pembelian. Tiket kalian merupakan tanggung jawab kalian.

                        5. Panitia acara, Promotor, dan Pengisi Acara tidak bertanggung jawab atas biaya transportasi atau
                        akomodasi yang telah dikeluarkan penonton untuk mengunjungi acara jika seandainya acara harus
                        dibatalkan atau dipindahkan ke hari dan/atau waktu lain.

                        6. Dalam keadaan keadaan kahar seperti bencana alam, kerusuhan, perang, wabah, dan semua keadaan
                        darurat yang diumumkan secara resmi oleh Pemerintah. Panitia/penyelenggara/promotor berhak untuk
                        membatalkan dan/atau merubah waktu acara dan tata letak tempat tanpa pemberitahuan sebelumnya.

                        7. Panitia/Penyelenggara/Promotor berhak untuk, merevisi waktu acara, tata letak tempat dan
                        kapasitas penonton tanpa pemberitahuan sebelumnya.

                        8. Jika acara dibatalkan, Promotor harus mengembalikan uang pembelian tiket yang sudah dibeli dengan
                        jangka waktu yang akan diinfokan lebih lanjut oleh Promotor, tetapi akan dipotong biaya bank, biaya
                        lain-lain dan pembayaran lain yang mungkin dikenakan untuk mentransfer uang kembali ke pelanggan.

                        9. Panitia acara/penanggung jawab tempat acara, promotor, dan pengisi acara tidak bertanggung jawab
                        atas hilangnya barang-barang pribadi para penonton atau kejadian-kejadian yang mengakibatkan cedera
                        di semua area acara selama acara berlangsung, apapun alasannya.

                        10. Harap membawa kartu ID asli dan e-Ticket dari artatix.co.id saat melakukan penukaran tiket.

                        11. Promotor berhak untuk:

                        Melarang penonton masuk jika Entry Pass telah digunakan oleh orang lain.
                        Memproses atau mengajukan hukuman, baik perdata maupun pidana, terhadap pengunjung yang mendapatkan
                        Entry Pass secara tidak sah, termasuk ditemukannya memalsukan dan menggandakan Entry Pass yang sah
                        atau memperoleh Entry Pass dengan cara yang tidak sesuai dengan prosedur.
                        12. Penyelenggara mengambil tindakan tegas, dan berhak mengeluarkan pengunjung dari area Festival
                        jika tidak mematuhi protokol kesehatan yang telah diterapkan.

                        13. Barang yang boleh dibawa kedalam venue:

                        Membawa kartu identitas dan uang pribadi
                        Membawa bukti tiket/tanda masuk
                        Membawa masker dan hand sanitizer
                        Membawa obat-obatan pribadi
                        Membawa jas hujan
                        Membawa handphone / perangkat lainnya
                        14. Barang yang tidak diperbolehkan dibawa kedalam venue:

                        Minuman beralkohol, obat-obatan terlarang, psikotropika, atau barang yang mengandung zat berbahaya
                        lainnya.
                        Senjata tajam/api, bahan peledak, dan benda-benda yang dilarang menurut ketentuan peraturan
                        perundang-undangan yang berlaku ke dalam venue.
                        Cairan dan benda yang mudah terbakar.
                        Barang yang berbahaya untuk orang lain maupun diri sendiri walaupun tidak disebutkan pada peraturan
                        diatas.
                        15. Pihak promotor/ penyelenggara acara berhak mengambil, menyita dan tidak mengembalikan kepada
                        penonton jika ditemukannya barang terlarang saat pengecekan barang.

                        16. Dilarang membuat kerusuhan dalam situasi apapun di dalam area Festival.

                        17. Dilarang membawa anak dibawah umur 6 tahun.
                    </p>

                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                    <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                        <li><a href="https://flowbite.com/pro/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                        <li><a href="https://tailwindui.com/" rel="nofollow"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container ">
        <footer class="bg-purple dark:bg-gray-900">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="https://flowbite.com/" class="flex items-center">
                            <img src="{{ asset('') }}assets_user/img/logo.png" class="h-14 me-3 w-32 "
                                alt="FlowBite Logo" />
                            {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Flowbite</span> --}}
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Resources</h2>
                            <ul class="text-white dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                                </li>
                                <li>
                                    <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Follow us</h2>
                            <ul class="text-white dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                                </li>
                                <li>
                                    <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                                </li>
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
                    <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a
                            href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
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
                                fill="currentColor" viewBox="0 0 21 16">
                                <path
                                    d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                            </svg>
                            <span class="sr-only">Discord community</span>
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

    {{-- modal  --}}




    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Form Beli Tiket
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name <span class="text-red-500"> * </span></label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type product name" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Tiket <span class="text-red-500"> * </span></label>
                            <input type="number" name="address" id="address"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="$2999" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="whatsapp_number"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Whatsapp <span class="text-red-500"> * </span> </label>
                            <input type="number" name="whatsapp_number" id="whatsapp_number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="$2999" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori Tiket <span class="text-red-500"> * </span></label>
                            <select id="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Select category</option>
                                <option value="VIP">VIP <span class="text-blue-500">Rp, 100.000</span></option>
                                <option value="REGULAR">REGULAR <span class="">Rp, 50.000</span></option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                Description <span class="text-red-500"> * </span></label>
                            <textarea id="description" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write product description here"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>


    {{-- modal  --}}






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
                <span>Get 5% commission per sale <a href="https://flowbite.com"
                        class="flex items-center ms-0 text-sm font-medium text-blue-600 md:ms-1 md:inline-flex dark:text-blue-500 hover:underline">Become
                        a partner <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true"
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
