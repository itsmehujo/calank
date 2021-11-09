fetchAll()


function getIt(SUM, AVG, SHOW) {
    console.log(SUM)
    console.log(AVG)
    console.log(SHOW)
    const TABLE = document.createElement('table')
    const th = document.createElement('thead')
    for(let sum of SUM) {
        const td = document.createElement('th')
        td.innerText = sum.name
        th.appendChild(td)
    }
    TABLE.appendChild(th)
    const tbody = document.createElement('tbody')
    const tr = document.createElement('tr')
    for(let sum of SUM) {
        const td = document.createElement('td')
        td.innerText = sum.value
        tr.appendChild(td)
    }
    tbody.appendChild(tr)
    TABLE.appendChild(tbody)
    document.querySelector('body').appendChild(TABLE)
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
            const SUM = result
            fetch('../sum.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/JSON',
                },
                body: JSON.stringify({value: 'avgs'})
            })
                .then(data => data.json())
                .then(result => {
                    const AVG = result
                    fetch('../test.php')
                        .then(result => result.json())
                        .then(data => {
                            const SHOW = data
                            getIt(SUM, AVG, SHOW)
                        })
                })
        })
}