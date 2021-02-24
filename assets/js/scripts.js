function toggleMenu(){
  document.getElementById('sidebar').classList.toggle('active');
}

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
$('#exit').click(function(){
   var c = confirm("Are you sure you wish to exit?");
        if(c === true){
        window.location.href = 'welcome.php';        
        }
});
$('#exit2').click(function(){
   var c = confirm("Are you sure you wish to exit?");
        if(c === true){
        window.location.href = 'welcome.php';        
        }
});
$('#leave').click(function(){
   var c = confirm("Are you sure you wish to exit?");
        if(c === true){
        window.location.href = 'welcome.php';        
        }
});
 
$("#downtime").select2({
          placeholder: "downtime",
          //enableFiltering: true,
          //enableCaseInsensitiveFiltering: true,
          width:'650px',
          //theme: 'classic',
          allowClear: true
      }).on('select2:open', function(e){
        $('.select2-dropdown').hide();
        setTimeout(function(){
          jQuery('.select2-dropdown').slideDown('slow');
        }, 0);
      });
$("#failure").select2({
          placeholder: "failure mode",
          enableFiltering: true,
          enableCaseInsensitiveFiltering: true,
          width:'650px',
          //theme: 'classic',
          allowClear: true
      }).on('select2:open', function(e){
        $('.select2-dropdown').hide();
        setTimeout(function(){
          jQuery('.select2-dropdown').slideDown('slow');
        }, 0);
      });
$("#category").select2({
          placeholder: "category",
          minimumResultsForSearch: -1, 
          width:'200px',
          //theme: 'classic',
          allowClear: true
      }).on('select2:open', function(e){
        $('.select2-dropdown').hide();
        setTimeout(function(){
          jQuery('.select2-dropdown').slideDown('slow');
        }, 0);
      });
$("#shift").select2({
          placeholder: "shift",
          minimumResultsForSearch: -1, 
          width:'200px',
          //theme: 'classic',
          allowClear: true
      }).on('select2:open', function(e){
        $('.select2-dropdown').hide();
        setTimeout(function(){
          jQuery('.select2-dropdown').slideDown('slow');
        }, 0);
      });
      
$(function() {
  function numberRows($t) {
    var x = 0;
    $t.find("tr").each(function(ind, el) {
      $(el).find("td:eq(1)").html(x++);
    });
  }

$(document).on("click", "#entry", function(e){
  var equipment = $("#justAnInputBox").val();
  var downtime = $("#downtime").val();
  var failure = $("#failure").val();
  var category = $("#category").val();
  var shift = $("#shift").val();
  var remarks = $("#remark").val();
  var date = $("#datetimepicker3").val();
  var t1 = $("#datetimepicker1").val();
  var t2 = $("#datetimepicker2").val();

  var timeStart = new Date(t2);
  var timeStop = new Date(t1);
  document.getElementById('time').innerHTML = date; 

  var diff = timeStart - timeStop;
  var results = (diff/60000);
  
  if(!equipment ||!downtime||!failure || !category || !shift || !date || !t1 || !t2){
  swal("Please fill out all fields");
  return;
  }

 var postData = 'equipment='+equipment+'&downtime='+downtime+'&failure='+failure+'&category='+category+'&shift='+shift+'&remarks='+remarks+'&duration='+results;
 $.ajax({
    url : "data.php",
    type: "POST",
    data : postData,
    cache: false,
    dataType: "json",
    success: function(result)
    {
      var tag = (result.id);
      var markup = "<tr><td><input type='button' id='del' name='record' value='X' style='background-color:red;padding:1px;'></td><td>"+ numberRows($("#table")) +"</td><td>" + equipment + "</td><td>" + downtime + "</td><td>"+failure+"</td><td>"+category+"</td><td>"+shift+"</td><td>"+results+"</td><td>"+remarks+"</td><td>"+tag+"</td></tr>";
          $("table tbody").append(markup);
          numberRows($("#table"));
          $("#remarks").val('');
            $("#datetimepicker1").val('');
            $("#datetimepicker2").val('');
        
    swal("record sent", {
          buttons: false,
          timer: 800,
        }); 
}, error: function ()
    {
        //if fail show error and server status
    swal("record not sent", {
              buttons: false,
              timer: 800,
            });         
    }
   });
  });
   
//Find and remove selected table rows
$("table").on('click', 'input[type="button"]', function(e){
    var tr = $(this).closest('tr');
    var  del_id = tr.find("td:last").html();
   $.ajax({
       type:'POST',
       url:'delete.php',
       data:'del_id='+del_id,
       success:function(data) {
        var c = confirm("Are you sure you wish to remove this entry?");
        if(c === true){
         tr.remove();
         numberRows($("#table"));
         swal("record deleted", {
              buttons: false,
              timer: 800,
            }); 
        }
       },
    error: function ()
          {
        //if fail show error and server status
    swal("record not sent", {
              buttons: false,
              timer: 800,
            });         
       }
  });
 });
});

