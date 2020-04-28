// String je primitivni tip koji predstavlja tekst.
var x = "Danas je divan dan!";
var y = "español Deutsch English देवनागरी العربية português বাংলা русский 日本語 norsk bokmål ਪੰਜਾਬੀ 한국어 தமிழ் עברית";

console.log(x);
console.log(y);

// String u vise linija
var longStr = "Lorem ipsum dolor sit amet, pri iriure " +
    "eripuit lucilius ut, saepe accusam hendrerit an eam. " +
    "Vidit errem sententiae nam ea, has ut nibh dissentiunt, " +
    "congue verear sea ea. Ei usu soleat delenit, pri primis " +
    "similique contentiones in. Id mel ullum noster, id vim cibo " +
    "legere elaboraret, tota autem prompta et nam. Vim quot nullam in, " +
    "his cu dicam meliore, habeo commodo lucilius mea ne."

// Ili bolje (backslash na kraj):
var longStr = "Lorem ipsum dolor sit amet, pri iriure\
    eripuit lucilius ut, saepe accusam hendrerit an eam.\
    Vidit errem sententiae nam ea, has ut nibh dissentiunt,\
    congue verear sea ea. Ei usu soleat delenit, pri primis\
    similique contentiones in. Id mel ullum noster, id vim cibo\
    legere elaboraret, tota autem prompta et nam. Vim quot nullam in,\
    his cu dicam meliore, habeo commodo lucilius mea ne."

// Citanje karaktear
console.log(x[0]);
console.log(x.charAt(0));
