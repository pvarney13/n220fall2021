function setup() {
    createCanvas (1000,1000)
}

let radius = 200
let x = 194
let y = 236
let z = 255
let r = 500
let q = 350


function draw() {
    circle (r, q, radius)
    fill (y, x, z, 15)
    stroke (163, 0, 181)

    rect (x,y,x,y)
    
   beginShape ();
   vertex (r,x)
   vertex (y,x)
   vertex(y,z)
   vertex (r,x)
   endShape();
   
    
}

function mouseMoved() {
   r -= 1
   q -= 1
   x -= 1
   y -= 1
   z -= 1
   radius -= 1
   
}