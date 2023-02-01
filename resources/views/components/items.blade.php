<ul class="flex flex-col md:flex-row px-4">
   @auth
      <li>
         <a href="/add/student" class="block py-2 pr-4 pl-3">Add New</a>
      </li>
      <li>
      <form action="/logout" method="POST">
         @csrf
         <button class="block py-2 pr-4 pl-3">Logout</a>
         </form>
      </li>    
      <li>
         <p class="flex py-2 pr-4 pl-3"><i class="fa-regular fa-user mr-2 mt-1.5"></i> Hello, {{ Auth::user()->name }}!</p>
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