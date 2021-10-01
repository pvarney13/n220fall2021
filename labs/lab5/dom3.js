let dvSquare = document.getElementById("target")

//set style of div
dvSquare.style.height = 300 + "px"
dvSquare.style.width = 300 + "px"
dvSquare.style.backgroundColor = "#00f7df"
//establish innerHTML text
dvSquare.innerHTML = "One"

//happens on button click
function colorChange () {
    dvSquare.style.backgroundColor = "#dc82ff"
    let flip = Math.random()
    let side = "Two"

    if(flip > .5)
    dvSquare.innerHTML = "Two"
}