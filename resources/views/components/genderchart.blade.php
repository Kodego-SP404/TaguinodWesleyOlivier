<div class="shadow-lg rounded-lg overflow-hidden bg-white text-black bg-opacity-80">
    <div class="py-3 px-5 bg-gray-50">Student Gender Pie chart</div>
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
              "hsl(210, 100%, 80%)",
              "hsl(300, 100%, 90%)",
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