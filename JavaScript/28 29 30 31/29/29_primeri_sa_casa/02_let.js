// Od verzije 6 jezika JavaScript (tzv. ES6 standard), dozvoljen i blokovski tip promenljivih. 
// Blok je skup naredbi koji se nalazi izmedju viticastih zagrada { i }.



// 1:
// ovako uvedene promenljive x i y su globalne promenljive
// pa se mogu koristiti i izvan bloka 
{
    var x = 10;
    var y = 5;
    console.log(x + y);
}
console.log(x, y);


// 2: 
// ovako uvedena promenljive x je globalna promenljiva
// ovako uvedena promenljiva y je blokovska promenljiva
{
    var x = 10;
    let y = 5;
    console.log(x + y);
}

// promenljiva x se moze koristiti i izvan bloka
console.log(x);

// promenljiva y ne postoji izvan bloka u kojem je deklarisana 
// zato izvrsavanje ove naredbe rezultira sa Reference Error
// console.log(y);


// 3:
// ovako uvedena promenljiva i je globalna promenljiva
for (var i = 1; i <= 5; i++) {
    console.log(i);
}
console.log(i);

// 4: 
// ovako uvedena promenljiva i je blokovska promenljiva
for (let i = 1; i <= 5; i++) {
    console.log(i);
}

// promenljiva i ne postoji izvan bloka u kojem je deklarisana 
// zato izvrsavanje ove naredbe rezultira sa Reference Error
// console.log(i);

