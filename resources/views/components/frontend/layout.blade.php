<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime IT</title>
    <!-- app ccc -->
    <link rel="stylesheet" href="css/app.css">
    <!-- flowbite css -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    /><link href="https://cdn.jsdelivr.net/
    npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- navbar font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Poppins:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    </style>

</head>
<body class="relative">

<div class=" home_bg bg-cover">
     <!-- navbar starts -->
<header class="container mx-auto ">
  <nav class="border-gray-200 py-2.5 rounded lg:mx-24 sm:mx-2 mb:-mx-4 header ">
    <div class=" flex flex-wrap justify-between items-center ">
      <a href="#" class="flex items-center">
          <img src="/assets/images/prime_logo.svg" class="mr-3 " alt="Flowbite Logo">
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 mt-4 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 ">
          <li class="poppins">
            <a href="{{ URL('/') }}" class="block py-8 pr-4 text-base lg:mx-2 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 ">Home</a>
          </li>
          <li class="poppins">
            <a href="{{ URL('/aboutus') }}" class="block py-8 pr-4 text-base lg:mx-2 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 ">About Us</a>
          </li>
          <li class="poppins">
            <a href="{{ URL('/events') }}" class="block py-8 pr-4 text-base lg:mx-2 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 ">Events</a>
          </li>
          <li class="poppins">
            <a href="{{ URL('/blogs') }}" class="block py-8 pr-4 text-base lg:mx-2 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 ">Blog</a>
          </li>
          <li class="poppins">
            <a href="{{ URL('/members') }}" class="block py-8 pr-4 text-base lg:mx-2 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 ">Members</a>
          </li>
          <li class="poppins">
            <a href="{{ URL('/gallery') }}" class="block py-8 pr-4 text-base lg:mx-2 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 ">Gallery</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>
  <!-- navbar ends -->



<!-- landing page -->

<section class="relative ">

<div class="w-full">
    <!--Waves Container-->
<div class="lg:pt-80 mb:pt-48 ">
 <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
 viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
 <defs>
 <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
 </defs>
 <g class="parallax">
 <use xlink:href="#gentle-wave" x="48" y="1" fill="#0087EF" />
 <use xlink:href="#gentle-wave" x="48" y="5" fill="#EFF2FA" />
 </g>
 </svg>
</div>
 <!--Waves end-->


<div class="w-full container mx-auto">
      <div class="lg:mx-24 sm:mx-12">
      <div class="absolute lg:top-24  mb:top-8">
        <div class="home_content">
            <span class="text-white mb:text-lg lg:text-5xl home_text ">PRIME</span>
            <h1 class="text-white lg:text-9xl sm:text-7xl mb:text-5xl  font-bold title">IT CLUB</h1>
        </div>
       </div>
    </div>

</div>

</div>
</section>


</div>

<body>
    {{$slot}}
    @stack('scripts')
</body>

</html>
