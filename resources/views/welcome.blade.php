@extends('layouts.main')
@section('content')

<!--Hidupkan jika ingin menggunakan animasi-->
<!--<section class="h-screen md:block hidden">
<div class="spline-scene" data-w-id="654dc831-7cc0-2bdd-4112-ddd237ff0e80" data-animation-type="spline" data-spline-url="https://prod.spline.design/jk4NfIizweL6206L/scene.splinecode"><canvas></canvas></div><script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=664b48535fd26879e79b6187" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><script src="https://assets-global.website-files.com/664b48535fd26879e79b6187/js/webflow.0d791cbe9.js" type="text/javascript"></script>
</section>-->

<!------------------------------------------------->

<!--matikan jika ingin menggunakan animasi spline-->
<section class="h-96  md:h-screen bg-transparent md:bg-contain bg-center bg-no-repeat" style="background-image: url('./Asset/peakpx.jpg');">
   <div class="flex justify-center items-center h-full align-middle ">
        <img class="max-w-56 md:max-w-sm" src="./Asset/KVC_gradient.png" alt="">
    </div>
</section>

<!------------------------------------------------->

<section class=" bg-gray-900 py-20 flex items-center px-5 lg:px-20 rounded-lg transition-all hover:scale-110" id="about">
    <div class="flex flex-col gap-10">
        <div class="flex flex-col gap-5">
            <h2 class="tracking-widest text-xl font-poppins text-red-600">About Us</h2>
            <h1 class="font-bold font-poppins text-3xl md:text-6xl text-white">Our Reputation <br>speaks for itself</h1>
        </div>
        <div class="max-w-xl">
            <p>
                Selamat datang di KVC Autoshop, pusat layanan otomotif terpercaya di Batam. Berdiri sejak tahun 2020, KVC Autoshop hadir dengan misi untuk memberikan solusi otomotif berkualitas tinggi kepada para pelanggan kami. Dengan tim mekanik profesional dan fasilitas modern, kami berkomitmen untuk menjaga kendaraan Anda dalam kondisi prima.
            </p>
        </div>
    </div>
    <div class="absolute right-0">
        <img class="object-cover r34 md:flex hidden" src="./Asset/r34.jpg" alt="">
    </div>
</section>

<section class="flex flex-col gap-5 justify-center align-middle items-center py-10 px-10 md:px-0 h-auto" id="services">
    <h1 class="text-center text-2xl md:text-4xl font-extrabold dark:text-white font-oswald max-w-3xl py-10 md:py-10 p-0 md:p-10">
        Choose the type of service that makes it easier
        to maintain your favorite car
    </h1>
    <div class="max-w-screen-xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 justify-center">
        <div class="flex justify-center h-full">
            <div class="h-full flex flex-col max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-all duration-300 hover:scale-110">
                <a href="#body" class="rounded-t-lg">
                    <img class="rounded-t-lg object-cover h-48 w-full" src="./Asset/body-repair-mobil-bandung.jpg"
                        alt="" />
                </a>
                <div class="flex flex-col justify-between p-5">
                    <div>
                        <a href="#body-repair">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Body Repair
                                & Paint</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Perbaiki dan cat ulang mobil Anda agar kembali seperti baru. Hasil dijamin rapi.</p>
                    </div>
                    <div class="md:mt-20">
                        <a href="#body-repair"
                            class=" inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-all duration-300 hover:scale-110">
            <a href="#oil">
                <img class="rounded-t-lg object-cover h-48 w-full" src="./Asset/oil1.jpg" alt="" />
            </a>
            <div class="p-5 ">
                <a href="#oil">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Oil Changes
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ganti oli mobil Anda dengan cepat untuk menjaga mesin tetap awet..</p>
                <div class="md:mt-24">
                <a href="#oil"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                </div>
            </div>
        </div>
        <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-all duration-300 hover:scale-110">
            <a href="#battery">
                <img class="rounded-t-lg object-cover h-48 w-full" src="./Asset/battery.jpg" alt="" />
            </a>
            <div class="p-5 ">
                <a href="#battery">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Battery & Electrical Services
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ganti baterai dan periksa masalah listrik mobil Anda agar tetap berfungsi dengan baik.</p>
                <div class="md:mt-24">
                <a href="#battery"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="font-Poppins px-10 md:px-16">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16" id="body">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full ">
                <img alt="" src="./Asset/painting2.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-300 hover:scale-110" />
            </div>

            <div class="lg:py-24" id="digital-printing">
                <h2 class="text-3xl font-bold sm:text-4xl text-red-700">Body Repair & Paint</h2>

                <p class="mt-4 text-gray-">
                Apakah mobil Anda mengalami kerusakan karena kecelakaan atau cuaca buruk? Kami di KVC Autoshop siap membantu memperbaiki masalah bodi mobil Anda. Dengan tim kami yang ahli dan peralatan modern, kami bisa mengatasi segala masalah mulai dari goresan kecil hingga kerusakan besar. Tujuan kami adalah membuat mobil Anda kembali bagus dan aman untuk dikendarai.


                </p>
                
                <div class="divider"></div>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16" id="oil">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:h-full ">
                <img alt="" src="./Asset/oil2.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-300 hover:scale-110" />
            </div>

            <div class="lg:py-24" id="offset-printing">
                <h2 class="text-3xl font-bold sm:text-4xl text-red-700">Oil Changes</h2>

                <p class="mt-4 text-gray-">
                Agar mesin mobil Anda tetap sehat, penting untuk rutin mengganti oli. Di KVC AUTOSHOP, kami menyediakan layanan cepat, handal, dan terjangkau untuk mengganti oli mobil Anda. Tim kami terlatih untuk menangani berbagai jenis mobil, jadi Anda bisa yakin bahwa mobil Anda akan dirawat dengan baik. Dengan menggunakan oli berkualitas dan proses penggantian yang hati-hati, kami akan membantu memperpanjang umur mesin mobil Anda.
                </p>
                <div class="divider"></div>
            
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16" id="battery">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full ">
                <img alt="" src="./Asset/battery.jpg"
                    class="absolute inset-0 h-full w-full object-cover transition-all duration-300 hover:scale-110" />
            </div>

            <div class="lg:py-24" id="channel-letter">
                <h2 class="text-3xl font-bold sm:text-4xl text-red-700">Battery & Electrical Services</h2>

                <p class="mt-4 text-gray-">
                Jika mobil Anda mengalami masalah listrik, itu bisa menyebabkan masalah saat berkendara. Di KVC AUTOSHOP, kami siap membantu memperbaiki dan merawat sistem listrik dan baterai mobil Anda. Tim kami ahli dalam mengatasi masalah listrik, mulai dari mengganti baterai hingga memperbaiki kabel dan komponen listrik lainnya. Dengan menggunakan peralatan modern, kami akan dengan cepat menemukan masalah dan memberikan solusi yang tepat agar Anda bisa kembali berkendara dengan aman.
                </p>
                <div class="divider"></div>
                

            </div>
        </div>
    </div>
</section>
</section>
@endsection