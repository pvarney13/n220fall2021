let angle = 0.0
let colors = [ "#ff8f69", "#820404", "#e6de77"]

function setup() {
  createCanvas(800, 800)
  
}

function draw() {
    for (let i = 0; i < colors.length; i++) { //loop created using array variable colors

        fill( colors[i] ) //color of rectangles will change accrouding to array values
        rotate(angle); //shape will spin and move away at an angle
        stroke(240, 61, 0)
        rect(mouseX, mouseY, 15, 15); //the rectangle will follow the mouse
        angle += 0.5;
    }
  
}
