function testiranjeDosega()
{
    var x = 10;
    {
        var x = 100;
    }
    {
        var x = "This is a string even!";
    }
    return x;
}
console.log('testiranjeDosega() -> var', testiranjeDosega());

function testiranjeDosega2()
{
    let x = 10;
    {
        // Pravi novu lokalnu promenljivu x koja sakriva prethodno x
        let x = 100;
        // Nakon ovog bloka, x=100 nestaje
    }
    {
        // Pravi novu lokalnu promenljivu x koja sakriva prethodno x
        let x = "This is a string even!";
        // Nakon ovog bloka, x="..." nestaje
    }
    // Vraca se x koje je trenutno vidljivo, odnosno x=10.
    return x;
}

console.log('testiranjeDosega2() -> let', testiranjeDosega2());

// Postoji kljucna rec const koja dozvoljava da definisemo konstante.
const PI = 3.141592653589793;
PI = 3.14;                      // Menjanje konstante nije dozvoljeno
PI = PI + 10;                   // Menjanje konstante nije dozvoljeno
