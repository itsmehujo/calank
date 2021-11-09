fetchAll()


function getIt(SUM, AVG, SHOW) {
    console.log(SUM)
    console.log(AVG)
    console.log(SHOW)
    for(let avg of AVG) {

    }
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
                    fetch('../show.php')
                        .then(result => result.json())
                        .then(data => {
                            const SHOW = data
                            getIt(SUM, AVG, SHOW)
                        })
                })
        })
}