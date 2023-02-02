@include('partials.header')
   <header class="max-w-lg mx-auto">
      <a href="#">
         <h1 class="text-4xl font-bold text-white text-center"> User Registration</h1>
      </a>
   </header>
   <section class="h-screen pt-2"> 
      <div class="bg-white max-w-3xl mx-auto my-10 p-5 rounded-lg shadow-2xl">    
         <div class="px-6 h-1/2 text-gray-800 bg-white mx-auto pb-5">
            <div class="flex xl:justify-center justify-center items-center h-full g-0 flex-wrap lg:flex-nowrap">
               <div class="pb-5 grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0 w-80">
                  <img
                     src="{{asset('assets/png/logo-no-background.png')}}"
                     class="md:max-w-full xl:max-w-md xl:pr-10 sm:mb--4 sm:max-w-full"
                     alt="STFU Logo"
                     style="background-size: cover;"
                  />
               </div>
               <div class="xl:ml-20 xl:w-4xl lg:max-w-full md:w-8/12 mb-12 md:mb-0">
                  <section>
                     <h3 class="font-bold text-2xl text-center text-gray-800">Welcome to Student System</h3>
                         <p class="text-gray-600 pt-2">Sign in to your account <a href="/login" class="text-purple-300 font-bold">here</a> </p>           
                  </section>
                  <section class="mt-10">
                     <form action="/store" method="POST" class="flex flex-col xl:w-10xl">
                        @csrf
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                           <label for="name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Name</label>
                           <input type="text" name="name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{old('name')}}>               
                           @error('name')
                              <p class="text-red-500 text-xs mt-2">
                                  {{$message}}
                              </p>
                           @enderror
                        </div>
                        
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                           <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                           <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{old('email')}}>
                           @error('email')
                           <p class="text-red-500 text-xs mt-2">
                               {{$message}}
                           </p>
                        @enderror
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                           <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                           <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                           @error('password')
                           <p class="text-red-500 text-xs mt-2">
                               {{$message}}
                           </p>
                        @enderror
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                           <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Confirm Password</label>
                           <input type="password" name="password_confirmation" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                           @error('password_confirmation')
                           <p class="text-red-500 text-xs mt-2">
                               {{$message}}
                           </p>
                        @enderror
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transitionduration-200" type="submit">Sign up</button>
                     </form>
                  </section>
               </div>
            </div>
         </div>
      </div>
   </section>

@include('partials.footer')