let i = 0;
let txt = $('.chris-name').text();
$('.chris-name').css('display','none'); //Hides the original text, to prevent showing of duplication of name
$('.chris-name').text(''); //Removes the html code when JavaScript is enabled only, it is rewritten using the function
$('.chris-name').css('display','block'); //Shows the type animation generated text only
//console.log(txt); //Used to test if the txt variable is being assigned to the correct information
let speed = 100; // The speed/duration of the effect in milliseconds

function typeWritername() {//Typewriter effect for the name on the banner
   if (i < txt.length) {
    document.querySelector(".chris-name").innerHTML += txt.charAt(i); //Adds a letter at a time to the specified class
    

    i++;
    setTimeout(typeWritername, speed); //Delays the function by 100 milliseconds every time the if statement runs
  }
  
}
let j = 0;
let txt2 = $('.nav-page').text();
$('.nav-page').css('display','none');
$('.nav-page').text(''); 
$('.nav-page').css('display','block'); 
//console.log(txt2);
function typeWriternav() { //Does the same as the previous function but on the navigation page name
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
let slideOutMenu = document.querySelector('.alt-menu'); //Targets the span which contains the hamburger menu icon
slideOutMenu.addEventListener('click',()=>{
  if (hideOrShow===0){ //If hideOrShow variable =0 (is off) when clicked, display the menu 
    hideOrShow +=1; //The hideOrShow variable is now on
    $('#sticky-3').css('display','flex'); //The menu is displayed in flexbox
  }
  else if (hideOrShow===1){ //If hideOrShow variable =1 (is on) when clicked, hide the menu
    hideOrShow -=1; //The hideOrShow variable is now off
    $('#sticky-3').css('display','none'); //The menu is no longer display 
  }
});

function validateForm(){
  let regex = new RegExp("([!#-'*+/-9=?A-Z^-~-]+(\.[!#-'*+/-9=?A-Z^-~-]+)*|\"\(\[\]!#-[^-~ \t]|(\\[\t -~]))+\")@([!#-'*+/-9=?A-Z^-~-]+(\.[!#-'*+/-9=?A-Z^-~-]+)*|\[[\t -Z^-~]*])");
  //lAbove regex is used to try and validate all possible email addresses
  //let regex2 = new RegExp^(?:\+44|0)(?:\d{9}|\d{10}|\d{11}|\d{12})$; //Phone regex
  let fnombre =$('#f-name').val();
  let lnombre= $('#l-name').val();
  let email1 = $('#email').val();
  let subject1 = $('#subject').val(); //Stores the subject value, but I do not use this info for anything yet
  let textarea1 = $('#message-textarea').val(); //Stores the textarea value, but I do not use this info for anything yet
  let test1= regex.test(email1); //Checks if the email entered follows one of the regular expressions specified above
                                 //If it does, test1 will be assigned to true. If not, it will be assigned to false

  if (fnombre==='' || lnombre===''){ //If at least one of the name boxes is empty, the prompt will be given
    //$('#required-name').css('display','block'); //Code for the red text warning message, currently disabled
    alert('Please enter your full name: this is required');
  }
  
  if (email1=== ''){
    //$('#required-email').css('display','block'); //Code for the red text warning message, currently disabled
    alert('Please enter your email address: this is required.');
    
  }
  else{
    if (test1 === true){
      alert('Email address validated.');
    }
    else {
      alert('Invalid email.');
    }
  }
}


//Create sub-domain and link to portfolio
