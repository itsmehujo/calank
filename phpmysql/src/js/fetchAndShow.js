function createCharts (id1, method1, param1,  id2, method2, param2, id3, method3, param3) {
    /**
     *@param string id1: id de la div ou autre au sein duquel le canva sera cree
     *@param string method1: nom de la premiere fonction appelee
     *@param string param1:  parametres de la premiere fonction appellee
     * // etc.
     * exemple : createCharts('myFirstChart', barActivities, 'DATAYEARLY', '', '', '', '', '', '')
     * si un id est laisse vide, (ex: id1 = ''), method1 et param1 seront ignores.
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
                            if(id1 !== '') {
                                if(param1 === 'DATAYEARLY') {
                                    param1 = DATAYEARLY
                                }
                                else if(param1 === 'AVERAGE') {
                                    param1 = AVERAGE
                                }
                                else if(param1 === 'TOTAL') {
                                    param1 = TOTAL
                                }
                                method1(param1, id1)
                            }
                            if(id2 !== '') {
                                if(param2 === 'DATAYEARLY') {
                                    param2 = DATAYEARLY
                                }
                                else if(param2 === 'AVERAGE') {
                                    param2 = AVERAGE
                                }
                                else if(param2 === 'TOTAL') {
                                    param2 = TOTAL
                                }
                                method2(param2, id2)
                            }
                            if(id3 !== '') {
                                if(param3 === 'DATAYEARLY') {
                                    param3 = DATAYEARLY
                                }
                                else if(param3 === 'AVERAGE') {
                                    param3 = AVERAGE
                                }
                                else if(param3 === 'TOTAL') {
                                    param3 = TOTAL
                                }
                                method3(param3, id3)
                            }
                        })
                })
        })
}