$(document).on('click', '#chart', function(){
  var table = document.getElementById('table');
  var Mechanical = 0;
  var Electrical = 0;
  var Production = 0;
  var Inpower = 0;
  var Expower = 0;
  for(var i = 1; i < table.rows.length; i++){
    if(table.rows[i].cells[5].innerHTML=="mechanical"){       
       Mechanical = parseInt(Mechanical) + parseInt(table.rows[i].cells[7].innerHTML);
    }
    else if(table.rows[i].cells[5].innerHTML=="electrical"){
       Electrical = parseInt(Electrical) + parseInt(table.rows[i].cells[7].innerHTML);
    }
    else if(table.rows[i].cells[5].innerHTML=="production"){
       Production = parseInt(Production) + parseInt(table.rows[i].cells[7].innerHTML);
    }
    else if(table.rows[i].cells[5].innerHTML=="internal power"){
       Inpower = parseInt(Inpower) + parseInt(table.rows[i].cells[7].innerHTML);
    } 
    else if(table.rows[i].cells[5].innerHTML=="external power"){
       Expower = parseInt(Expower) + parseInt(table.rows[i].cells[7].innerHTML);
    } 
  }
  
  $('#charts').toggle(500);
    Chart.defaults.global.defaultFontColor = '#770';
    Chart.helpers.merge(Chart.defaults.global.plugins.datalabels, {
      color: '#000'
    });
    var barChart = document.getElementById('barChart').getContext('2d');
    var massChart1 = new Chart(barChart, {
        // The type of chart we want to create
    type: 'bar',
    plugin: [ChartDataLabels],
    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: '',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],
            borderWidth:1,
            borderColor: '#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#777',
            data: [Mechanical, Electrical, Production, Inpower, Expower]
        }]
    },

    // Configuration options go here
    options: {
      title:{
        display: true,
        text: 'Downtime Analysis',
        fontSize:20
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
    }
});

