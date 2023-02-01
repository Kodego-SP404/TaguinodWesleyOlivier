{{-- @include('partials.header', [$title]) --}}
{{-- @include('partials.header') --}}
@include('partials.header')
<?php $array = array('title' => 'Student System') ;?>
<x-nav :data="$array"/>

<section class="h-screen pt-10"> 
   <div class="bg-white max-w-3xl mx-auto my-10 p-5 rounded-lg shadow-2xl">  
      <div class="pb-5 mx-auto">
         <a href="#">
            <h1 class="text-4xl font-bold text-white text-center text-gray-800"> Add New Student</h1>
         </a>
      </div>   
      <div class="px-6 h-1/2 text-gray-800 bg-white mx-auto">
         <div class="flex xl:justify-center justify-center items-center h-full g-0 flex-wrap lg:flex-nowrap">
            <div class="pb-5 grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0 w-80">
               <img
                  src="{{asset('assets/png/logo-no-background.png')}}"
                  class="md:max-w-full xl:max-w-md xl:pr-4 sm:mb--4 sm:max-w-full"
                  alt="STFU Logo"
                  style="background-size: cover;"
               />
            </div>
            <div class="xl:ml-20 xl:w-8/12 lg:w-8/12 md:w-8/12 mb-12 md:mb-0">
               <form action="/add/student" method="POST" class="flex flex-col w-80 p-2">
                  @csrf
                  
                  <div class="mb-6 pt-3 rounded bg-gray-200">
                     <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3 w-full">First name</label>
                     <input type="text" name="first_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{old('first_name')}}>
                     @error('first_name')
                     <p class="text-red-500 text-xs mt-2">
                           {{$message}}
                     </p>
                     @enderror
                  </div>
                  <div class="mb-6 pt-3 rounded bg-gray-200">
                     <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Last name</label>
                     <input type="text" name="last_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{old('last_name')}}>
                     @error('last_name')
                     <p class="text-red-500 text-xs mt-2">
                           {{$message}}
                     </p>
                     @enderror
                  </div>
                  <div class="mb-6 pt-3 rounded bg-gray-200">
                     <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Gender</label>
                     <select name="gender" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                        <option value="" {{old('gender') == "" ? 'selected' : ''}}></option>
                        <option value="Male"  {{old('gender') == "Male" ? 'selected' : ''}}>Male</option>
                        <option value="Female"  {{old('gender') == "Female" ? 'selected' : ''}}>Female</option>
                     </select>
                     @error('gender')
                     <p class="text-red-500 text-xs mt-2">
                           {{$message}}
                     </p>
                     @enderror
                  </div>
                  <div class="mb-6 pt-3 rounded bg-gray-200">
                     <label for="age" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Age</label>
                     <input type="number" name="age" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{old('age')}}>
                     @error('age')
                     <p class="text-red-500 text-xs mt-2">
                           {{$message}}
                     </p>
                     @enderror
                  </div>
                  <div class="mb-6 pt-3 rounded bg-gray-200">
                     <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                     <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{old('email')}}>
                     @error('first_name')
                     <p class="text-red-500 text-xs mt-2">
                           {{$message}}
                     </p>
                     @enderror
                  </div>

                  <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transitionduration-200" type="submit">Add New</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>



@include('partials.footer') 