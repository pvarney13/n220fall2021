//variable for radius
radius = 30

//make canvas and setup
function setup() {
    createCanvas(400, 400)

}

//draw
function draw() {
    //draw circle at position of mouse
    circle(mouseX, mouseY, radius)

}

//if spacebar pressed, decrease circle size
function keyPressed() {
    if (key == '') { // '' is space
        radius = radius - 0.5 //decrease size
    }
}