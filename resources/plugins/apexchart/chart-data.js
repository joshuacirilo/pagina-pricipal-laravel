'use strict';

$(document).ready(function() {

	function generateData(baseval, count, yrange) {
		var i = 0;
		var series = [];
		while (i < count) {
			var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
			var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
			var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;

			series.push([x, y, z]);
			baseval += 86400000;
			i++;
		}
		return series;
	}
	
	// Chart

	if($('#instructor_chart').length > 0) {
	var options = {
			series: [{
				name: "Current month",
				data: [0, 10, 40, 43, 40, 25, 35, 25, 40, 30]
			},
		],
		colors: ['#FF9364'],
          chart: {
          height: 300,
          type: 'area',
		  toolbar: {
				show: false
			},
          zoom: {
            enabled: false
          }
        },
		markers: {
			size: 3,
		},
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth',
		  width: 3,
        },
		legend: {
			position: 'top',
			horizontalAlign: 'right',
		 },
        grid: {
          show: false,
        },
		yaxis: {
			axisBorder: {
				show: true,
			},
		},
        xaxis: {
          categories: ['', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			}
    };

    var chart = new ApexCharts(document.querySelector("#instructor_chart"), options);
    chart.render();
	}
	
	// Simple Column
	if($('#order_chart').length > 0) {
	var sCol = {
		chart: {
			height: 350,
			type: 'bar',
			toolbar: {
			  show: false,
			}
		},
		plotOptions: {
			bar: {
				horizontal: false,
				columnWidth: '20%',
				endingShape: 'rounded', 
				startingShape: 'rounded'  
			},
		},
		 colors: ['#1D9CFD'],
		dataLabels: {
			enabled: false
		},
		stroke: {
			show: true,
			width: 2,
			colors: ['transparent']
		},
		series: [{
			name: 'Revenue',
			data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
		}],
		xaxis: {
			categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
		},
		fill: {
			opacity: 1

		},
		tooltip: {
			y: {
				formatter: function (val) {
					return "$ " + val + " thousands"
				}
			}
		}
	}

	var chart = new ApexCharts(
		document.querySelector("#order_chart"),
		sCol
	);

	chart.render();
	}

	if($('#earnigs_chart').length > 0 ){
		var options = {
		  series: [{
			name: "Earnings",
			data: [25, 40, 30, 55, 25, 35, 25,50,20,40,20,50]
		}],
		  chart: {
		  height: 273,
		  type: 'area',
		  zoom: {
			enabled: false
		  }
		},
		colors: ['#FF4667'],
		dataLabels: {
		  enabled: false
		},
		stroke: {
		  curve: 'straight'
		},
		title: {
		  text: '',
		  align: 'left'
		},
		// grid: {
		//   row: {
		//     colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
		//     opacity: 0.5
		//   },
		// },
		xaxis: {
		  categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		},
		yaxis: {
		  min: 10,
		  max: 60,
		  tickAmount: 5,
			  labels: {
				formatter: (val) => {
				  return val / 1 + 'K'
				}
			  }
			},
			legend: {
			  position: 'top',
			  horizontalAlign: 'left'
			}
		};
	  
		var chart = new ApexCharts(document.querySelector("#earnigs_chart"), options);
		chart.render();
	}

	// Deals Stage

	if ($('#earnnings_chart').length > 0) {
		var sColStacked = {
		  chart: {
			height: 290,
			type: 'bar',
			stacked: true,
			toolbar: {
			  show: false,
			}
		  },
		  responsive: [{
			breakpoint: 480,
			options: {
			  legend: {
				position: 'bottom',
				offsetX: -10,
				offsetY: 0
			  }
			}
		  }],
		  plotOptions: {
			bar: {
			  borderRadius: 5,
			  horizontal: false,
			  endingShape: 'rounded'
			},
		  },
		  series: [{
			name: 'Earnings',
			data: [80, 100, 70, 110, 80, 90, 85, 85, 110, 30, 100, 90]
		  }],
		  xaxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
			labels: {
			  style: {
				colors: '#4D4D4D', 
				fontSize: '13px',
			  }
			}
		  },
		  yaxis: {
			labels: {
			  offsetX: -15,
			  style: {
				colors: '#4D4D4D', 
				fontSize: '13px',
			  }
			}
		  },
		  grid: {
			borderColor: '#4D4D4D',
			strokeDashArray: 5
		  },
		  legend: {
			show: false
		  },
		  dataLabels: {
			enabled: false // Disable data labels
		  },
		  fill: {
			type: 'gradient',
			gradient: {
			  shade: 'dark',
			  type: 'linear',
			  shadeIntensity: 0.35,
			  gradientToColors: ['#392C7D'], // Second gradient color
			  inverseColors: false,
			  opacityFrom: 1,
			  opacityTo: 1,
			  stops: [0, 100],
			  angle: 90 // This sets the gradient direction from top to bottom
			}
		  },
		}
	  
		var chart = new ApexCharts(
		  document.querySelector("#earnnings_chart"),
		  sColStacked
		);
	  
		chart.render();
	  }
	  
		  
});