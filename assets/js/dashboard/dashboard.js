//Load Symptoms

 $.ajax({
            url: base_url+'index.php/dashboard/symptom_list',
            type: 'POST',
            dataType: 'json',
            data: { "date":"" }
        })
        .done(function (data) {

            var chart = AmCharts.makeChart( "chartdiv", {
        	  "type": "pie",
        	  "theme": "light",
        	  "titles": [ {
        	    "text": "Symptoms",
        	    "size": 15
        	  } ],
        	  "dataProvider": data,
        	  "valueField": "count",
        	  "titleField": "name",
        	  "startEffect": "elastic",
        	  "startDuration": 2,
        	  "labelRadius": 15,
        	  "innerRadius": "50%",
        	  "depth3D": 10,
        	  "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
        	  "angle": 15,
        	  "export": {
        	    "enabled": true
        	  }
        	} );

        })
        .fail(function (data) {

        })

        function gen_pie_chart(date){

          $.ajax({
                     url: base_url+'index.php/dashboard/symptom_list',
                     type: 'POST',
                     dataType: 'json',
                     data: { "date":date }
                 })
                 .done(function (data) {

                     var chart = AmCharts.makeChart( "chartdiv", {
                 	  "type": "pie",
                 	  "theme": "light",
                 	  "titles": [ {
                 	    "text": "Complaints",
                 	    "size": 15
                 	  } ],
                 	  "dataProvider": data,
                 	  "valueField": "count",
                 	  "titleField": "name",
                 	  "startEffect": "elastic",
                 	  "startDuration": 2,
                 	  "labelRadius": 15,
                 	  "innerRadius": "50%",
                 	  "depth3D": 10,
                 	  "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                 	  "angle": 15,
                 	  "export": {
                 	    "enabled": true
                 	  }
                 	} );

                 })
                 .fail(function (data) {

                 })

        }


//Income list bar chart

        $.ajax({
                   url: base_url+'index.php/dashboard/last_seven_days_income',
                   type: 'POST',
                   dataType: 'json',
                   data: { "date":"" }
               })
               .done(function (data) {

                 // Income list bar chart
                 am4core.useTheme(am4themes_animated);

                 var chart = am4core.create("chartdiv1", am4charts.XYChart);
                 chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                 chart.data = data;

                 var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                 categoryAxis.renderer.grid.template.location = 0;
                 categoryAxis.dataFields.category = "date";

                 var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                 valueAxis.min = 0;
                 valueAxis.max = 24000;
                 valueAxis.strictMinMax = true;
                 valueAxis.renderer.minGridDistance = 30;
                 // axis break
                 var axisBreak = valueAxis.axisBreaks.create();
                 axisBreak.startValue = 2100;
                 axisBreak.endValue = 22900;
                 axisBreak.breakSize = 0.005;

                 // make break expand on hover
                 var hoverState = axisBreak.states.create("hover");
                 hoverState.properties.breakSize = 1;
                 hoverState.properties.opacity = 0.1;
                 hoverState.transitionDuration = 1500;

                 axisBreak.defaultState.transitionDuration = 1000;

                 var series = chart.series.push(new am4charts.ColumnSeries());
                 series.dataFields.categoryX = "date";
                 series.dataFields.valueY = "amount";
                 series.columns.template.tooltipText = "{valueY.value}";
                 series.columns.template.tooltipY = 0;
                 series.columns.template.strokeOpacity = 0;

                 // as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
                 series.columns.template.adapter.add("fill", (fill, target) => {
                   return chart.colors.getIndex(target.dataItem.index);
                 });

               })
               .fail(function (data) {

               })
