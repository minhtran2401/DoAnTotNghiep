$(document).ready(function () {
   
   

    am4core.ready(function() {

// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end

        var chart = am4core.create("thongkesanpham", am4plugins_forceDirected.ForceDirectedTree);
        chart.legend = new am4charts.Legend();
        var networkSeries = chart.series.push(new am4plugins_forceDirected.ForceDirectedSeries())

        $.get(API_URL + '/thong-ke-san-pham').then(function (response) {
           // console.log(response);
            chart.data = response;


            // collapsible force-directed tree
            networkSeries.dataFields.linkWith = "linkWith";
            networkSeries.dataFields.name = "name";
            networkSeries.dataFields.id = "value";
            networkSeries.dataFields.value = "value";
            networkSeries.dataFields.children = "children";

            networkSeries.nodes.template.tooltipText = "{name}";
            networkSeries.nodes.template.fillOpacity = 1;

            networkSeries.nodes.template.label.text = "{name}"
            networkSeries.fontSize = 12;
            networkSeries.maxLevels = 4;
            networkSeries.maxRadius = am4core.percent(10);
            networkSeries.manyBodyStrength = -16;
            networkSeries.nodes.template.label.hideOversized = true;
            networkSeries.nodes.template.label.truncate = true;
        });
        //enable export
        chart.exporting.menu = new am4core.ExportMenu();

    }); // end am4core.ready()


    // thống kê số lượng sản phẩm

    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end
        
        // Create chart instance
        var chart = am4core.create("thongkesoluongsanpham", am4charts.PieChart3D);
        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
        chart.legend = new am4charts.Legend();
        var series = chart.series.push(new am4charts.PieSeries3D());
        $.get(API_URL + '/thong-ke-so-luong-san-pham').then(function (response) {
            chart.data = response;
            series.dataFields.value = "quanty";
            series.dataFields.category = "name";
        });
         chart.exporting.menu = new am4core.ExportMenu();
        }); // end am4core.ready()
  
    // thống kê đơn hàng theo ngày //////////////////////////////////

    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end
        
        // Create chart instance
        var chart = am4core.create("donhanghangngay", am4charts.XYChart);
         $.get(API_URL + '/thong-ke-don-hang').then(function (response) {
        // Add data
        chart.data = response;
        
        chart.dateFormatter.inputDateFormat = "yyyy-MM-dd";

        // Create axes
        var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        
        // Create series
        var series = chart.series.push(new am4charts.LineSeries());
        series.dataFields.valueY = "value";
        series.dataFields.dateX = "date";
        series.tooltipText = "{value}"
        series.strokeWidth = 2;
        series.minBulletDistance = 15;
        
        // Drop-shaped tooltips
        series.tooltip.background.cornerRadius = 20;
        series.tooltip.background.strokeOpacity = 0;
        series.tooltip.pointerOrientation = "vertical";
        series.tooltip.label.minWidth = 40;
        series.tooltip.label.minHeight = 40;
        series.tooltip.label.textAlign = "middle";
        series.tooltip.label.textValign = "middle";
        
        // Make bullets grow on hover
        var bullet = series.bullets.push(new am4charts.CircleBullet());
        bullet.circle.strokeWidth = 2;
        bullet.circle.radius = 4;
        bullet.circle.fill = am4core.color("#fff");
        
        var bullethover = bullet.states.create("hover");
        bullethover.properties.scale = 1.3;
        
        // Make a panning cursor
        chart.cursor = new am4charts.XYCursor();
        chart.cursor.behavior = "panXY";
        chart.cursor.xAxis = dateAxis;
        chart.cursor.snapToSeries = series;
        
        // Create vertical scrollbar and place it before the value axis
        chart.scrollbarY = new am4core.Scrollbar();
        chart.scrollbarY.parent = chart.leftAxesContainer;
        chart.scrollbarY.toBack();
        
        // Create a horizontal scrollbar with previe and place it underneath the date axis
        chart.scrollbarX = new am4charts.XYChartScrollbar();
        chart.scrollbarX.series.push(series);
        chart.scrollbarX.parent = chart.bottomAxesContainer;
        
        dateAxis.start = 0.79;
        dateAxis.keepSelection = true;
         });
            chart.exporting.menu = new am4core.ExportMenu();
        }); // end am4core.ready()
      

    // thống kê thu nhập
    
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_frozen);
        am4core.useTheme(am4themes_animated);
        // Themes end
        
        /**
         * Chart design taken from Samsung health app
         */
        
        var chart = am4core.create("thongkethunhap", am4charts.XYChart);
        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
        $.get(API_URL + '/thong-ke-thu-nhap').then(function (response) {
            chart.data = response;
        
        chart.dateFormatter.inputDateFormat = "YYYY-MM-dd";
        chart.zoomOutButton.disabled = false;
        
        var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
        dateAxis.renderer.grid.template.strokeOpacity = 0;
        dateAxis.renderer.minGridDistance = 10;
        dateAxis.dateFormats.setKey("day", "d");
        dateAxis.tooltip.hiddenState.properties.opacity = 1;
        dateAxis.tooltip.hiddenState.properties.visible = true;
        
        
        dateAxis.tooltip.adapter.add("x", function (x, target) {
            return am4core.utils.spritePointToSvg({ x: chart.plotContainer.pixelX, y: 0 }, chart.plotContainer).x + chart.plotContainer.pixelWidth / 2;
        })
        
        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.renderer.inside = true;
        valueAxis.renderer.labels.template.fillOpacity = 0.3;
        valueAxis.renderer.grid.template.strokeOpacity = 0;
        valueAxis.min = 0;
        valueAxis.cursorTooltipEnabled = false;
        
        // goal guides
        var axisRange = valueAxis.axisRanges.create();
        axisRange.value = 5000000;
        axisRange.grid.strokeOpacity = 0.1;
        axisRange.label.text = "Đạt chỉ tiêu";
        axisRange.label.align = "right";
        axisRange.label.verticalCenter = "bottom";
        axisRange.label.fillOpacity = 0.8;
        
        valueAxis.renderer.gridContainer.zIndex = 1;
        
        var axisRange2 = valueAxis.axisRanges.create();
        axisRange2.value = 8000000;
        axisRange2.grid.strokeOpacity = 0.1;
        axisRange2.label.text = "Vượt chỉ tiêu";
        axisRange2.label.align = "right";
        axisRange2.label.verticalCenter = "bottom";
        axisRange2.label.fillOpacity = 0.8;
        
        var series = chart.series.push(new am4charts.ColumnSeries);
        series.dataFields.valueY = "steps";
        series.dataFields.dateX = "date";
        series.tooltipText = "{valueY.value}";
        series.tooltip.pointerOrientation = "vertical";
        series.tooltip.hiddenState.properties.opacity = 1;
        series.tooltip.hiddenState.properties.visible = true;
        series.tooltip.adapter.add("x", function (x, target) {
            return am4core.utils.spritePointToSvg({ x: chart.plotContainer.pixelX, y: 0 }, chart.plotContainer).x + chart.plotContainer.pixelWidth / 2;
        })
        
        var columnTemplate = series.columns.template;
        columnTemplate.width = 30;
        columnTemplate.column.cornerRadiusTopLeft = 20;
        columnTemplate.column.cornerRadiusTopRight = 20;
        columnTemplate.strokeOpacity = 0;
        
        columnTemplate.adapter.add("fill", function (fill, target) {
            var dataItem = target.dataItem;
            if (dataItem.valueY > 600000) {
                return chart.colors.getIndex(0);
            }
            else {
                return am4core.color("#a8b3b7");
            }
        })
        
        var cursor = new am4charts.XYCursor();
        cursor.behavior = "panX";
        chart.cursor = cursor;
        cursor.lineX.disabled = true;
        
       
        dateAxis.showOnInit = true;
            // // ...
            // chart.events.on("validated", function () { 
            // dateAxis.zoomToDates(
            //     new Date(2020, 0),
            //     new Date(2020, 1),
            //     false,
            //     true // this makes zoom instant
            // );
            // });
            chart.addListener("rendered", function(event) {
                event.chart.dateAxis.zoomToDates(new Date(2020, 10,21), new Date(2020,1,1),false,true,);
                dateAxis.start = 0;
                dateAxis.end = 1;
                dateAxis.keepSelection = true;
              });
           
        var middleLine = chart.plotContainer.createChild(am4core.Line);
        middleLine.strokeOpacity = 1;
        middleLine.stroke = am4core.color("#000000");
        middleLine.strokeDasharray = "2,2";
        middleLine.align = "center";
        middleLine.zIndex = 1;
        middleLine.adapter.add("y2", function (y2, target) {
            return target.parent.pixelHeight;
        })
        
        cursor.events.on("cursorpositionchanged", updateTooltip);
        dateAxis.events.on("datarangechanged", updateTooltip);
        
        function updateTooltip() {
            dateAxis.showTooltipAtPosition(0.5);
            series.showTooltipAtPosition(0.5, 0);
            series.tooltip.validate(); // otherwise will show other columns values for a second
        }
        
        
        var label = chart.plotContainer.createChild(am4core.Label);
        label.text = "Kéo biểu đồ để thay đổi ngày";
        label.x = 100;
        label.y = 50;
        })
       var ok = chart.exporting.menu = new am4core.ExportMenu();
       ok.x = 80;
       ok.y =50;
        }); // end am4core.ready()
        
        
        ///////////////////////////////////////////////

        am4core.ready(function() {

            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end
            
            // Create chart instance
            var chart = am4core.create("sanphambanchay", am4charts.XYChart);
            chart.scrollbarX = new am4core.Scrollbar();
            
            $.get(API_URL + '/san-pham-ban-chay').then(function (response) {
                // Add data
                chart.data = response;
            // Create axes
            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "name";
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.minGridDistance = 30;
            categoryAxis.renderer.labels.template.horizontalCenter = "right";
            categoryAxis.renderer.labels.template.verticalCenter = "middle";
            categoryAxis.renderer.labels.template.rotation = 270;
            categoryAxis.tooltip.disabled = true;
            categoryAxis.renderer.minHeight = 110;
            
            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.renderer.minWidth = 50;
            
            // Create series
            var series = chart.series.push(new am4charts.ColumnSeries());
            series.sequencedInterpolation = true;
            series.dataFields.valueY = "value";
            series.dataFields.categoryX = "name";
            series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
            series.columns.template.strokeWidth = 0;
            
            series.tooltip.pointerOrientation = "vertical";
            
            series.columns.template.column.cornerRadiusTopLeft = 10;
            series.columns.template.column.cornerRadiusTopRight = 10;
            series.columns.template.column.fillOpacity = 0.8;
            
            // on hover, make corner radiuses bigger
            var hoverState = series.columns.template.column.states.create("hover");
            hoverState.properties.cornerRadiusTopLeft = 0;
            hoverState.properties.cornerRadiusTopRight = 0;
            hoverState.properties.fillOpacity = 1;
            
            series.columns.template.adapter.add("fill", function(fill, target) {
              return chart.colors.getIndex(target.dataItem.index);
            });
            
            // Cursor
            chart.cursor = new am4charts.XYCursor();
            chart.exporting.menu = new am4core.ExportMenu();
            }); // end am4core.ready()
        });


        //////////////////////////// Khách HÀng tiềm năng ////////////////////////////////////

        am4core.ready(function() {

            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end
            
            var iconPath = "M53.5,476c0,14,6.833,21,20.5,21s20.5-7,20.5-21V287h21v189c0,14,6.834,21,20.5,21 c13.667,0,20.5-7,20.5-21V154h10v116c0,7.334,2.5,12.667,7.5,16s10.167,3.333,15.5,0s8-8.667,8-16V145c0-13.334-4.5-23.667-13.5-31 s-21.5-11-37.5-11h-82c-15.333,0-27.833,3.333-37.5,10s-14.5,17-14.5,31v133c0,6,2.667,10.333,8,13s10.5,2.667,15.5,0s7.5-7,7.5-13 V154h10V476 M61.5,42.5c0,11.667,4.167,21.667,12.5,30S92.333,85,104,85s21.667-4.167,30-12.5S146.5,54,146.5,42 c0-11.335-4.167-21.168-12.5-29.5C125.667,4.167,115.667,0,104,0S82.333,4.167,74,12.5S61.5,30.833,61.5,42.5z"
            
            
            
            var chart = am4core.create("khachhangtiemnang", am4charts.SlicedChart);
            chart.hiddenState.properties.opacity = 0; // this makes initial fade in effect
            
            $.get(API_URL + '/khach-hang-tiem-nang').then(function (response) {
                // Add data
                chart.data = response;
            
            var series = chart.series.push(new am4charts.PictorialStackedSeries());
            series.dataFields.value = "value";
            series.dataFields.category = "name";
            series.alignLabels = true;
            
            series.maskSprite.path = iconPath;
            series.ticks.template.locationX = 1;
            series.ticks.template.locationY = 0.5;
            
            series.labelsContainer.width = 200;
            
            chart.legend = new am4charts.Legend();
            chart.legend.position = "left";
            chart.legend.valign = "bottom";
            chart.exporting.menu = new am4core.ExportMenu();
            }); // end am4core.ready()
        });

});