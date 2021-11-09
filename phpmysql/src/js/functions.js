function randomColor() {
    const o = Math.round
    const r = Math.random
    const s = 255;
    return 'rgb(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ')';
}

function createBarChart (LABELS, TITLE, DATA, ELEMENTID, xAxis, yAxis) {
    const data = {
        labels: LABELS,
        datasets: [{
            label: TITLE,
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: DATA,
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            parsing: {
                xAxisKey: xAxis,
                yAxisKey: yAxis
            }
        }
    };
    const myChart = new Chart(
        document.getElementById(ELEMENTID),
        config
    );
}

function createPolarArea (LABELS, TITLE, DATA, COLORS, ELEMENTID) {

    const data = {
        labels: LABELS,
        datasets: [{
            label: TITLE,
            data: DATA,
            backgroundColor: COLORS
        }]
    };
    const config = {
        type: 'polarArea',
        data: data,
        options: {}
    };
    const myChart = new Chart(
        document.getElementById(ELEMENTID),
        config
    );
}

function createDonutChart (LABELS, DATA, COLORS, TITLE, ELEMENTID) {
    const data = {
        labels: LABELS,
        datasets: [{
            label: TITLE,
            data: DATA,
            backgroundColor: COLORS,
            hoverOffset: 4
        }]
    };
    const config = {
        type: 'doughnut',
        data: data,
    };
    const myChart = new Chart(
        document.getElementById(ELEMENTID),
        config
    );
}