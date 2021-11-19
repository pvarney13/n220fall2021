let dvSquare = document.getElementById("target")
let dvSquare2 = document.getElementById("target2")
let dvSquare3 = document.getElementById("target3")

dvSquare.style.height = 200 + "px"
dvSquare.style.width = 200 + "px"
dvSquare.style.backgroundColor = "#a6a6a6"
dvSquare.style.margin = 5 + "px"
dvSquare.style.float = "left"

dvSquare2.style.height = 200 + "px"
dvSquare2.style.width = 200 + "px"
dvSquare2.style.backgroundColor = "#a6a6a6"
dvSquare2.style.margin = 5 + "px"
dvSquare2.style.float = "left"

dvSquare3.style.height = 200 + "px"
dvSquare3.style.width = 200 + "px"
dvSquare3.style.backgroundColor = "#a6a6a6"
dvSquare3.style.margin = 5 + "px"
dvSquare3.style.float = "left"

dvSquare.addEventListener("click", colorChange)
dvSquare2.addEventListener("click", colorChange)
dvSquare3.addEventListener("click", colorChange)

function colorChange(event) {
     let color = event.target.getAttribute("data-color")

     event.target.style.backgroundColor = color

     
}