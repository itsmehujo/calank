function createCharts (id, method, param) {
    /**
     *@param string id1: id de la div ou autre au sein duquel le canva sera cree
     *@param string method1: nom de la premiere fonction appelee
     *@param string param1:  parametres de la premiere fonction appellee
     * // etc.
     * Listes des methodes disponibles et leurs parametres :
     * // Bar charts //
     * -  barActivities(DATAYEARLY)
     * - barSums(TOTAL)
     * - barAvg(AVERAGE)
     *
     * // polarArea Charts //
     * - polarSHOW(DATAYEARLY)
     * - polarSUM(TOTAL)
     * - polarAVG(AVERAGE)
     *
     * // Donut charts //
     * -createDonut(DATAYEARLY)
     * */
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
                                if(param === 'DATAYEARLY') {
                                    param = DATAYEARLY
                                }
                                else if(param === 'AVERAGE') {
                                    param = AVERAGE
                                }
                                else if(param === 'TOTAL') {
                                    param = TOTAL
                                }
                                method(param, id)
                        })
                })
        })
}
