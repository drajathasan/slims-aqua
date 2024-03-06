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
    
    var multipleBarChart = document.getElementById('multipleBarChart')

    if (multipleBarChart) {
        fetch('<?= SWB ?>index.php?p=api/loan/getdate/<?= date('Y-m-d') ?>', {headers: {'SLiMS-Http-Cache': 'cache'}})
        .then(res => res.json())
        .then(res => {

            let a = getTotal('<?= SWB ?>index.php?p=api/loan/summary/<?= date('Y-m-d') ?>');
            a.then(res_total => {

                console.log(res_total)
                // let lineChartData = {
                //     labels: res.raw,
                //     datasets: [
                //         {
                //             fillColor: '#F4CC17',
                //             highlightFill: '#F4CC17',
                //             data: res_total.loan
                //         },
                //         {
                //             fillColor: '#459CBD',
                //             highlightFill: '#459CBD',
                //             data: res_total.return
                //         },
                //         {
                //             fillColor: '#5D45BD',
                //             highlightFill: '#5D45BD',
                //             data: res_total.extend
                //         },
                //     ]
                // }

                // let c = $('#multipleBarChart');
                // let container = $(c).parent();
                // let ct = c.get(0).getContext("2d");
                // $(window).resize(respondCanvas);

                // function respondCanvas() {
                //     c.attr('width', $(container).width()); //max width
                //     c.attr('height', $(container).height()); //max height
                //     //Call a function to redraw other content (texts, images etc)
                //     var myMultipleBarChart = new Chart(multipleBarChart.getContext('2d'), {
                //         type: 'bar',
                //         data: {
                //             labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                //             datasets : [{
                //                 label: "First time visitors",
                //                 backgroundColor: '#59d05d',
                //                 borderColor: '#59d05d',
                //                 data: [95, 100, 112, 101, 144, 159, 178, 156, 188, 190, 210, 245],
                //             },{
                //                 label: "Visitors",
                //                 backgroundColor: '#fdaf4b',
                //                 borderColor: '#fdaf4b',
                //                 data: [145, 256, 244, 233, 210, 279, 287, 253, 287, 299, 312,356],
                //             }, {
                //                 label: "Pageview",
                //                 backgroundColor: '#177dff',
                //                 borderColor: '#177dff',
                //                 data: [185, 279, 273, 287, 234, 312, 322, 286, 301, 320, 346, 399],
                //             }],
                //         },
                //         options: {
                //             responsive: true, 
                //             maintainAspectRatio: false,
                //             legend: {
                //                 position : 'bottom'
                //             },
                //             title: {
                //                 display: true,
                //                 text: 'Traffic Stats'
                //             },
                //             tooltips: {
                //                 mode: 'index',
                //                 intersect: false
                //             },
                //             responsive: true,
                //             scales: {
                //                 xAxes: [{
                //                     stacked: true,
                //                 }],
                //                 yAxes: [{
                //                     stacked: true
                //                 }]
                //             }
                //         }
                //     });

                // respondCanvas();
            })
        })
    }

    <?php if (count($_GET) === 0): ?>
    async function getTotal(url, selector = null) {
        if(selector !== null) $(selector).text('...');
        let res = await (await fetch(url,{headers: {'SLiMS-Http-Cache': 'cache'}})).json();
        if(selector !== null) $(selector).text(new Intl.NumberFormat('id-ID').format(res.data));
        return res.data;
    }

    getTotal('<?= SWB ?>index.php?p=api/biblio/total/all', '#biblio_total_all');
    getTotal('<?= SWB ?>index.php?p=api/item/total/all', '#item_total_all');
    getTotal('<?= SWB ?>index.php?p=api/item/total/lent', '#item_total_lent');
    getTotal('<?= SWB ?>index.php?p=api/item/total/available', '#item_total_available');
    <?php endif; ?>
</script>
<?php
return ob_get_clean();
});