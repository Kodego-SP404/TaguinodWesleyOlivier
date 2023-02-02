<nav x-data="{open:false}" class="bg-gray-800 fixed w-full z-20 top-0 left-0 border-gray-200 px-2 sm:px-4 py-2.5 text-white">
   <div class="container flex flex-wrap justify-between items-center">
      <section class="flex items-center justify-center">
         <div class="ml-10">
            <span>
               <img src="{{asset('assets/png/logo-color.png')}}" alt="" class="h-20">
               </span>
         </div>
         <div class="ml-5">
            <a href="/">
               <span class="self-center text-xl font-semibold whitespace-nowrap">
                  STFU {{ $data['title'] }}
               </span>
            </a>
         </div>
      </section>
      <section class="flex">
         <button @click="open = !open" data-collapse-toggle="navbar-main" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z"/></svg>
         </button>
         <div x-show="open" class="w-full md:block md:w-auto" id="navbar-main">
            <x-items />
         </div>
         <div class="hidden w-full md:block md:w-auto" id="navbar-main">
            <x-items />
         </div>
      </section>     
   </div>
</nav>
<!--  -->

<nav x-data="{open:false}" class="fixed w-full flex flex-wrap items-center justify-between z-20 top-0 left-0 py-3 bg-gray-900 text-gray-200 shadow-lg navbar navbar-expand-lg navbar-light">

{{-- <nav x-data="{open:false}" class="bg-gray-800 fixed w-full z-20 top-0 left-0 border-gray-200 px-2 sm:px-4 py-2.5 text-white"> --}}
  <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">

    <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent1">
      <div class="ml-10">
         <span>
            <img src="{{asset('assets/png/logo-color.png')}}" alt="" class="h-20">
            </span>
      </div>
      <div class="ml-5">
         <a href="/">
            <span class="self-center text-xl font-semibold whitespace-nowrap">
               STFU {{ $data['title'] }}
            </span>
         </a>
      </div>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="flex items-center relative">
      <button @click="open = !open" data-collapse-toggle="navbar-main" class="md:hidden">
         <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z"/></svg>
      </button>
      <div x-show="open" class="w-full md:block md:w-auto" id="navbar-main">
         <x-items />
      </div>
      <div class="hidden w-full md:block md:w-auto" id="navbar-main">
         <x-items />
      </div>
    </div>
    <!-- Right elements -->
  </div>
</nav>
