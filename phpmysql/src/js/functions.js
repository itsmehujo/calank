function randomColor() {
    const o = Math.round
    const r = Math.random
    const s = 255;
    return 'rgb(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ')';
}

function barSums(SUM, div_id) {
    const div = document.getElementById(div_id)
    const canvas = document.createElement('canvas')
    canvas.id = div_id + '_canva' + 'SUMBAR'
    div.appendChild(canvas)
    const LABELS = []
    const truedata = []
    for (let type of SUM) {
        if(type.name !== 'kilos' && type.name !== 'cleaner') {
            const body = {
                quantity: type.value,
                name: type.name
            }
            const name = type.name
            LABELS.push(name)
            truedata.push(body)
        }
    }
    const xAxis = 'name'
    const yAxis = 'quantity'
    createBarChart(LABELS, 'en Kilos par an', truedata, canvas.id, xAxis, yAxis)
}

function barAvg(AVG, div_id) {
    const div = document.getElementById(div_id)
    const canvas = document.createElement('canvas')
    canvas.id = div_id + '_canva' + 'AVGBAR'
    div.appendChild(canvas)
    const LABELS = []
    const truedata = []
    for (let type of AVG) {
        if(type.name !== 'kilos' && type.name !== 'cleaner') {
            const body = {
                quantity: type.value,
                name: type.name
            }
            const name = type.name
            LABELS.push(name)
            truedata.push(body)
        }
    }
    const xAxis = 'name'
    const yAxis = 'quantity'
    createBarChart(LABELS, 'en Kilos par an', truedata, canvas.id, xAxis, yAxis)
}

function barActivities(SHOW, div_id) {
    const div = document.getElementById(div_id)
    const canvas = document.createElement('canvas')
    canvas.id = div_id + '_canva' + 'TOTALBAR'
    div.appendChild(canvas)
    const LABELS = []
    const truedata = []
    for (let year of Object.entries(SHOW)) {
        const body = {
            activities: year[1].length,
            year: year[0]
        }
        const TIME = year[0]
        LABELS.push(TIME)
        truedata.push(body)
    }
    const xAxis = Object.entries(truedata[0])[1][0]
    const yAxis = Object.entries(truedata[0])[0][0]
    createBarChart(LABELS, 'Activites par an', truedata, canvas.id, xAxis, yAxis)
}

function polarSUM(SUM, div_id) {
    const div = document.getElementById(div_id)
    const canvas = document.createElement('canvas')
    canvas.id = div_id + '_canva' + 'SUMPOLAR'
    div.appendChild(canvas)
    const LABELS = []
    const DATA = []
    const COLORS = []
    for(let activity of SUM) {
        if(activity.name !== 'kilos' && activity.name !== 'cleaner') {
            LABELS.push(activity.name)
            DATA.push(activity.value)
            COLORS.push(randomColor())
        }
    }
    createPolarArea(LABELS, 'sum', DATA, COLORS, canvas.id)

}
function polarAVG(AVG, div_id) {
    const div = document.getElementById(div_id)
    const canvas = document.createElement('canvas')
    canvas.id = div_id + '_canva' + 'AVGPOLAR'
    div.appendChild(canvas)
    const LABELS = []
    const DATA = []
    const COLORS = []
    for(let activity of AVG) {
        if(activity.name !== 'kilos' && activity.name !== 'cleaner') {
            LABELS.push(activity.name)
            DATA.push(activity.value)
            COLORS.push(randomColor())
        }
    }
    createPolarArea(LABELS, 'sum', DATA, COLORS, canvas.id)
}




function donutYears(YEARS, div_id) {
    const div = document.getElementById(div_id)
    const canvas = document.createElement('canvas')
    canvas.id = div_id + '_canva' + 'TOTALDONUT'
    div.appendChild(canvas)
    const LABELS = []
    const DATA = []
    const COLORS = []
    for(let year of Object.entries(YEARS)) {
        const name = year[0]
        const number = year[1].length
        const color = randomColor()
        LABELS.push(name)
        DATA.push(number)
        COLORS.push(color)
    }
    createDonutChart(LABELS, DATA, COLORS, 'Nouveau donut', canvas.id)
}


function createBarChart (LABELS, TITLE, DATA, ELEMENTID, xAxis, yAxis) {
    const data = {
        labels: LABELS,
        datasets: [{
            label: TITLE,
            backgroundColor: 'rgba(13, 75, 102, 0.5)',
            borderColor: 'rgb(12, 75, 102)',
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