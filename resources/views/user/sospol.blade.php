<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com"></script>


     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">
    <title>HimaTI UM</title>
    
</head>
<body class="overflow-x-hidden" id="background">
    <!-- Header start -->
    <header class="sticky top-0 z-50 transition duration-200 ease-in-out">
        
      <nav id="navbar" class="shadow-xl bg-gray-900 rounded p-2">
          <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto ">
            <a href="https://www.instagram.com/hima_teknikinformatika/" class="flex items-center">
                <img src="https://raw.githubusercontent.com/AdityaWilldan/asset-webHimaTi/main/logo-removebg-preview.png" class="h-10 mr-3 " alt="Will Dev" />
                <span class="self-center text-2xl font-sans whitespace-nowrap text-blue-500">Hima<span class="text-sky-400">TI</span></span>
            </a>
            <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
              <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-800 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                <li>
                  <a href="/" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-900 md:dark:bg-transparent" aria-current="page">Home</a>
                </li>
                <li>
                  <a href="{{url('/TeknoPost')}}" class="block py-2 pl-3 pr-5 text-gray-100 rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-blue-900 dark:hover:text-white md:dark:hover:bg-transparent">Tech</a>
                </li>
                <li>
                  <a href="{{url('/Quote')}}" class="block py-2 pl-3 pr-4 text-gray-100 rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-blue-900 dark:hover:text-white md:dark:hover:bg-transparent">Quote</a>
                </li>
                <li>
                  <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center block py-2 pl-3 pr-4 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-blue dark-mode:focus:bg-blue-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                      <span class="text-slate-200  text-gray-900 rounded hover:bg-blue-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-blue-900 dark:hover:text-white md:dark:hover:bg-transparent">Departemen</span>
                      <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                      <div class="px-2 py-2 bg-gray rounded-md shadow dark-mode:bg-gray-800">
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/kompub')}}">KOMPUB</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/litbang')}}">LITBANG</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/medfo')}}">MEDFO</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/psdm')}}">PSDM</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-blue-100 hover:bg-blue-400 text-blue-900 md:mt-0" href="{{url('/sospol')}}">SOSPOL</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        
          </header>
    <!-- Headaer end -->


                  <section class="pt-50 pb-32 relative ">
                    <div class="absolute w-full h-4/5 top-0 left-0 bg-cover bg-center bg-no-repeat opacity-40 bg-fixed bg-contain" style="background-image:url(https://i.pinimg.com/originals/67/ca/2e/67ca2ea86c93289437e5fd2fd928800c.jpg)"></div>
                    
                    <!-- <section class="bg-slate-950 pt-30"> -->
                      <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
                          <a href="#" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7" role="alert" data-aos="zoom-in">
                            <img width="200px" src="https://raw.githubusercontent.com/AdityaWilldan/asset-webHimaTi/main/LOGO%20SOSPOL.png" alt="" class="fade-in">
                          </a>
                          <h1 class="typing-animation-text mb-4 text-4xl font-extrabold tracking-tight leading-none text-slate-400 text-bold md:text-5xl lg:text-5xl dark:text-slate fade-in-right bg-gradient-to-r from-green-500 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent" data-aos="fade-right">SOSPOL<br></h1>
                          <p class="mb-8 text-lg font-bold text-gray-500 lg:text-xl sm:px-16 xl:px-48 text-sky-400 slide-in2" data-aos="fade-left">
                            Departemen Sosialpolitik
                            <br>
                        <span class="mb-8 text-lg text-center font-normal text-slate-100 poppins">Departemen Sosialpolitik (Sospol) berfokus pada isu-isu sosial dan politik yang relevan dengan mahasiswa Teknik Informatika. 
                            Kami mengadakan diskusi, acara sosial, dan kampanye untuk menciptakan kesadaran dan advokasi atas masalah-masalah tersebut.</span>
                        </p>
                          <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                              
                          </div>
                      </div>
                  <!-- </section> -->
                  </section>
                  <!-- <section class="h-[80px] bg-slate-950"></section> -->
                  
        <section id="portofolio" class=" pb-16 ">
          <div class="container">
              <div class="w-full px-4">
                  <div class="max-w xl mx-auto text-center mb-16">
                      <h2 class="font-bold text-slate-500 text-3xl mb-4 sm:text-4xl lg:text-5xl" data-aos="fade-up">Program Kerja Departemen Sospol</h2>
                      <p class="font-medium text-md text-sky-500 md:text-lg" data-aos="fade-up">Berikut Kegiatan Dan Proker Departemen Sosialpolitik.</p>
                  </div>
              </div>
  
              <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                  <div class="mb-12 p-4 md:w-1/2" data-aos="fade-up">
                      <div class="rounded-md shadow-mb overflow-hidden">
                          <img src="https://raw.githubusercontent.com/AdityaWilldan/asset-webHimaTi/main/opik.jpg" alt="Landing Page" width="w-full" />
                      </div>
                      <h3 class="font-semibold text-xl text-primary mt-5 mb-3">Opik(Obrolan Politik)</h3>
                      <p class="font-medium text-base text-slate-400">Opik adalah platform diskusi yang didedikasikan untuk menjembatani pemahaman dan perdebatan tentang beragam aspek politik yang memengaruhi kehidupan kita. Kami percaya bahwa berbagi informasi, gagasan, dan sudut pandang adalah kunci untuk memperkuat partisipasi demokratis dan meningkatkan kesadaran politik di kalangan mahasiswa.</p>
                  </div>
                  <div class="mb-12 p-4 md:w-1/2" data-aos="fade-up">
                      <div class="rounded-md shadow-mb overflow-hidden">
                          <img src="https://raw.githubusercontent.com/AdityaWilldan/asset-webHimaTi/main/opik2.jpg" alt="Landing Page" width="w-full" />
                      </div>
                      <h3 class="font-semibold text-xl text-primary mt-5 mb-3">Opik(Obrolan Politik)</h3>
                      <p class="font-medium text-base text-slate-400">Melalui sesi-sesi obrolan santai, debat terstruktur, dan forum interaktif, kami menciptakan lingkungan yang ramah dan inklusif di mana setiap orang dapat berbagi pendapat, ide, dan pengalaman mereka tentang isu-isu politik terkini. Kami mengundang pembicara ahli, aktivis, dan praktisi politik untuk berbagi pengetahuan mereka tentang berbagai topik politik, memperluas pemahaman peserta, dan memberi inspirasi untuk terlibat dalam proses politik.</p>
                  </div>
                  <div class="mb-12 p-4 md:w-1/2" data-aos="fade-up">
                      <div class="rounded-md shadow-mb overflow-hidden">
                          <img src="https://i.pinimg.com/originals/35/a1/03/35a1038dd9517a7230fa93305439c23d.jpg" alt="Landing Page" width="w-full" />
                      </div>
                      <h3 class="font-semibold text-xl text-primary mt-5 mb-3">Buka Bersama</h3>
                      <p class="font-medium text-base text-slate-400">Berkumpul Dan Berbuka Bersama pada Bulan Ramadhan Dengan Tujuan Menjaga Kekompakkan ,Berbagi Cerita dan Berbagi Pengalaman Antar Anggota HimaTI.</p>
                  </div>
                  <div class="mb-12 p-4 md:w-1/2" data-aos="fade-up">
                      <div class="rounded-md shadow-mb overflow-hidden">
                          <img src="https://i.pinimg.com/originals/9d/17/e6/9d17e6700db60b6fa1ba1f372480d19b.jpg" alt="Landing Page" width="w-full" />
                      </div>
                      <h3 class="font-semibold text-xl text-primary mt-5 mb-3">Buka Bersama</h3>
                      <p class="font-medium text-base text-slate-400">Menjaga Dan Menjalin Tali silaturahmi Antar  Anggota Himpunan Teknik Informatika.</p>
                  </div>
              </div>
          </div>
      </section> 


      <div class="container my-24 mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class="mb-32 text-center">
          <h2 class="mb-12 text-3xl font-bold text-slate-400" data-aos="fade-up">
            Kepengurusan <u class="text-primary dark:text-primary-400">Sospol</u>
          </h2>
      
          <div class="lg:gap-xl-12 grid gap-x-6 md:grid-cols-2 lg:grid-cols-4" data-aos="zoom-in">
            <div class="mb-12 lg:mb-0">
              <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]" src="{{asset('https://raw.githubusercontent.com/AdityaWilldan/asset-webHimaTi/main/profile.png')}}" alt="avatar" />
              <h5 class="mb-4 text-2xl font-bold text-slate-400">Nama</h5>
              <p class="mb-6 text-primary text-lg">Wakil</p>

            </div>
            <div class="mb-12 lg:mb-0">
              <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]" src="{{asset('https://raw.githubusercontent.com/AdityaWilldan/asset-webHimaTi/main/reyanRv.jpg')}}" alt="avatar" />
              <h5 class="mb-4 text-2xl font-bold text-slate-400">Reyan Andika</h5>
              <p class="mb-6 text-primary text-lg">Ketua Departemen</p>

            </div>
            <div class="mb-12 md:mb-0">
              <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]" src="{{asset('https://raw.githubusercontent.com/AdityaWilldan/asset-webHimaTi/main/profile.png')}}" alt="avatar" />
              <h5 class="mb-4 text-2xl font-bold text-slate-400">Nama</h5>
              <p class="mb-6 text-primary text-lg">Sekertaris</p>

            </div>
            <div class="mb-12 md:mb-0">
              <img class="mx-auto mb-6 rounded-lg shadow-lg dark:shadow-black/20 w-[150px]" src="{{asset('https://raw.githubusercontent.com/AdityaWilldan/asset-webHimaTi/main/profile.png')}}" alt="avatar" />
              <h5 class="mb-4 text-2xl font-bold text-slate-400">Nama</h5>
              <p class="mb-6 text-primary text-lg">Bendahara</p>

            </div>
          </div>
        </section>
        <!-- Section: Design Block -->
      </div>

      <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1e3a8a" fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,74.7C384,85,480,139,576,165.3C672,192,768,192,864,181.3C960,171,1056,149,1152,128C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </div>
      
      <!-- footer -->
      <footer class="bg-blue-900 pt-24 pb-12">
          <div class="container">
      
            <div class="flex flex-wrap">
              <div class="mb-6 md:mb-0">
                <img width="100px" src="https://raw.githubusercontent.com/AdityaWilldan/asset-webHimaTi/main/logo-removebg-preview.png" alt="">
              </div>
              <div class="w-full px-4 mb-10 text-slate-300 font-medium md:w-1/3">
                  <h2 class="font-bold text-2xl text-white mb-5">Himpunan Teknik Informatika</h2>
                  <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
                  <p>HimaTIUM@gmail.com</p>
                  <p class="pb-4">Jl. Marsinu No.5, Dangdeur, Tegalkalapa, Kabupaten Subang, Jawa Barat 4121</p>
      
                  <div class="flex items-center p-3 w-72 h-28 bg-blue-950 rounded-md shadow-lg">
                    <section class="flex justify-center items-center w-14 h-14 rounded-full shadow-md bg-gradient-to-r from-[#F9C97C] to-[#A2E9C1] hover:from-[#C9A9E9] hover:to-[#7EE7FC] hover:cursor-pointer hover:scale-110 duration-300">
                      <svg viewBox="0 0 15 15" class="w-7 fill-gray-700">
                        <path d="M7.5 0.875C5.49797 0.875 3.875 2.49797 3.875 4.5C3.875 6.15288 4.98124 7.54738 6.49373 7.98351C5.2997 8.12901 4.27557 8.55134 3.50407 9.31167C2.52216 10.2794 2.02502 11.72 2.02502 13.5999C2.02502 13.8623 2.23769 14.0749 2.50002 14.0749C2.76236 14.0749 2.97502 13.8623 2.97502 13.5999C2.97502 11.8799 3.42786 10.7206 4.17091 9.9883C4.91536 9.25463 6.02674 8.87499 7.49995 8.87499C8.97317 8.87499 10.0846 9.25463 10.8291 9.98831C11.5721 10.7206 12.025 11.8799 12.025 13.5999C12.025 13.8623 12.2376 14.0749 12.5 14.0749C12.7623 14.075 12.975 13.8623 12.975 13.6C12.975 11.72 12.4778 10.2794 11.4959 9.31166C10.7244 8.55135 9.70025 8.12903 8.50625 7.98352C10.0187 7.5474 11.125 6.15289 11.125 4.5C11.125 2.49797 9.50203 0.875 7.5 0.875ZM4.825 4.5C4.825 3.02264 6.02264 1.825 7.5 1.825C8.97736 1.825 10.175 3.02264 10.175 4.5C10.175 5.97736 8.97736 7.175 7.5 7.175C6.02264 7.175 4.825 5.97736 4.825 4.5Z">
                        </path>
                      </svg>
                    </section>
                  
                    <section class="block border-l border-gray-300 m-3">
                      <div class="pl-3">
                        <h3 class="text-slate-100 font-semibold text-sm">Wildan Aditia</h3>
                        <h3 class="bg-clip-text text-transparent bg-gradient-to-r from-green-500 via-blue-600 to-purple-600 text-lg font-bold">Web
                          Developer</h3>
                      </div>
                      <div class="flex gap-3 pt-2 pl-3">
                        <svg stroke="currentColor" viewBox="0 0 24 24" class="w-4 hover:scale-125 duration-200 hover:cursor-pointer fill-white stroke-2">
                          <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                          </path>
                        </svg>
                        <svg stroke="currentColor" viewBox="0 0 24 24" class="w-4 hover:scale-125 duration-200 hover:cursor-pointer fill-white stroke-2">
                          <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z">
                          </path>
                          <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                        </svg>
                        <svg stroke="currentColor" viewBox="0 0 24 24" class="w-4 hover:scale-125 duration-200 hover:cursor-pointer fill-white stroke-2">
                          <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                          </path>
                        </svg>
                        <svg stroke="currentColor" viewBox="0 0 24 24" class="w-4 hover:scale-125 duration-200 hover:cursor-pointer fill-white stroke-2">
                          <path d="M21 2H3v16h5v4l4-4h5l4-4V2zm-10 9V7m5 4V7"></path>
                        </svg>
                      </div>
                    </section>
                  </div>
              </div>
              <div class="w-full px-4 mb-10 md:w-1/3 mx-auto">
                  <h3 class="font-semibold text-2xl text-white mb-5">Hima TI Social Media</h3>

                  <ul role="list" class="space-y-8">
      
                    <li class="text-white">
                        <a href="#" class="flex items-center space-x-3 hover:text-sky-400 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                            </svg>
                            <span>Twitter</span>
                        </a>
                    </li>
                    <li class="text-white">
                        <a href="#" class="flex items-center space-x-3 hover:text-sky-400 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
      <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                            </svg>
                            <span>YouTube</span>
                        </a>
                    </li>
      
                    <li class="text-white">
                        <a href="#" class="flex items-center space-x-3 hover:text-sky-400 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                            <span>Facebook</span>
                        </a>
                    </li>
                    <li class="text-white">
                        <a href="#" class="flex items-center space-x-3 hover:text-sky-400 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                            <span>Instagram</span>
                        </a>
                    </li>
                    
                </ul>
              </div>
          </div>
      
      
          </div>
      </footer>
      
      <a href="#" id="backToTopBtn"
      class="fixed bottom-3 right-3 z-[9999] flex h-15 w-15 items-center justify-center  rounded-full p-4 mt-2 hover:animate-pulse">
      <button class="button">
        <svg class="svgIcon" viewBox="0 0 384 512">
          <path
            d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
          ></path>
        </svg>
      </button>
      </a>
      
      <script>
        document.addEventListener("DOMContentLoaded", function () {
var prevScrollPos = window.pageYOffset;
var navbar = document.querySelector(".sticky");

window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;

  if (prevScrollPos > currentScrollPos) {
    // Scroll ke atas, munculkan navbar
    navbar.style.transform = "translateY(0)";
  } else {
    // Scroll ke bawah, sembunyikan navbar
    navbar.style.transform = `translateY(-${navbar.offsetHeight}px)`;
  }

  prevScrollPos = currentScrollPos;
};
});

document.addEventListener("DOMContentLoaded", function () {
var backToTopButton = document.getElementById("backToTopBtn");
var isScrollingDown = false;

window.addEventListener("scroll", function () {
  var scrollPosition = window.scrollY || document.documentElement.scrollTop;

  if (scrollPosition > 20 && !isScrollingDown) {
    backToTopButton.style.opacity = "1";
    backToTopButton.style.fontSize = "14px"; // Adjust the font size as needed
    isScrollingDown = true;
  } else if (scrollPosition <= 20 && isScrollingDown) {
    backToTopButton.style.opacity = "0";
    backToTopButton.style.fontSize = "0px";
    isScrollingDown = false;
  }
});

backToTopButton.addEventListener("click", function () {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});
});
      </script>
   @extends('layouts.js')
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
      AOS.init();
      </script>
      </body>
      </html>