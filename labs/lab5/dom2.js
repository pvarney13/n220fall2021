let dvSquare = document.getElementById("square")

dvSquare.style.height = "100px"
dvSquare.style.width = "100px"
dvSquare.style.backgroundColor = "#0079f2"

dvSquare.onmouseover = dvSquare.onmouseout = handler;

function handler(event) {
    if (event.type == 'mouseover') {
        event.target.style.backgroundColor = "#18191a"
      }
      if (event.type == 'mouseout') {
        event.target.style.backgroundColor = "#0079f2"
      }
}
