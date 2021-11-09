let data = [{"id":"1","lieu":"miami","date":null,"cleaner":"23","nb_sac":null,"kilos":null,"verre":null,"plastique":null,"carton":null,"canette":null,"tout_venant":null,"encombrant":null,"megots":null,"bouchon":null,"proto":null},{"id":"2","lieu":"los angeles","date":null,"cleaner":"2123","nb_sac":null,"kilos":null,"verre":null,"plastique":null,"carton":null,"canette":null,"tout_venant":null,"encombrant":null,"megots":null,"bouchon":null,"proto":null},{"id":"3","lieu":"oaksd","date":"2021-12-31","cleaner":"1","nb_sac":"1","kilos":"1","verre":"1","plastique":"1","carton":"1","canette":"1","tout_venant":"1","encombrant":"1","megots":"1","bouchon":"1","proto":"1"}]
 
const body = document.querySelector('body')
const table = document.querySelector('#sorties')
const colonne = document.getElementById('colonne')
const tbody = document.createElement('tbody')
table.appendChild(tbody)

const ligne = document.createElement('tr')
ligne.className = 'ligne'
tbody.appendChild(ligne)


let dataset = JSON.parse(document.getElementById('data').innerHTML)
console.log(dataset)
let i = 1
for (let data1 of dataset){
    const ligne = document.createElement('tr')
    ligne.className = 'ligne'
    tbody.appendChild(ligne)

    const id = document.createElement('td')
    const lieu = document.createElement('td')
    const date = document.createElement('td')
    const cleaner = document.createElement('td')
    const nbSac = document.createElement('td')
    const kilos = document.createElement('td')
    const verre = document.createElement('td')
    const plastique = document.createElement('td')
    const carton = document.createElement('td')
    const canette = document.createElement('td')
    const toutVenant = document.createElement('td')
    const encombrant = document.createElement('td')
    const megots = document.createElement('td')
    const bouchon = document.createElement('td')
    const proto = document.createElement('td')
    ligne.appendChild(id)
    ligne.appendChild(lieu)
    ligne.appendChild(date)
    ligne.appendChild(cleaner)
    ligne.appendChild(nbSac)
    ligne.appendChild(kilos)
    ligne.appendChild(verre)
    ligne.appendChild(plastique)
    ligne.appendChild(carton)
    ligne.appendChild(canette)
    ligne.appendChild(toutVenant)
    ligne.appendChild(encombrant)
    ligne.appendChild(megots)
    ligne.appendChild(bouchon)
    ligne.appendChild(proto)

    id.innerText = i
    lieu.innerText = data1.lieu
    date.innerText = data1.date
    cleaner.innerText = data1.cleaner
    nbSac.innerText = data1.nb_sac
    kilos.innerText = data1.kilos
    verre.innerText = data1.verre
    plastique.innerText = data1.plastique
    carton.innerText = data1.carton
    canette.innerText = data1.canette
    toutVenant.innerText = data1.tout_venant
    encombrant.innerText = data1.encombrant
    megots.innerText = data1.megots
    bouchon.innerText = data1.bouchon
    proto.innerText = data1.proto
    i = i +1
}
// for(let data1 of data){
//     console.log(data1)

//     const ligne = document.createElement('tr')
//     ligne.className = 'ligne'
//     tbody.appendChild(ligne)

//     const id = document.createElement('td')
//     const lieu = document.createElement('td')
//     const date = document.createElement('td')
//     const cleaner = document.createElement('td')
//     const nbSac = document.createElement('td')
//     const kilos = document.createElement('td')
//     const verre = document.createElement('td')
//     const plastique = document.createElement('td')
//     const carton = document.createElement('td')
//     const canette = document.createElement('td')
//     const toutVenant = document.createElement('td')
//     const encombrant = document.createElement('td')
//     const megots = document.createElement('td')
//     const bouchon = document.createElement('td')
//     const proto = document.createElement('td')
//     ligne.appendChild(id)
//     ligne.appendChild(lieu)
//     ligne.appendChild(date)
//     ligne.appendChild(cleaner)
//     ligne.appendChild(nbSac)
//     ligne.appendChild(kilos)
//     ligne.appendChild(verre)
//     ligne.appendChild(plastique)
//     ligne.appendChild(carton)
//     ligne.appendChild(canette)
//     ligne.appendChild(toutVenant)
//     ligne.appendChild(encombrant)
//     ligne.appendChild(megots)
//     ligne.appendChild(bouchon)
//     ligne.appendChild(proto)

//     id.innerText = data1.id
//     lieu.innerText = data1.lieu
//     date.innerText = data1.date
//     cleaner.innerText = data1.cleaner
//     nbSac.innerText = data1.cleaner
//     kilos.innerText = data1.cleaner
//     verre.innerText = data1.cleaner
//     plastique.innerText = data1.cleaner
//     carton.innerText = data1.cleaner
//     canette.innerText = data1.cleaner
//     toutVenant.innerText = data1.cleaner
//     encombrant.innerText = data1.cleaner
//     megots.innerText = data1.cleaner
//     bouchon.innerText = data1.cleaner
//     proto.innerText = data1.cleaner

    
// }