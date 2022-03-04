window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: "Airline Reservation"
        },
        data: [{
            type: "line",
            indexLabelFontSize: 16,
            dataPoints: [
                { y: 1450 },
                { y: 1464 },
                { y: 1440 },
                { y: 1424, indexLabel: "\u2193 lowest", markerColor: "DarkSlateGrey", markerType: "cross" },
                { y: 1430 },
                { y: 1444 },
                { y: 1465 },
                { y: 1474 },
                { y: 1470 },
                { y: 1494 },
                { y: 1490 },
                { y: 1514 },
                { y: 1510 },
                { y: 1523 },
                { y: 1531 },
                { y: 1529 },
                { y: 1539 },
                { y: 1558 },
                { y: 1550 },
                { y: 1619 },
                { y: 1614 },
                { y: 1609 },
                { y: 1631, indexLabel: "\u2191 highest", markerColor: "red", markerType: "triangle" },
                { y: 1625 },
                { y: 1624 },
                { y: 1629 },
                { y: 1628 },
                { y: 1627 },
                { y: 1624 },
                { y: 1630 }
            ]
        }]
    });
    chart.render();

}