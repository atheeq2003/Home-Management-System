<?php
echo "<script>(function(window, document, $, undefined) {
    'use strict';
    $(function() {        
        /*Income*/
        var chartselection='Bar chart';
    $('$select_tag_id').on('change', function(event) {
        $('$chart').show();
        var opt = this.options[ this.selectedIndex ];
        chartselection= $(opt).text();
        var graph_type;
        if(chartselection=='Bar chart'){
            graph_type='bar';
        }
        if(chartselection=='Line chart'){
            graph_type='line';
        }
        if ($('$chart').length) {
                
                var ctx = document.getElementById('$draw').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: graph_type,
                    data: {
                        labels: $label,
                        datasets: [{
                            label: 'Budget',
                            data: $budget,
                           backgroundColor: 'rgba(89, 105, 255,0.5)',
                                    borderColor: 'rgba(89, 105, 255,0.7)',
                            borderWidth: 2
                        }, {
                            label: 'Actual',
                            data: $actual,
                           backgroundColor: 'rgba(255, 64, 123,0.5)',
                                    borderColor: 'rgba(255, 64, 123,0.7)',
                            borderWidth: 2
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{

                            }]
                        },
                             legend: {
                        display: true,
                        position: 'bottom',

                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },

                    scales: {
                        xAxes: [{
                            ticks: {
                                fontSize: 14,
                                fontFamily: 'Circular Std Book',
                                fontColor: '#71748d',
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                fontSize: 14,
                                fontFamily: 'Circular Std Book',
                                fontColor: '#71748d',
                            }
                        }]
                    }
                }       
                });
            }
    })  
        

    });

})(window, document, window.jQuery);


</script>";


?>