var pieChart = document.getElementById('pieChart').getContext('2d');
var massChart2 = new Chart(pieChart, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: '',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],
            //borderColor: 'rgb(0, 200, 0)',
            data: [Mechanical, Electrical, Production, Inpower, Expower]
        }]
    },

    // Configuration options go here
    options: {
      title:{
        display: true,
        text: 'Downtime Analysis',
        fontSize:20
      } 
    }
});
var lineChart = document.getElementById('lineChart').getContext('2d');
var massChart3 = new Chart(lineChart, {
    // The type of chart we want to create
    type: 'horizontalBar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: '',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],
            borderWidth:1,
            borderColor: '#777',
            hoverBorderWidth:2,
            hoverBorderColor:'#777',
            data: [Mechanical, Electrical, Production, Inpower, Expower]
        }]
    },

    // Configuration options go here
    options: {
      title:{
        display: true,
        text: 'Downtime Analysis',
        fontSize:20
      },
      scales: {
        xAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
    }
});
 });
 
 $(document).on('click', '#chat', function(){
  var table = document.getElementById('table');
  var Mechanical = 0;
  var Electrical = 0;
  var Production = 0;
  var Inpower = 0;
  var Expower = 0;
  for(var i = 1; i < table.rows.length; i++){
    if(table.rows[i].cells[3].innerHTML=="mechanical"){       
       Mechanical = parseInt(Mechanical) + parseInt(table.rows[i].cells[5].innerHTML);
    }
    else if(table.rows[i].cells[3].innerHTML=="electrical"){
       Electrical = parseInt(Electrical) + parseInt(table.rows[i].cells[5].innerHTML);
    }
    else if(table.rows[i].cells[3].innerHTML=="production"){
       Production = parseInt(Production) + parseInt(table.rows[i].cells[5].innerHTML);
    }
    else if(table.rows[i].cells[3].innerHTML=="internal power"){
       Inpower = parseInt(Inpower) + parseInt(table.rows[i].cells[5].innerHTML);
    } 
    else if(table.rows[i].cells[3].innerHTML=="external power"){
       Expower = parseInt(Expower) + parseInt(table.rows[i].cells[5].innerHTML);
    } 
  }
  
  $('#chats').toggle(500);
    Chart.defaults.global.defaultFontColor = '#770';
    Chart.helpers.merge(Chart.defaults.global.plugins.datalabels, {
      color: '#000'
    });
    var barChart = document.getElementById('barChart').getContext('2d');
    var massChart1 = new Chart(barChart, {
        // The type of chart we want to create
    type: 'bar',
    plugin: [ChartDataLabels],
    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: '',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],
            borderWidth:1,
            borderColor: '#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#777',
            data: [Mechanical, Electrical, Production, Inpower, Expower]
        }]
    },

    // Configuration options go here
    options: {
      title:{
        display: true,
        text: 'Downtime Analysis',
        fontSize:20
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
    }
});

var pieChart = document.getElementById('pieChart').getContext('2d');
var massChart2 = new Chart(pieChart, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: '',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],
            //borderColor: 'rgb(0, 200, 0)',
            data: [Mechanical, Electrical, Production, Inpower, Expower]
        }]
    },

    // Configuration options go here
    options: {
      title:{
        display: true,
        text: 'Downtime Analysis',
        fontSize:20
      } 
    }
});
var lineChart = document.getElementById('lineChart').getContext('2d');
var massChart3 = new Chart(lineChart, {
    // The type of chart we want to create
    type: 'horizontalBar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: '',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],
            borderWidth:1,
            borderColor: '#777',
            hoverBorderWidth:2,
            hoverBorderColor:'#777',
            data: [Mechanical, Electrical, Production, Inpower, Expower]
        }]
    },

    // Configuration options go here
    options: {
      title:{
        display: true,
        text: 'Downtime Analysis',
        fontSize:20
      },
      scales: {
        xAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
    }
});
 });

$('#downloadPdf').click(function(){
  // get size of report page
  var reportPageHeight = 680;
  var reportPageWidth = 1400;

  // create a new canvas object that we will populate with all other canvas objects
  var pdfCanvas = $('<canvas />').attr({
    id: "canvaspdf",
    width: reportPageWidth,
    height: reportPageHeight
  });

 // keep track canvas position
  var pdfctx = $(pdfCanvas)[0].getContext('2d');
  var pdfctxX = 10;
  var pdfctxY = 100;
  var buffer = 50;

  // for each chart.js chart
  $("canvas").each(function(index) {
    // get the chart height/width
    var canvasHeight = $(this).innerHeight();
    var canvasWidth = $(this).innerWidth();

    // draw the chart into the new canvas
    pdfctx.drawImage($(this)[0], pdfctxX, pdfctxY, canvasWidth, canvasHeight);
    pdfctxX += canvasWidth + buffer;

    // our report page is in a grid pattern so replicate that in the new canvas
    if (index % 2 === 2) {
      pdfctxX = 0;
      pdfctxY += canvasHeight + buffer;
    }
  });

  // create new pdf and add our new canvas as an image
  var pdf = new jsPDF('l', 'pt', [reportPageWidth, reportPageHeight]);
  pdf.addImage($(pdfCanvas)[0], 'PNG', 0, 0);

  // download the pdf
  pdf.save('chart.pdf');
});

