/*

Operator radi operaciju nad jednim ili vise podataka koje zovemo argumentima operatora.
Arnost operatora predstavlja broj argumenata na koji se taj operator primenjuje.
    unarni - operator sa jednim argumentom
    binarni - operator sa dva argumenta ...

Aritmeticki operatori: +, -, *, /, %, ++, --

% - ostatak pri celobrojnom deljenju
++ - operator inkrementacije (uvecanje za 1)
-- - operator dekrementacije (umanjenje za 1)

Prioritet:  *, /  imaju medjusobno isti prioritet, a visi prioritet u odnosu na +, -
Asocijativnost: leva (redosled primene medju operatorima istog prioriteta)

*/

var izraz = (5+2)*10%2
console.log(izraz)