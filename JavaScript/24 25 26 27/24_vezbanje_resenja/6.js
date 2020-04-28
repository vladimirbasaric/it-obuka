/*

6. Odrediti ostatak pri deljenju trocifrenog broja zbirom njegovih cifara.


*/
var broj = 143, jedinica, desetica, stotina;
jedinica = broj % 10;
desetica = Math.floor(broj/10) % 10;
stotina = Math.floor(broj/100) % 10;

var ostatak = broj % (jedinica+desetica+stotina);
console.log(ostatak);
