@include('partials.header')
<?php $array = array('title' => 'Student System') ;?>
<x-nav :data="$array"/>

<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    
    
    <header class="max-w-lg mx-auto mt-5">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Student Reports</h1>
        </a>
    </header>

    <section class="mt-10">
      <div class="overflow-x-auto relative">
          <table class="w-96 mx-auto text-sm text-left text-gray-500" id="StudentReports">
              <thead class="text-xs text gray-700 uppercase bg-gray-50">
                  <tr>
                      <th scope="col" class="py-3 px-6">Column</th>
                      <th scope="col" class="py-3 px-6">Summary</th>
                  </tr>
              </thead>

              <tbody>
                  <tr class="bg-gray-800 border-b text-white">
                      <td class="py-4 px-6">Number of Students</td>
                      <td class="py-4 px-6">{{ $students->count() }}</td>
                  </tr>
                  <tr class="bg-gray-800 border-b text-white">
                      <td class="py-4 px-6">Average Age</td>
                      <td class="py-4 px-6">{{ $students->avg('age') }}</td>
                  </tr>
              </tbody>
          </table>
      </div>
  </section>    


  <div class="container my-24 px-6 mx-auto">
    <!-- Section: Design Block -->
    <section class="mb-32 text-black text-center lg:text-left">
      <div class="grid lg:grid-cols-2 gap-6 xl:gap-12 items-center">
        <div class="mb-6 lg:mb-0">
          @include('components.agechart')
        </div>
        <div class="mb-6 lg:mb-0">
          @include('components.agetable')
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->

  <div class="container my-24 px-6 mx-auto">
    <!-- Section: Design Block -->
    <section class="mb-32 text-black text-center lg:text-left">
      <div class="grid lg:grid-cols-2 gap-6 xl:gap-12 items-center">
        <div class="mb-6 lg:mb-0">
          @include('components.gendertable')
        </div>
        <div class="mb-6 lg:mb-0">
          @include('components.genderchart')
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->   
    
@include('partials.footer')


    