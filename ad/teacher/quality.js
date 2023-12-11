<script>

    var chanceofsuc1 =<?php echo $percentageValue;?>;
    var totalofmissing1 =<?php echo (100-$percentageValue);?>;
    var data1 = {
      labels: [
        'Performance',
        'Missing Percentage',
      ],

      datasets: [{
        label: 'Quality',
        data: [chanceofsuc1,totalofmissing1],
        backgroundColor: [
          'yellowgreen',
          'gray'
        ],
        borderWidth:1,
        hoverOffset: 4,
      }]
    };
  
    var config1 = {
    type: 'doughnut',
    data: data1,
    options: {
      cutoutPercentage: 70,  
       p1: false
    }
    
    };
    var myChart1 = new Chart(
    document.getElementById('myChart1'),
    config1
    );
    </script>