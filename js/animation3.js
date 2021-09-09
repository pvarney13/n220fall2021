var radius = 40;
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
  arc(x, 60, radius, radius, 0.52, 5.76);
}
