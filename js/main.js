let i = 0;
let txt = $('.chris-name').text();
$('.chris-name').css('display','none'); //Hides the original text, to prevent showing of duplication of name
$('.chris-name').text(''); //Removes the html code when JavaScript is enabled only, it is rewritten using the function
$('.chris-name').css('display','block'); //Shows the type animation generated text only
console.log(txt); //Used to test if the txt variable is being assigned to the correct information
let speed = 100; // The speed/duration of the effect in milliseconds

function typeWritername() {
   if (i < txt.length) {
    document.querySelector(".chris-name").innerHTML += txt.charAt(i); //Adds a letter at a time to the specified class
    

    i++;
    setTimeout(typeWritername, speed);
  }
  
}
let j = 0;
let txt2 = $('.nav-page').text();
$('.nav-page').css('display','none'); //Hides the original text, to prevent showing of duplication of name
$('.nav-page').text(''); //Removes the html code when JavaScript is enabled only, it is rewritten using the function
$('.nav-page').css('display','block'); //Shows the type animation generated text only
console.log(txt2); //Used to test if the txt variable is being assigned to the correct information
function typeWriternav() {
  if (j < txt2.length) {
   document.querySelector(".nav-page").innerHTML += txt2.charAt(j); //Adds a letter at a time to the specified class
   

   j++;
   setTimeout(typeWriternav, speed);
 }
 
}
typeWritername();
typeWriternav();




