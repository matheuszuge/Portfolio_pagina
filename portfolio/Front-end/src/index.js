
/* EXERCICIO PARA DESCOBRIR A PORCENTAGEM DE UM NUMERO*/
function calcPct(n1, n2) {
    return (n2 / n1) * 100;
}

let x = 40;
let y = 10;
let pct = calcPct(x, y);
console.log(`${pct}% de ${x} é ${y}`);