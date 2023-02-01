<div class="shadow-lg rounded-lg overflow-hidden bg-white bg-opacity-80">
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
          backgroundColor: "hsl(204, 100%, 50%)",
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