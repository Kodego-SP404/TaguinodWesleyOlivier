<ul class="flex flex-col md:flex-row px-4">
   @auth
      <li>
         <a href="/add/student" class="block w-20 bg-black-600 shadow-md rounded hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out py-2 pr-4 pl-3">Add New</a>
      </li>
      <li>
         <a href="/reports" class="block w-20 bg-black-600 shadow-md rounded hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out py-2 pr-4 pl-3">Reports</a>
      </li>
      <li>
      <form action="/logout" method="POST">
         @csrf
         <button class="block w-20 bg-black-600 shadow-md rounded hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out py-2 pr-4 pl-3">Logout</a>
         </form>
      </li> 
      {{-- <li>
         <p class="flex py-2 pr-4 pl-3"><i class="fa-regular fa-user mr-2 mt-1.5"></i> Hello, {{ Auth::user()->name }}!</p>
      </li> --}}
      <li class="relative">
         <p class="flex py-2 pr-4 pl-3 cursor-pointer">
            <i class="fa-regular fa-user mr-2 mt-1.5"></i> Hello, {{ Auth::user()->name }}!
         </p>
         <div class="hidden absolute right-0 w-48 mt-2 py-2 bg-white rounded-md shadow-md">
            <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-900">Account settings</a>
            <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-900">Log out</a>
         </div>
      </li>
      
      
 
   @else
          
      <li>
         <a href="/login" class="block py-2 pr-4 pl-3">Sign In</a>
      </li>
      <li>
         <a href="/register" class="block py-2 pr-4 pl-3">Sign Up</a>
      </li>
   @endauth
</ul>