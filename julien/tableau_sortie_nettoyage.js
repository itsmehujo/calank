function toogle(){     
    let toogle = document.getElementById('tr_form_add_sortie')
    toogle.style.display="block"
} 



const body = document.querySelector('body')
const table = document.querySelector('#sorties')
const colonne = document.getElementById('colonne')
const tbody = document.createElement('tbody')
table.appendChild(tbody)

const ligne = document.createElement('tr')
ligne.className = 'ligne'
tbody.appendChild(ligne)



let dataset = JSON.parse(document.getElementById('data').innerHTML)
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