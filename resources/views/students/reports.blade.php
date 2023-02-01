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


    <section class="mt-10">
        <div class="overflow-x-auto relative">
            <table class="w-96 mx-auto text-sm text-left text-gray-500" id="StudentReports">
                <thead class="text-xs text gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">Age</th>
                        <th scope="col" class="py-3 px-6">Number of Students</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students->groupBy('age') as $age => $ageGroup)
                        <tr class="bg-gray-800 border-b text-white">
                            <td class="py-4 px-6">{{ $age }}</td>
                            <td class="py-4 px-6">{{ $ageGroup->count() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>      

    <section class="mt-10">
        <div class="overflow-x-auto relative">
            <table class="w-96 mx-auto text-sm text-left text-gray-500" id="StudentReports">
                <thead class="text-xs text gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">Gender</th>
                        <th scope="col" class="py-3 px-6">Number of Students</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students->groupBy('gender') as $gender => $genderGroup)
                        <tr class="bg-gray-800 border-b text-white">
                            <td class="py-4 px-6">{{ $gender }}</td>
                            <td class="py-4 px-6">{{ $genderGroup->count() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>    


    <div class="shadow-lg rounded-lg overflow-hidden">
        <div class="py-3 px-5 bg-gray-50">Student Age Bar Chart</div>
        <canvas class="p-10" id="chartBar"></canvas>
      </div>
      <!-- Required chart.js -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <!-- Chart bar -->
      <script>
        const ageGroups = [
          @foreach ($students->groupBy('age') as $age => $ageGroup)
            { age: "{{ $age }}", count: {{ $ageGroup->count() }} },
          @endforeach
        ];
        const labelsBarChart = ageGroups.map(group => group.age);
        const dataBarChart = {
          labels: labelsBarChart,
          datasets: [
            {
              label: "Number of Students",
              backgroundColor: "hsl(252, 82.9%, 67.8%)",
              borderColor: "hsl(252, 82.9%, 67.8%)",
              data: ageGroups.map(group => group.count),
            },
          ],
        };
      
        const configBarChart = {
          type: "bar",
          data: dataBarChart,
          options: {},
        };
      
        var chartBar = new Chart(
          document.getElementById("chartBar"),
          configBarChart
        );
      </script>

<div class="shadow-lg rounded-lg overflow-hidden mt-10">
    <div class="py-3 px-5 bg-gray-50">Pie chart</div>
    <canvas class="p-10" id="chartPie"></canvas>
  </div>
  <!-- Required chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- Chart pie -->
  <script>
    const labelsPieChart = [
      @foreach ($students->groupBy('gender') as $gender => $genderGroup)
        "{{ $gender }}",
      @endforeach
    ];
    const dataPieChart = [
      @foreach ($students->groupBy('gender') as $gender => $genderGroup)
        {{ $genderGroup->count() }},
      @endforeach
    ];
  
    const configPieChart = {
      type: "pie",
      data: {
        labels: labelsPieChart,
        datasets: [
          {
            data: dataPieChart,
            backgroundColor: [
              "hsl(252, 82.9%, 67.8%)",
              "hsl(148, 59.8%, 49.2%)",
            ],
          },
        ],
      },
      options: {},
    };
  
    var chartPie = new Chart(
      document.getElementById("chartPie"),
      configPieChart
    );
  </script>
    
@include('partials.footer')


    