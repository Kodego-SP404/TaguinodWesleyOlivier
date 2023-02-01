@include('partials.header')
<?php $array = array('title' => 'Student System') ;?>
<x-nav :data="$array"/>

<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    
    
    <header class="max-w-lg mx-auto mt-5">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center bg-gray-500 p-5 mb-5 bg-opacity-80 rounded">Student Reports</h1>
        </a>
    </header>

    <section class="container p-10 bg-gray-500 bg-opacity-80 rounded">
      <div class="flex justify-center">
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-3 xl:gap-10">
          <div class="col-span-1 flex items-center justify-center">
            @include('components.summarytable')
          </div>
    
          <div class="col-span-1 flex items-center justify-center">
            @include('components.gendertable')
          </div>
    
          <div class="col-span-1 flex items-center justify-center">
            @include('components.genderchart')
          </div>
    
          <div class="col-span-1 flex items-center justify-center">
            @include('components.agetable')
          </div>
    
          <div class="col-span-2">
            @include('components.agechart')
          </div>
        </div>
      </div>
    </section>

    

    {{-- @include('components.summarytable')
    @include('components.gendertable')
    @include('components.genderchart')
    @include('components.agetable')
    @include('components.agechart')    
     --}}

@include('partials.footer')

    