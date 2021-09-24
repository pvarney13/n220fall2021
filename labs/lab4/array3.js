
let x = []
let y = []

function setup() {
  createCanvas(800, 800);

  for (let i = 0; i < 10; i++) {
    x[i] = 0
    y[i] = 0
  }
}

function draw() {
  background(255)
  x[x.length - 1] = mouseX
  y[y.length - 1] = mouseY
 
  for (let i = 0; i < x.length - 1; i++) {
    x[i] = x[i + 1]
    y[i] = y[i + 1]
  }

  for (let i = 0; i < x.length; i++) {
    ellipse(x[i], y[i], 25, 25)
    fill(252, 156, 0)
    strokeWeight(5)
  }
}