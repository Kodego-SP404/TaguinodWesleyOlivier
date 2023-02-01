@include('partials.header')
<?php $array = array('title' => 'Student System') ;?>
<x-nav :data="$array"/>


<header class="max-w-lg mx-auto mt-5">
   <a href="#">
      <h1 class="text-4xl font-bold text-white text-center pt-7">Student List</h1>
   </a>
</header>

 
<section>
   <div class=" overflow-x-auto relative">
      <div class="flex justify-center my-5 py-5">
         <form action="{{ route('student-list') }}" method="GET">
         <input type="text" name="first_name" placeholder="First Name">
         <input type="text" name="last_name" placeholder="Last Name">
         <input type="text" name="email" placeholder="Email">
         <input type="text" name="age" placeholder="Age">
         <button type="submit" class="inline-block px-6 py-2 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Filter</button>
         </form>
      </div>
      
      <table class="w-96 mx-auto text-sm text-left text-gray-500" id="StudentList">
         <thead class="text-xs text gray-700 uppercase bg-gray-50">
            <tr>
               <th scope="col" class="py-3 px-6" onclick="sortTable(0)">
                  First Name
               </th>
               <th scope="col" class="py-3 px-6" onclick="sortTable(1)">
                  Last Name
               </th>
               <th scope="col" class="py-3 px-6" onclick="sortTable(2)">
                  Email
               </th>
               <th scope="col" class="py-3 px-6" onclick="sortTable(3)">
                  Age
               </th>
               <th scope="col" class="py-3 px-6" onclick="sortTable(4)">
                  Gender
               </th>
               <th scope="col" class="py-3 px-6" onclick="sortTable(4)">
                  Action
               </th>
            </tr>
         </thead>

         <tbody>
            @foreach ($students as $student)
            <tr class="bg-gray-800 border-b text-white">
               <td class="py-4 px-6">
                  {{ $student-> first_name }}
               </td>
               <td class="py-4 px-6">
                  {{ $student-> last_name }}
               </td>
               <td class="py-4 px-6">
                  {{ $student-> email }}
               </td>
               <td class="py-4 px-6">
                  {{ $student-> age }}
               </td>
               <td class="py-4 px-6">
                  {{ $student-> gender }}
               </td>   
               <td class="py-4 px-6">
                  <a href="/student/{{$student->id}}" class="bg-sky-600 text-white px-4 py-1 rounded">view</a>
               </td>            
            </tr>
            @endforeach
         </tbody>
      </table>

   </div>
</section>
<section class="flex">
   <div class="mt-5 mx-auto max-w-lg pt-6 p-4 text-white">
      {{$students->links()}}
   </div>
</section>

<x-sort />
@include('partials.footer')

