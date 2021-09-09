var radius = 100;
var x = -radius;
var speed = 5;

function setup() {
  createCanvas(800, 600);
  ellipseMode(RADIUS);
}

function draw() {
  background(131, 8, 140);
  x += speed;  
  if (x > width+radius) { 
    x = -radius;  
  }
  ellipse(x,300,radius,radius);
}
