 let lineChart = document.getElementById('lineChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 7;
    Chart.defaults.global.defaultFontColor = '#777';

    let visit = new Chart(lineChart, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin','Juiellet','Août','September' ,'November','Dicember'],
        datasets:[{
          label:'Visit',
          data:[
            594,
            1045,
            3060,
            4519,
            5162,
            4072,
            3430
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Visit de site',
          fontSize:10
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true,
            bodyFontSize:14,
            backgroundColor:'#00aced'
        }
      }
    });