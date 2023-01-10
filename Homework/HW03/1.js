

const tempc = Number.parseFloat(prompt("Введите температуру в градусах Цельсия: "));

alert(`Цельсий = ${tempc} , Фаренгейт = ${temperatureCtoF(tempc)}`)

function temperatureCtoF(tempc) {
    const tempf = (9 / 5) * tempc + 32;
    return Math.round(tempf*100)/100;
}