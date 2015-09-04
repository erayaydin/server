$(function() {

    // REAL TIME CHART IMPLEMENTATION START

    var data = [],
        totalPoints = 50;

    function getRandomData() {

        if (data.length > 0)
            data = data.slice(1);

        // Do a random walk

        while (data.length < totalPoints) {

            var prev = data.length > 0 ? data[data.length - 1] : 50;
            var random_value = randomFromInterval(1, 9);
            var random_value_2 = randomFromInterval(1, 9);
            var y = prev + random_value - random_value_2;
            if (y < 0) {
                y = 0;
            } else if (y > 100) {
                y = 100;
            }

            data.push(y);
        }

        // Zip the generated y values with the x values

        var res = [];
        for (var i = 0; i < data.length; ++i) {
            res.push([i, data[i]])
        }

        return [res, y];
    }

    function randomFromInterval(from,to)
    {
        return Math.floor(Math.random()*(to-from+1)+from);
    }

    // Set up the control widget

    var updateInterval = 150;
    $("#updateInterval").val(updateInterval).change(function () {
        var v = $(this).val();
        if (v && !isNaN(+v)) {
            updateInterval = +v;
            if (updateInterval < 1) {
                updateInterval = 1;
            } else if (updateInterval > 2000) {
                updateInterval = 2000;
            }
            $(this).val("" + updateInterval);
        }
    });

    random_data = getRandomData();
    var plot = $.plot("#placeholder", [ random_data[0] ], {
        grid: {
            borderWidth: 0
        },
        series: {
            color: "#3498DB",
            lines: {
                lineWidth: 4,
                fill: 0.1
            },
            shadowSize: 0, // Drawing is faster without shadows
            points: {
                radius: 5
            }
        },
        yaxis: {
            min: 0,
            max: 100,
            color: "#e5e5e5",
            ticks: 4,
            font: {
                color: "#aaa"
            }
        },
        xaxis: {
            color: "#eee",
            ticks: 10,
            // tickLength: 7,
            font: {
                color: "#aaa"
            }
            // show: false
        }
    });

    function update_plot() {
        random_data = getRandomData();
        plot.setData([random_data][0]);
        // Since the axes don't change, we don't need to call plot.setupGrid()
        $('#plot-chart-value').text(random_data[1]);
        plot.draw();
        setTimeout(update_plot, updateInterval);
    }


    update_plot();

    // END REAL TIME CHART IMPLEMENTATION

    var g = new JustGage({
        id: "gauge-loadavg",
        value: loadavg,
        min: 0,
        max: 4,
        showInnerShadow: false,
        showMinMax: false,
        gaugeColor: "#EAEAEA",
        levelColors:["#E74C3C","#E74C3C","#E74C3C"],
        title: "Load Avg.",
        label: "Using"
    });

    var g = new JustGage({
        id: "gauge-disk",
        value: diskused,
        min: 0,
        max: maxdisk,
        showInnerShadow: false,
        showMinMax: false,
        gaugeColor: "#EAEAEA",
        levelColors:["#1ABC9C","#1ABC9C","#1ABC9C"],
        title: "Disk Used",
        label: "GB"
    });

    var g = new JustGage({
        id: "gauge-blue",
        value: currentmail,
        min: 0,
        max: maxmail,
        showInnerShadow: false,
        showMinMax: false,
        gaugeColor: "#EAEAEA",
        levelColors:["#3498DB","#3498DB","#3498DB"],
        title: "Email Queue",
        label: "Mail"
    });

});