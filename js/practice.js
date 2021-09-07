
let radius = 50;


function setup() {
    background (0)
    createCanvas (600,600)
}

function draw () {
    background(0);
    
    circle (mouseX ,mouseY, radius)
    fill (168, x, 96)
}

function mousePressed(){
    if(radius<= 100) {
        radius = radius + 5;
    }
}

src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.min.js"