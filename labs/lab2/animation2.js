
let x = 800
let y = 600
let xspeed = 5
let yspeed = 5

let r = 25

function setup() {
  createCanvas(800, 600);

}

function draw() {
  background(0);
  ellipse(x, y, r*2, r*2);
  x += xspeed
  y += yspeed
  if (x > width - r || x < r) {
    xspeed = -xspeed;
  }
  if (y > height - r || y < r) {
    yspeed = -yspeed;
  }


}