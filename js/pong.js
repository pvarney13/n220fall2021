let colors = ["#bcb5ff", "#b5d9ff", "#b5ffeb", "#b5ffbc","#efffb5", "#ffdfb5", "#ffb9b5", "#f9b5ff"]

let ball = {
    x : 50,
    y : 200,
    diameter : 50
}

function setup() {
    createCanvas(700, 400)
  }

function draw() {
    background (255, 181, 229)
    for (let i = 0; i < colors.length; i++) { 
        fill( colors[i] ) 
        ellipse (ball.x * i, ball.y, ball.diameter * i, ball.diameter * i)
    }
}