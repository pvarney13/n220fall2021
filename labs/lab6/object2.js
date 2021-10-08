var n = {
    x : 0,
    y : 230,
    diameter : 50
}
let r = 76
let g = 52
let b = 235


function setup() {
  createCanvas(800, 450)
}

function draw () {
    background(r, g, b)
    ellipse (n.x, n.y, n.diameter, n.diameter)
    fill (180, 223, 250)

    n.x += 1
    n.diameter += 0.5
}
