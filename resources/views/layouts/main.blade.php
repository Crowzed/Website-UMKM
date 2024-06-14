<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
  <script src="{{ mix('js/app.js') }}" defer></script>
  <wireui:scripts />
  <script src="//unpkg.com/alpinejs" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
<style>
section {
    position: relative;
    overflow: hidden;
}



</style>
</head>

<body class="px-5 md:px-20 bg-black overflow-x-hidden ">
  @if (Auth::check())
  <div class="navbar">
    <div class="navbar-start ">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost visible lg:invisible">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
      </svg>
      </div>
      <ul tabindex="0" class=" bg-gray-600 menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow rounded-box w-52 font-oswald">
      <li class="hover:text-red-600"><a href="/">Home</a></li>
      <li class="hover:text-red-600"><a class="transition-all duration-300" href="#about">About Us</a></li>
      <li class="hover:text-red-600"><a href="#services">Services</a></li>
      <li class="hover:text-red-600"><a href="/product">Product</a></li>
      <li class="hover:text-red-600"><a href="/contact">Contact Us</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost"><img class="h-10 w-auto" src="{{ asset('Asset/KVC_gradient.png') }}"
      alt="description of myimage"></a>
    </div>
    <div class="navbar-center hidden lg:flex ">
    <ul class="menu menu-horizontal px-1 text-white tracking-wide gap-10 font-oswald font-light">
      <li class="hover:text-red-600"><a href="/">Home</a></li>
      <li class="hover:text-red-600"><a class="transition-all duration-300" href="#about">About Us</a></li>
      <li class="hover:text-red-600"><a href="#services">Services</a></li>
      <li class="hover:text-red-600"><a href="/product">Product</a></li>
      <li class="hover:text-red-600"><a href="/contact">Contact Us</a></li>
    </ul>
    </div>
    <div class="navbar-end">
    <div class="dropdown">
      <button tabindex="0" role="button" class="btn btn-ghost">
      Profile
      </button>
      <ul tabindex="0" class="bg-gray-600 menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow rounded-box w-40">
      <li><a href="/profile">Profile</a></li>
      <li><a href="/logout">Log Out</a></li>
      </ul>
    </div>
    </div>
  </div>
  @else
    <div class="navbar text-gray-300 font-oswald">
      <div class="navbar-start ">
        <div class="dropdown">
          <div tabindex="0" role="button" class="btn btn-ghost visible lg:invisible">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
          </div>
          <ul tabindex="0" class=" bg-gray-600 menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow rounded-box w-52">
            <li class="hover:text-red-600"><a href="/">Home</a></li>
            <li class="hover:text-red-600"><a class="transition-all duration-300" href="#about">About Us</a></li>
            <li class="hover:text-red-600"><a href="#services">Services</a></li>
            <li class="hover:text-red-600"><a href="/product">Product</a></li>
            <li class="hover:text-red-600"><a href="/contact">Contact Us</a></li>
          </ul>
        </div>
        <a class="btn btn-ghost"><img class="h-10 w-auto" src="{{ asset('Asset/KVC_gradient.png') }}"
            alt="description of myimage"></a>
      </div>
      <div class="navbar-center hidden lg:flex ">
        <ul class="menu menu-horizontal px-1 gap-5">
          <li class="hover:text-red-600"><a href="/">Home</a></li>
          <li class="hover:text-red-600"><a class="transition-all duration-300" href="#about">About Us</a></li>
          <li class="hover:text-red-600"><a href="#services">Services</a></li>
          <li class="hover:text-red-600"><a href="/product">Product</a></li>
          <li class="hover:text-red-600"><a href="/contact">Contact Us</a></li>
        </ul>
      </div>
      <div class="navbar-end">
        <a href="/login" class="btn">Login</a>
      </div>
    </div>
  @endif
  @yield('content')
  <footer class="w-full flex flex-col md:flex-row py-10 px-5 md:px-16 gap-10 md:justify-normal justify-center">
    <div class="py-5 md:py-20 flex justify-center md:flex-none md:justify-normal">
      <img class="h-20 md:h-40" src="./Asset/KVC_gradient.png" alt="">
    </div>
    <div class="divider lg:divider-horizontal divider-error py-10 px-10"></div>
    <div class="flex flex-col items-center py-0 md:py-28 gap-5">
      <div class="flex gap-10">
      <div>
        <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-instagram"
        viewBox="0 0 16 16">
        <path
          d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
      </svg>
      </a>
      </div>
      <div>
        <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-facebook"
        viewBox="0 0 16 16">
        <path
          d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
      </svg>
      </a>
      </div>
      <div>
        <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-whatsapp"
        viewBox="0 0 16 16">
        <path
          d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
      </svg>
      </a>
      </div>
      </div>
      <div>
        <p>&copy; 2024 KVC. All Right Reserved</p>
      </div>
    </div>
    <div class="flex flex-col gap-7 px-0 md:px-40 py-16">
      <div class="flex gap-5">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-envelope"
        viewBox="0 0 16 16">
        <path
          d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
      </svg>
      <p class="text-white text-xl font-poppins">kvcautoshop@gmail.com</p>
      </div>
      <div class="flex gap-5">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-whatsapp"
        viewBox="0 0 16 16">
        <path
          d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
      </svg>
      <p class="text-white text-xl font-poppins">+62778427980</p>
      </div>
      <div class="flex gap-5">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-telephone"
        viewBox="0 0 16 16">
        <path
          d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
      </svg>
      <p class="text-white text-xl font-poppins">(0778) 427980</p>
      </div>
    </div>
    <div class="md:w-screen flex justify-center py-10">
      <div class="max-w-xl"><iframe width="300" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&amp;height=200&amp;hl=en&amp;q=+(KVC%20Autoshop)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps vehicle tracker</a></iframe></div>
    </div>
  </footer>
  <script>

  </script>
  </body>
  </html>