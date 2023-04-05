const dino = document.getElementById("dino");
const cactus = document.getElementById("cactus");
const score = document.getElementById("score");

function jump() {
  if (dino.classList != "jump") {
    dino.classList.add("jump");

    setTimeout(function () {
      dino.classList.remove("jump");
    }, 300);
  }
}

let scoreCount = 0;
score.innerHTML = scoreCount.toString().padStart(5, "0");

// Funcion game
function startGame() {
  let isAlive = setInterval(function () {
    //scoreCount = 0;
    console.log("dentro");
    cactus.classList.add("cactus-animation");
    // get current dino Y position
    let dinoTop = parseInt(window.getComputedStyle(dino).getPropertyValue("top"));

    // get current cactus X position
    let cactusLeft = parseInt(
      window.getComputedStyle(cactus).getPropertyValue("left")
    );
    
    scoreCount++;
    score.innerHTML = scoreCount.toString().padStart(5, "0");

    // detect collision
    // if (cactusLeft < 50 && cactusLeft > 0 && dinoTop >= 140) {
    if (cactusLeft < 50 && cactusLeft > 0 && dinoTop >= 110) {
      // collision
      alert("Game Over!");
      cactus.classList.remove("cactus-animation");
      scoreCount = 0;
    }
  }, 10);
}

function start() {
  // decir hola por consola
  console.log("hola");
  document.getElementById("start").addEventListener("click", function () {
    // print hola
    document.getElementById("start").style.display = "none";
    // quitar 
    startGame();
    document.addEventListener("keydown", function (event) {
      jump();
    });
  });
}

document.addEventListener("DOMContentLoaded", function () {
  start();  
});
