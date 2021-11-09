fetchAll()
function barSums(SUM) {
    const div = document.createElement('div')
    const canvas = document.createElement('canvas')
    canvas.id = 'barSum'
    div.appendChild(canvas)
    document.querySelector('body').appendChild(div)
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

function barAvg(AVG) {
    const div = document.createElement('div')
    const canvas = document.createElement('canvas')
    canvas.id = 'barAvg'
    div.appendChild(canvas)
    document.querySelector('body').appendChild(div)
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

function barActivities(SHOW) {
    const div = document.createElement('div')
    const canvas = document.createElement('canvas')
    canvas.id = 'barActivities'
    div.appendChild(canvas)
    document.querySelector('body').appendChild(div)
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


function polarSHOW(SHOW) {

}
function polarSUM(SUM) {
    const div = document.createElement('div')
    const canvas = document.createElement('canvas')
    canvas.id = 'polarSum'
    div.appendChild(canvas)
    document.querySelector('body').appendChild(div)
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
function polarAVG(AVG) {
    const div = document.createElement('div')
    const canvas = document.createElement('canvas')
    canvas.id = 'polarAverage'
    div.appendChild(canvas)
    document.querySelector('body').appendChild(div)
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



// On recupere toutes lse infos de la bdd et on la passe a getIt
function fetchAll () {
    fetch('../sum.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/JSON',
        },
        body: JSON.stringify({value: 'sums'})
    })
        .then(data => data.json())
        .then(result => {
            const TOTAL = result
            fetch('../sum.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/JSON',
                },
                body: JSON.stringify({value: 'avgs'})
            })
                .then(data => data.json())
                .then(result => {
                    const AVERAGE = result
                    fetch('../test.php')
                        .then(result => result.json())
                        .then(data => {
                            const DATAYEARLY = data
                            // Bar charts Start
                            barActivities(DATAYEARLY)
                            barSums(TOTAL)
                            barAvg(AVERAGE)
                            // ** Bar charts End
                            // polarArea Charts Start
                            polarSHOW(DATAYEARLY)
                            polarSUM(TOTAL)
                            polarAVG(AVERAGE)
                            // ** polarArea End
                            // Doughnut start
                            createDoughnut(DATAYEARLY)
                            createOtherDoughnut(TOTAL)
                            // ** Doughnut start
                            console.log(DATAYEARLY)
                            console.log(TOTAL)
                            console.log(AVERAGE)
                        })
                })
        })
}

function createDoughnut(YEARS) {
    const div = document.createElement('div')
    const canvas = document.createElement('canvas')
    canvas.id = 'doughnut'
    div.appendChild(canvas)
    document.querySelector('body').appendChild(div)
    const LABELS = []
    const DATA = []
    const COLORS = []
    for(let year of Object.entries(YEARS)) {
        console.log(year)
        const name = year[0]
        const number = year[1].length
        const color = randomColor()
        LABELS.push(name)
        DATA.push(number)
        COLORS.push(color)
    }
    createDonutChart(LABELS, DATA, COLORS, 'Nouveau donut', canvas.id)
}

function createOtherDoughnut(SUM) {
    const div = document.createElement('div')
    const canvas = document.createElement('canvas')
    canvas.id = 'doughnut2'
    div.appendChild(canvas)
    document.querySelector('body').appendChild(div)
    const LABELS = []
    const DATA = []
    const COLORS = []
    for(let type of SUM) {
        if(type.name !== 'kilos' && type.name !== 'nb_sac' && type.name !== 'cleaner' ) {
            const name = type.name
            const number = type.value
            const color = randomColor()
            LABELS.push(name)
            DATA.push(number)
            COLORS.push(color)
        }
    }
    createDonutChart(LABELS, DATA, COLORS, 'Nouveau donut', canvas.id)
}