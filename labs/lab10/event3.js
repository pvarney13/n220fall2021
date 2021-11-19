let button1 = document.getElementById("btn")
let button2 = document.getElementById("btn2")
let button3 = document.getElementById("btn3")

let div1 = document.getElementById("div1")
let div2 = document.getElementById("div2")
let div3 = document.getElementById("div3")

button1.addEventListener("click", whenClicked)
button2.addEventListener("click", whenClicked)
button3.addEventListener("click", whenClicked)

function whenClicked (event) {
    let answer = event.target.getAttribute("data-answer")
    div1.innerHTML = answer
    div2.innerHTML = answer
    div3.innerHTML = answer
    
}