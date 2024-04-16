    <?php 
    echo "<script type='text/javascript'>(function(window, document, $, undefined) {
    'use strict';
    $(function() {
        var arr= [$amount_arr[1],$amount_arr[2],$amount_arr[3],$amount_arr[4],$amount_arr[5],$amount_arr[6],$amount_arr[7],$amount_arr[8],$amount_arr[9],$amount_arr[10],$amount_arr[11],$amount_arr[12]];  
        if ($('#c3chart_zoom').length) {
            var chart = c3.generate({
                bindto: '#c3chart_zoom',
                data: {
                    columns: [
                        ['month',0,arr[0],arr[1],arr[2],arr[3],arr[4],arr[5],arr[6],arr[7],arr[8],arr[9],arr[10],arr[11]]
                    ],
                    colors: {
                        sample: '#5969ff'
                    }
                    

                },
                zoom: {
                    enabled: true
                },
                axis: {
                    y: {
                        show: true,
                        title:'money',

                    },
                    x: {
                        show: true,
                    }
                }

            });
        }


        var chartselection='zoomchart';

    $('#chartselection').on('change', function(event) {
        var opt = this.options[ this.selectedIndex ];
        chartselection= $(opt).text();
        
     
     if(chartselection=='Zoom chart'){
        $(function() { 
            
            if ($('#c3chart_zoom').length) {
            
            var chart = c3.generate({
                bindto: '#c3chart_zoom',

                data: {

                    columns: [
                        ['month',0,arr[0],arr[1],arr[2],arr[3],arr[4],arr[5],arr[6],arr[7],arr[8],arr[9],arr[10],arr[11]]
                    ],
                    colors: {
                        sample: '#5969ff'
                    }


                },
                zoom: {
                    enabled: true
                },
                axis: {

                    y: {
                        show: true,
                    },
                    x: {

                        show: true,
                       
                    }
                },

            });
            }

        });

    }

    if(chartselection=='Pie Chart'){

        if ($('#c3chart_zoom').length) {
            var chart = c3.generate({
                bindto: '#c3chart_zoom',
                data: {
                    columns: [
                        ['Jan', arr[0]],
                        ['Feb', arr[1]],
                        ['Mar', arr[2]],
                        ['Apr', arr[3]],
                        ['May', arr[4]],
                        ['Jun', arr[5]],
                        ['Jul', arr[6]],
                        ['Aug', arr[7]],
                        ['Sep', arr[8]],
                        ['Oct', arr[9]],
                        ['Nov', arr[10]],
                        ['Dec', arr[11]]
                    ],
                    type: 'pie',

                    colors: {
                         data1: '#5969ff',
                        data2: '#ff407b'


                    }
                },
                pie: {
                    label: {
                        format: function(value, ratio, id) {
                            return d3.format('$')(value);
                        }
                    }
                }
            });
        }

    }

    if(chartselection=='Bar chart'){
        if ($('#c3chart_zoom').length) {
            var chart = c3.generate({
                bindto: '#c3chart_zoom',

                data: {
                    columns: [
                        ['month',0, arr[0],arr[1],arr[2],arr[3],arr[4],arr[5],arr[6],arr[7],arr[8],arr[9],arr[10],arr[11]]
                    ],
                    type: 'bar',
                    groups: [
                        ['data1']
                    ],
                    order: 'desc', // stack order by sum of values descendantly. this is default.
                    //      order: 'asc'  // stack order by sum of values ascendantly.
                    //      order: null   // stack order by data definition.

                    colors: {
                        data1: '#5969ff',
                        data2: '#ff407b',
                        data3: '#64ced3'

                    }
                },
                axis: {
                    y: {
                        show: true,


                    },
                    x: {
                        show: true,
                    }
                },
                grid: {
                    y: {
                        lines: [{ value: 1 }]
                    },

                }
            });
            
        }
    }
    })

    });

})(window, document, window.jQuery);</script>";





     ?>