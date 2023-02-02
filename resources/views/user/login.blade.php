@include('partials.header')
   <header class="max-w-lg mx-auto">
      <a href="#">
      </a>
   </header>
   <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
      <section>
         <div class="flex items-center justify-center">
         <img src="{{asset('assets/png/logo-no-background.png')}}" alt="" class="h-60 p-5">
      </div>
         <h3 class="font-bold text-2xl text-center p-5">Welcome to STFU Student System</h3>
         <h1 class="font-bold text-2xl text-black text-center"> Student Login</h1>         
             <p class="text-gray-600 pt-5">Sign up a new account <a href="/register" class="text-blue-300 font-bold">here</a></p>           
      </section>

      <section class="mt-5">
         <form action="/login/process" method="POST" class="flex flex-col">
            @csrf
            @error('email')
                  <p class="text-red-500 text-xs mt-2">
                      {{$message}}
                  </p>
            @enderror
            <div class="mb-6 pt-3 rounded bg-gray-200">
               <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
               <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
               <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
               <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
            </div>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transitionduration-200" type="submit">Login</button>
         </form>
      </section>
   </main>

    <!-- ^_^ -->
    <!-- can add loop controls -->
    <audio id="music" src="{{asset('assets/myAudioFile.mp3')}}" autoplay controls></audio>
    <script>
      var music = document.getElementById("music");
      window.addEventListener("scroll", function () {
        music.play();
      }); 
   </script>

   <!-- ^_^ -->
@include('partials.footer')