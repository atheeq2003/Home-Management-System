(function(window, document, $, undefined) {
    "use strict";
    $(function() {
        var arr= array(arrayFromPhp);
        // for(var i=0;i<arrayFromPhp.length;i++)
        // {
        //     alert(arrayFromPhp[i]);
        // }
        //var arr= [500,400,350,450,520,500,400,350,342,368,500,500];  
        if ($('#c3chart_zoom').length) {
            var chart = c3.generate({
                bindto: "#c3chart_zoom",
                data: {
                    columns: [
                        ['sample',0,arr[0],arr[1],arr[2]]
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
                }

            });
        }


        var chartselection="zoomchart";

    $('#chartselection').on('change', function(event) {
        var opt = this.options[ this.selectedIndex ];
        chartselection= $(opt).text();
        
     
     if(chartselection=="Zoom chart"){
        $(function() { 
            
            if ($('#c3chart_zoom').length) {
            
            var chart = c3.generate({
                bindto: "#c3chart_zoom",

                data: {

                    columns: [
                        ['sample',0,arr[0],arr[1],arr[2]]
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

    if(chartselection=="Area chart"){

        if ($('#c3chart_zoom').length) {
            var chart = c3.generate({
                bindto: "#c3chart_zoom",
                data: {
                    columns: [
                        ['data1',0, arr[0],arr[1],arr[2]]
                        
                    ],
                    types: {
                        data1: 'area',
                        data2: 'area-spline'
                    },
                    colors: {
                        data1: '#5969ff',
                        data2: '#ff407b',

                    }

                },
                axis: {

                    y: {
                        show: true




                    },
                    x: {
                        show: true
                    }
                }

            });
        }

    }

    if(chartselection=="Bar chart"){
        if ($('#c3chart_zoom').length) {
            var chart = c3.generate({
                bindto: "#c3chart_zoom",

                data: {
                    columns: [
                        ['data1',0, arr[0],arr[1],arr[2]]
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

})(window, document, window.jQuery);


window.onload = function takeyear(){


var yeararray=[1999,2000,2001];
for(var i=0;i<yeararray.length;i++)
{
                var x = document.getElementById("selectyear");
                var option = document.createElement("option");
                option.text = yeararray[i].toString();
                x.add(option);
}




}
$(document).ready(function(){

    /*user information in header*/
  var head_name="Ayush Vachhani";
  var head_image="../../crop.jpg";
  document.getElementById('head_name').innerHTML=head_name;
  document.getElementById('head_image').src=head_image;
})