let isVisible = false;
$("#chart").on('click', function(){
    isVisible = !isVisible;
});
 
function print(){
var canvas1 = document.getElementById("barChart");
var canvas2 = document.getElementById("pieChart");
var canvas3 = document.getElementById("lineChart");

var img1    = canvas1.toDataURL("image/png1");
var img2    = canvas2.toDataURL("image/png2");
var img3    = canvas3.toDataURL("image/png3");

if(isVisible==true){
var link = document.getElementById('charts');
link.style.display = "none";
var prtContent1 = document.getElementById("prtTable");
var prtContent2 = document.getElementById("endorse");
var WinPrint = window.open('', '', 'left=0,top=0,width=1400,height=600,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write('<html><head>');
WinPrint.document.write('<link rel="stylesheet" href="css/styles.css">');
WinPrint.document.write('</head><body onload="print();">');
WinPrint.document.write(prtContent1.innerHTML);
WinPrint.document.write('<img src="'+img1+'"/>');
WinPrint.document.write('<img src="'+img2+'"/>');
WinPrint.document.write('<img src="'+img3+'"/>');
WinPrint.document.write(prtContent2.innerHTML);
WinPrint.document.write('</body></html>');
WinPrint.document.close();
WinPrint.focus();
}

else{
    var link = document.getElementById('charts');
    link.style.display = "none";
    var prtContent = document.getElementById("sidebar");
    var WinPrint = window.open('', '', 'left=0,top=0,width=1400,height=600,toolbar=0,scrollbars=0,status=0');
    WinPrint.document.write('<html><head>');
    WinPrint.document.write('<link rel="stylesheet" href="css/styles.css">');
    WinPrint.document.write('</head><body onload="print();">');
    WinPrint.document.write(prtContent.innerHTML);
    WinPrint.document.write('</body></html>');
    WinPrint.document.close();
    WinPrint.focus();
}
}
//2020 analysis javascript
//2020 JS Charts

    Chart.defaults.global.defaultFontColor = '#770';
    Chart.helpers.merge(Chart.defaults.global.plugins.datalabels, {
     color: '#000'
    });
  $(document).on('click', '#btn120', function(){
     
  $('.hold1').toggle(500);
  $('.hold2').hide(500);  $('.hold3').hide(500);
  $('.hold4').hide(500);  $('.hold5').hide(500);
  $('.hold6').hide(500);  $('.hold7').hide(500);
  $('.hold8').hide(500);  $('.hold9').hide(500);
  $('.hold10').hide(500);  $('.hold11').hide(500);
  $('.hold12').hide(500);
 $.ajax({
    url : 'pst1.php',
    type: "POST",
    dataType: "json",
         success: function(data){ 

     Mechanical120 = (data.Mechanical120);
     Electrical120 = (data.Electrical120);
     Production120 = (data.Production120);
     Inpower120 = (data.Inpower120);
     Expower120 = (data.Expower120);
     
  var myChart1 = document.getElementById('myChart1').getContext('2d');
  var massChart1 = new Chart(myChart1, {
    // The type of chart we want to create
    type: 'bar',
    plugins: [ChartDataLabels],

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'January 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],            
            borderColor: 'rgb(0, 200, 0)',
            data: [Mechanical120, Electrical120, Production120, Inpower120, Expower120]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });

          },
    error: function (jqXHR, status, errorThrown)
    {
    var myChart1 = document.getElementById('myChart1').getContext('2d');
  var massChart1 = new Chart(myChart1, {
    // The type of chart we want to create
    type: 'bar',
    plugins: [ChartDataLabels],

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'January 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],            
            borderColor: 'rgb(0, 200, 0)',
            data: [0, 0, 0, 0, 0]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });
  }
   });
  });
  

  $(document).on('click', '#btn220', function(){
  $('.hold2').toggle(500);
  $('.hold1').hide(500);  $('.hold3').hide(500);
  $('.hold4').hide(500);  $('.hold5').hide(500);
  $('.hold6').hide(500);  $('.hold7').hide(500);
  $('.hold8').hide(500);  $('.hold9').hide(500);
  $('.hold10').hide(500);  $('.hold11').hide(500);
  $('.hold12').hide(500); 
  $.ajax({
    url : "pst2.php",
    type: "POST",
    dataType: "json",
         success: function(data){ 
     Mechanical220 = (data.Mechanical220);
     Electrical220 = (data.Electrical220);
     Production220 = (data.Production220);
     Inpower220 = (data.Inpower220);
     Expower220 = (data.Expower220);
     var myChart2 = document.getElementById('myChart2').getContext('2d');
  var massChart2 = new Chart(myChart2, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'February 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(0, 200, 0)',
            data: [Mechanical220, Electrical220, Production220, Inpower220, Expower220]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });
          },
    error: function (jqXHR, status, errorThrown)
    {
     var myChart2 = document.getElementById('myChart2').getContext('2d');
  var massChart2 = new Chart(myChart2, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'February 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(0, 200, 0)',
            data: [0, 0, 0, 0, 0]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });   
     }
   });
  });

  $("#btn320").click(function(){
     
  $('.hold3').toggle(500);
  $('.hold1').hide(500);  $('.hold2').hide(500);
  $('.hold4').hide(500);  $('.hold5').hide(500);
  $('.hold6').hide(500);  $('.hold7').hide(500);
  $('.hold8').hide(500);  $('.hold9').hide(500);
  $('.hold10').hide(500);  $('.hold11').hide(500);
  $('.hold12').hide(500); 
  $.ajax({
    url : "pst3.php",
    type: "POST",
    dataType: "json",
         success: function(data){ 
     Mechanical320 = (data.Mechanical320);
     Electrical320 = (data.Electrical320);
     Production320 = (data.Production320);
     Inpower320 = (data.Inpower320);
     Expower320 = (data.Expower320);
var myChart3 = document.getElementById('myChart3').getContext('2d');
  var massChart3 = new Chart(myChart3, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'March 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(0, 200, 0)',
            data: [Mechanical320, Electrical320, Production320, Inpower320, Expower320]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });
          },
    error: function (jqXHR, status, errorThrown)
    {
     var myChart3 = document.getElementById('myChart3').getContext('2d');
  var massChart3 = new Chart(myChart3, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'March 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(0, 200, 0)',
            data: [0, 0, 0, 0, 0]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });   
     }
   });
  });

  $("#btn420").click(function(){
    
  $('.hold4').toggle(500);
  $('.hold1').hide(500);  $('.hold2').hide(500);
  $('.hold3').hide(500);  $('.hold5').hide(500);
  $('.hold6').hide(500);  $('.hold7').hide(500);
  $('.hold8').hide(500);  $('.hold9').hide(500);
  $('.hold10').hide(500);  $('.hold11').hide(500);
  $('.hold12').hide(500);
  $.ajax({
    url : "pst4.php",
    type: "POST",
    dataType: "json",
         success: function(data){ 
     Mechanical420 = (data.Mechanical420);
     Electrical420 = (data.Electrical420);
     Production420 = (data.Production420);
     Inpower420 = (data.Inpower420);
     Expower420 = (data.Expower420);
      var myChart4 = document.getElementById('myChart4').getContext('2d');
      var massChart4 = new Chart(myChart4, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'April 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                   
            borderColor: 'rgb(0, 0, 200)',
            data: [Mechanical420, Electrical420, Production420, Inpower420, Expower420]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });

          },
    error: function (jqXHR, status, errorThrown)
    {
    var myChart4 = document.getElementById('myChart4').getContext('2d');
      var massChart4 = new Chart(myChart4, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'April 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                   
            borderColor: 'rgb(0, 0, 200)',
            data: [0, 0, 0, 0, 0]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });
     }
   });
  });

  $("#btn520").click(function(){
     
  $('.hold5').toggle(500);
  $('.hold1').hide(500);  $('.hold2').hide(500);
  $('.hold4').hide(500);  $('.hold3').hide(500);
  $('.hold6').hide(500);  $('.hold7').hide(500);
  $('.hold8').hide(500);  $('.hold9').hide(500);
  $('.hold10').hide(500);  $('.hold11').hide(500);
  $('.hold12').hide(500); 
  $.ajax({
    url : "pst5.php",
    type: "POST",
    dataType: "json",
         success: function(data){ 
     Mechanical520 = (data.Mechanical520);
     Electrical520 = (data.Electrical520);
     Production520 = (data.Production520);
     Inpower520 = (data.Inpower520);
     Expower520 = (data.Expower520);
     var myChart5 = document.getElementById('myChart5').getContext('2d');
  var massChart5 = new Chart(myChart5, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'May 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],        
            borderColor: 'rgb(0, 0, 200)',
            data: [Mechanical520, Electrical520, Production520, Inpower520, Expower520]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });

          },
    error: function (jqXHR, status, errorThrown)
    {
     var myChart5 = document.getElementById('myChart5').getContext('2d');
  var massChart5 = new Chart(myChart5, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'May 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],        
            borderColor: 'rgb(0, 0, 200)',
            data: [0, 0, 0, 0, 0]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });   
     }
   });
  });

  $("#btn620").click(function(){
     
  $('.hold6').toggle(500);
  $('.hold1').hide(500);  $('.hold3').hide(500);
  $('.hold4').hide(500);  $('.hold5').hide(500);
  $('.hold2').hide(500);  $('.hold7').hide(500);
  $('.hold8').hide(500);  $('.hold9').hide(500);
  $('.hold10').hide(500);  $('.hold11').hide(500);
  $('.hold12').hide(500);
  $.ajax({
    url : "pst6.php",
    type: "POST",
    dataType: "json",
         success: function(data){ 
     Mechanical620 = (data.Mechanical620);
     Electrical620 = (data.Electrical620);
     Production620 = (data.Production620);
     Inpower620 = (data.Inpower620);
     Expower620 = (data.Expower620);
     var myChart6 = document.getElementById('myChart6').getContext('2d');
  var massChart6 = new Chart(myChart6, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'June 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(0, 0, 200)',
            data: [Mechanical620, Electrical620, Production620, Inpower620, Expower620]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });

          },
    error: function (jqXHR, status, errorThrown)
    {
     var myChart6 = document.getElementById('myChart6').getContext('2d');
  var massChart6 = new Chart(myChart6, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'June 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(0, 0, 200)',
            data: [0, 0, 0, 0, 0]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  }); 
     }
   });
  });

  $("#btn720").click(function(){
     
  $('.hold7').toggle(500);
  $('.hold1').hide(500);  $('.hold3').hide(500);
  $('.hold4').hide(500);  $('.hold5').hide(500);
  $('.hold6').hide(500);  $('.hold2').hide(500);
  $('.hold8').hide(500);  $('.hold9').hide(500);
  $('.hold10').hide(500);  $('.hold11').hide(500);
  $('.hold12').hide(500); 
  $.ajax({
    url : "pst7.php",
    type: "POST",
    dataType: "json",
         success: function(data){ 
     Mechanical720 = (data.Mechanical720);
     Electrical720 = (data.Electrical720);
     Production720 = (data.Production720);
     Inpower720 = (data.Inpower720);
     Expower720 = (data.Expower720);
     var myChart7 = document.getElementById('myChart7').getContext('2d');
  var massChart7 = new Chart(myChart7, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'July 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(255, 0, 0)',
            data: [Mechanical720, Electrical720, Production720, Inpower720, Expower720]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });

          },
    error: function (jqXHR, status, errorThrown)
    {
     var myChart7 = document.getElementById('myChart7').getContext('2d');
  var massChart7 = new Chart(myChart7, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'July 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(255, 0, 0)',
            data: [0, 0, 0, 0, 0]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });
     }
   });
  });

  $("#btn820").click(function(){
     
  $('.hold8').toggle(500);
  $('.hold1').hide(500);  $('.hold3').hide(500);
  $('.hold4').hide(500);  $('.hold5').hide(500);
  $('.hold6').hide(500);  $('.hold7').hide(500);
  $('.hold2').hide(500);  $('.hold9').hide(500);
  $('.hold10').hide(500);  $('.hold11').hide(500);
  $('.hold12').hide(500); 
  $.ajax({
    url : "pst8.php",
    type: "POST",
    dataType: "json",
         success: function(data){ 
     Mechanical820 = (data.Mechanical820);
     Electrical820 = (data.Electrical820);
     Production820 = (data.Production820);
     Inpower820 = (data.Inpower820);
     Expower820 = (data.Expower820);
      var myChart8 = document.getElementById('myChart8').getContext('2d');
      var massChart8 = new Chart(myChart8, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'August 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                   
            borderColor: 'rgb(255, 0, 0)',
            data: [Mechanical820, Electrical820, Production820, Inpower820, Expower820]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });

          },
    error: function (jqXHR, status, errorThrown)
    {
      var myChart8 = document.getElementById('myChart8').getContext('2d');
      var massChart8 = new Chart(myChart8, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'August 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                   
            borderColor: 'rgb(255, 0, 0)',
            data: [0, 0, 0, 0, 0]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });  
     }
   });
  });

  $("#btn920").click(function(){
     
  $('.hold9').toggle(500);
  $('.hold1').hide(500);  $('.hold3').hide(500);
  $('.hold4').hide(500);  $('.hold5').hide(500);
  $('.hold6').hide(500);  $('.hold7').hide(500);
  $('.hold8').hide(500);  $('.hold2').hide(500);
  $('.hold10').hide(500);  $('.hold11').hide(500);
  $('.hold12').hide(500); 
  $.ajax({
    url : "pst9.php",
    type: "POST",
    dataType: "json",
         success: function(data){ 
     Mechanical920 = (data.Mechanical920);
     Electrical920 = (data.Electrical920);
     Production920 = (data.Production920);
     Inpower920 = (data.Inpower920);
     Expower920 = (data.Expower920);
     var myChart9 = document.getElementById('myChart9').getContext('2d');
     var massChart9 = new Chart(myChart9, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'September 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(255, 0, 0)',
            data: [Mechanical920, Electrical920, Production920, Inpower920, Expower920]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });

          },
    error: function (jqXHR, status, errorThrown)
    {
     var myChart9 = document.getElementById('myChart9').getContext('2d');
     var massChart9 = new Chart(myChart9, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'September 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(255, 0, 0)',
            data: [0, 0, 0, 0, 0]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });
     }
   });
  });

  $("#btn1020").click(function(){
     
  $('.hold10').toggle(500);
  $('.hold1').hide(500);  $('.hold3').hide(500);
  $('.hold4').hide(500);  $('.hold5').hide(500);
  $('.hold6').hide(500);  $('.hold7').hide(500);
  $('.hold8').hide(500);  $('.hold9').hide(500);
  $('.hold2').hide(500);  $('.hold11').hide(500);
  $('.hold12').hide(500); 
  $.ajax({
    url : "pst10.php",
    type: "POST",
    dataType: "json",
         success: function(data){ 
     Mechanical1020 = (data.Mechanical1020);
     Electrical1020 = (data.Electrical1020);
     Production1020 = (data.Production1020);
     Inpower1020 = (data.Inpower1020);
     Expower1020 = (data.Expower1020);
      var myChart10 = document.getElementById('myChart10').getContext('2d');
  var massChart10 = new Chart(myChart10, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'October 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(255, 240, 0)',
            data: [Mechanical1020, Electrical1020, Production1020, Inpower1020, Expower1020]
        }]
    },

    // Configuration options go here
  options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });

          },
    error: function (jqXHR, status, errorThrown)
    {
    var myChart10 = document.getElementById('myChart10').getContext('2d');
  var massChart10 = new Chart(myChart10, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'October 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(255, 240, 0)',
            data: [0, 0, 0, 0, 0]
        }]
    },

    // Configuration options go here
  options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });
     }
   });
  });

  $("#btn1120").click(function(){
     
  $('.hold11').toggle(500);
  $('.hold1').hide(500);  $('.hold3').hide(500);
  $('.hold4').hide(500);  $('.hold5').hide(500);
  $('.hold6').hide(500);  $('.hold7').hide(500);
  $('.hold8').hide(500);  $('.hold9').hide(500);
  $('.hold10').hide(500);  $('.hold2').hide(500);
  $('.hold12').hide(500);
  $.ajax({
    url : "pst11.php",
    type: "POST",
    dataType: "json",
         success: function(data){ 
     Mechanical1120 = (data.Mechanical1120);
     Electrical1120 = (data.Electrical1120);
     Production1120 = (data.Production1120);
     Inpower1120 = (data.Inpower1120);
     Expower1120 = (data.Expower1120);
     var myChart11 = document.getElementById('myChart11').getContext('2d');
  var massChart11 = new Chart(myChart11, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'November 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(255, 240, 0)',
            data: [Mechanical1120, Electrical1120, Production1120, Inpower1120, Expower1120]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });

          },
    error: function (jqXHR, status, errorThrown)
    {
      var myChart11 = document.getElementById('myChart11').getContext('2d');
  var massChart11 = new Chart(myChart11, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'November 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(255, 240, 0)',
            data: [0, 0, 0, 0, 0]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });
     }
   });
  });

  $("#btn1220").click(function(){
     
  $('.hold12').toggle(500);
  $('.hold1').hide(500);  $('.hold3').hide(500);
  $('.hold4').hide(500);  $('.hold5').hide(500);
  $('.hold6').hide(500);  $('.hold7').hide(500);
  $('.hold8').hide(500);  $('.hold9').hide(500);
  $('.hold10').hide(500);  $('.hold11').hide(500);
  $('.hold2').hide(500); 
  $.ajax({
    url : "pst12.php",
    type: "POST",
    dataType: "json",
         success: function(data){ 
     Mechanical1220 = (data.Mechanical1220);
     Electrical1220 = (data.Electrical1220);
     Production1220 = (data.Production1220);
     Inpower1220 = (data.Inpower1220);
     Expower1220 = (data.Expower1220);
     var myChart12 = document.getElementById('myChart12').getContext('2d');
  var massChart12 = new Chart(myChart12, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'December 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(255, 240, 0)',
            data: [Mechanical1220, Electrical1220, Production1220, Inpower1220, Expower1220]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });

          },
    error: function (jqXHR, status, errorThrown)
    {
    var myChart12 = document.getElementById('myChart12').getContext('2d');
  var massChart12 = new Chart(myChart12, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Mechanical', 'Electrical', 'Production', 'Int Power', 'Ext Power'],
        datasets: [{
            label: 'December 2020',
            backgroundColor:[
            'rgba(0, 255, 0, 0.9)',
            'rgba(0, 0, 255, 0.9)',
            'rgba(255, 255, 0, 0.9)',
            'rgba(255, 0, 255, 0.9)',
            'rgba(255, 0, 0, 0.9)'
            ],                    
            borderColor: 'rgb(255, 240, 0)',
            data: [0, 0, 0, 0, 0]
        }]
    },

    // Configuration options go here
    options: {
      plugins: {
        datalabels: {
          color: '#770',
          font:{
            size: 26,
            weight: 'bold'
          }
        }
        },
      title:{
        display: true,
        text: 'Downtime Analysis', 
        fontSize: 30
      },
      legend: {
        labels: {
          fontSize: 30
        }
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true,
                fontSize: 26
            }
        }],
        xAxes: [{
            ticks: {
                fontSize: 26
            }
        }]
    }
    }
  });
     }
   });
  });