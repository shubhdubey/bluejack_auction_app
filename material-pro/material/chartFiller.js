$.ajax({
            type: 'POST',
            url: 'chart_api.php',
            success: function (datam) {
        
            var data=JSON.parse(datam);
            var ctx = document.getElementById('myChart').getContext('2d');
            var myDoughnutChart = new Chart(ctx, {
             type: 'doughnut',
             data: data,
             options: {}
                });
            
            } 
});

