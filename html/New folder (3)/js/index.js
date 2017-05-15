/*Kunne, og burde, refaktoriseres. Dette script er bare det mest basale, på en simpel måde. 
Intet object orienteret programmering, som med fordel kunne bruges. 
Samt mere "spil"-agtig opstilling ved opdeleing af funktionkald */


//Når alle elementer loades færdigt, kaldes "finishLoading"
document.addEventListener('DOMContentLoaded', finishLoading );
//Elementer der har brug for at blive initialiseret som variabler
var startButton = document.getElementById("go");

var question = document.getElementById("question");
var container = document.getElementById("container");
var endObj = document.getElementById("end");
var endText = document.getElementById("endText");

//Svarknapperne, hvilekt alle er p elementer
var answer = document.getElementsByTagName("p");


//spørgsmålene indlæses på en meget usikker, og simpel måde ved et array og json objekter (dovenskab)
var Quiz = [{"question":"Hvilket sted ligger i Rom?","answers":["Colosseum","Cristo Redentor","Den Kinesiske Mur"],"Correct":0},{"question":"Hvilken Kristen trosretning er dominerende i Italien?","answers":["Jesusisme","Protestantisme","Katolisme"],"Correct":2},{"question":"Hvor i Italien ligger Rom?","answers":["Cirka midt på","Cirka syd på","Cirka nord på"],"Correct":0},{"question":"Hvor fører alle veje til?","answers":["Rom","Milano","Venedig"],"Correct":0},{"question":"Hvad er Vertikanet betegnet som?","answers":["En by","Et bystat","En land"],"Correct":1},{"question":"Hvor mange lufthavn har Rom?","answers":["1","2","3"],"Correct":2},{"question":"Hvilke begivenheder foregik i Colosseum?","answers":["Dance-offs","Operaer","Gladiatorkamp"],"Correct":2},{"question":"Hvilken form for leder havde man i det Gamle Rom?","answers":["Stormoguler","Kejser","Dronning"],"Correct":1},{"question":"Hvem var ansvarlig for Roms Brand?","answers":["Kejser Nero","Kejser Augustus","Kejser Bob"],"Correct":0},{"question":"Hvad hedder den Oldromerske guden for kamp?","answers":["Merkur","Mars","Saturn"],"Correct":1}];

//Længden af spørgsmål i quizzen, da det skal bruges for udregning af score.
var all = Quiz.length;

//Tilstanden af quizzen bliver gemt her hvis det skal referes andre steder
var state = {"score": 0};

//Funktionen her bliver kaldt efter alt i DOMen er loaded
function finishLoading() {
  //og lidt ekstra for at fremvise italien preloaderen
  setTimeout(buttonLoaded, 3500); 
  //Den centrale funktion til at opdaterer spørgsmålet
  updatePosition();
  //Fremviser elementer på skærmen
  startButton.addEventListener("click", initLoaded); 
}

//Fra DOMinitialiseringsfunktionen. Dette er for at skjule preloader og fremvise "START" knappen
function buttonLoaded() {
  document.getElementById("loader").style.opacity = 0;
  document.getElementById("go").style.visibility = "visible";

}

//Som før, fremviser dette quiz elementerne under preloader wrapperen
function initLoaded() {
  document.getElementsByTagName("body")[0].className = "loaded";
}

//denne funktion bliver kaldt hver gang der bliver klikket på et "answer" element.
function answerClicked(id, obj) {
  //F'rst skjules quizzen for at give feedback til spilelren
  container.style.opacity = 0;
  
  //Disse 2 if statements kunne være sat i et. Men det er de ikke for, igen, at give respons til spilleren
  if(id == state["current"].Correct) {
      changeColor(true, obj);
    }else{
      changeColor(false, obj);
    }
  
  //Hvis svaret er rigtigt (udregnes efter spørgsmål skabelonen) skifter der spørgsmål og score bliver adderet med 1. Elelrs bevares det.
  setTimeout(function(){
    if(id == state["current"].Correct) {
      updatePosition(true);
    }else{
      updatePosition(false);
    }},
    550);
}


//Den centrale funktion der gør magien
function updatePosition(inc) {
  
  var score = state["score"];
  //Hvis der er tomt i quiz arrayet er det sidste spørgsmål nået. Herfra afsluttes spillet
  if(Quiz.length <1){
    state = {
      "current": current,
      "score": (inc ? (++score) : score)
    };
    
    endText.innerHTML = ("Du har svaret rigtigt på " + score + "/" + all  + " af spørgsmålene")
    setTimeout(setEndText(), 250);
    setTimeout((endObj.style.opacity = 1), 500);
    
  }else{    
    //Ellers køres det igennem normalt. Et tilfældigt spørgsmål bliver valgt, og fjernet fra arrayet til sidst
    var index = Math.floor(Math.random()*Quiz.length);
    
    if (index > -1){
          var current = Quiz[index];
    }
    //State elementet bruges til at holde styr på scoren
    state = {
      "current": current,
      "score": (inc ? (++score) : score)
    };
    //Spørgsmål og svar bliver indlæst i DOMen, samt at farven p åspørgsmål bliver nulstillet
    question.innerHTML = current.question;
  
    for (i = 0; i < answer.length; i++) { 
      answer[i].innerHTML = current.answers[i];
      resetColors(i);
    }
    
    //Nuværende spøgrsmål fjernes fra arrayet
    Quiz.splice(index, 1);    
     
    container.style.opacity = 1;
  
  }
  
}
 
function setEndText(){
  container.style.visibility = "hidden"; 
  endObj.style.visibility = "visible";
}

//Simpel farveskift ved css class
function changeColor(mode, obj) {
  if(mode){
    obj.classList.add("correct");
  }else{
    obj.classList.add("incorrect");
  }
}
//Farveskiftet nulstilles her
function resetColors(index){
  if(index >= 0){
    var objIn = answer[index].parentElement; 
    
    if(objIn.classList.contains("correct")){
      objIn.classList.remove("correct");
    }else if (objIn.classList.contains("incorrect")) {
      objIn.classList.remove("incorrect");
    }

  }
}