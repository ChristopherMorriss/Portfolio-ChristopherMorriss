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

let hideOrShow=0 //Variable used to check what should happen after the menu is clicked
                 //It's a boolean variable so it could be represented with true (1) and false (0) instead
let slideOutMenu = document.querySelector('.alt-menu');
slideOutMenu.addEventListener('click',()=>{
  if (hideOrShow===0){ //If hideOrShow variable =0 (is off) when clicked, display the menu 
    hideOrShow +=1; //The hideOrShow variable is now on
    $('#sticky-3').css('display','inline-flex')
  }
  else if (hideOrShow===1){ //If hideOrShow variable =1 (is on) when clicked, hide the menu
    hideOrShow -=1; //The hideOrShow variable is now off
    $('#sticky-3').css('display','none')
  }
});




$('#submit').click(function(){
  let regex = new RegExp('[a-z0-9]+@[a-z]+\.[a-z]{2,3}'); //Email regex
  //let regex2 = new RegExp^(?:\+44|0)(?:\d{9}|\d{10}|\d{11}|\d{12})$; //Phone regex
  const fnombre =$('#f-name').val();
  const lnombre= $('#l-name').val();
  const email1 = $('#email').val();
  const subject1 = $('#subject').val();
  const textarea1 = $('#message-textarea').val();
  const test1= regex.test(email1);
  //alert(test1);
  if (fnombre===''){
    alert('Please enter your first name: this is required.')
  }
  if (lnombre===''){
    alert('Please enter your last name: this is required.')
  }
  if (email1=== ''){
    alert('Please enter your email address: this is required.');
  }
  else{
    if (test1 === 'true'){
      alert('Email address validated.');
    }
    else {
      alert('Invalid email.');
    }
  }

 });



 

