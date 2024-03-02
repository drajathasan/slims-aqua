<?php
section('script', function() {
ob_start();
?>
<script>
    $("#activeUsersChart").sparkline([112,109,120,107,110,85,87,90,102,109,120,99,110,85,87,94], {
        type: 'bar',
        height: '100',
        barWidth: 9,
        barSpacing: 10,
        barColor: 'rgba(255,255,255,.3)'
    });
    
    var multipleBarChart = document.getElementById('multipleBarChart').getContext('2d')
    var myMultipleBarChart = new Chart(multipleBarChart, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets : [{
                label: "First time visitors",
                backgroundColor: '#59d05d',
                borderColor: '#59d05d',
                data: [95, 100, 112, 101, 144, 159, 178, 156, 188, 190, 210, 245],
            },{
                label: "Visitors",
                backgroundColor: '#fdaf4b',
                borderColor: '#fdaf4b',
                data: [145, 256, 244, 233, 210, 279, 287, 253, 287, 299, 312,356],
            }, {
                label: "Pageview",
                backgroundColor: '#177dff',
                borderColor: '#177dff',
                data: [185, 279, 273, 287, 234, 312, 322, 286, 301, 320, 346, 399],
            }],
        },
        options: {
            responsive: true, 
            maintainAspectRatio: false,
            legend: {
                position : 'bottom'
            },
            title: {
                display: true,
                text: 'Traffic Stats'
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });
</script>
<?php
return ob_get_clean();
});