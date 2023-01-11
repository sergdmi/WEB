const tempc = Number.parseFloat(prompt("Введите температуру в градусах Цельсия: "));

alert(`Цельсий = ${tempc} , Фаренгейт = ${temperatureCtoF(tempc).toFixed(2)}`);

function temperatureCtoF(tempc) {
    const tempf = (9 / 5) * tempc + 32;
    return tempf;
}

// Округление:
// Math.round(tempf*100) / 100
// num.toFix(2) округлит до 2-х чисел в дробной части числа значение переменной num. 
// Однако при таком варианте, мы получим строку, стоит это учитывать что тип будет строка, а не число.