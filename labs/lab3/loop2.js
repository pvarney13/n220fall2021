let y = 200

function setup() {
  createCanvas(1300, 600)
  
}

function draw() {
  background(255)
  fill(0)
  noStroke()

  for (let i = 1; i < 25; i++) {
    let x = (i * 50) + 50
    ellipse(x + 25, y + 25, 50, 50)
    fill(0)

    /* set purple circle*/
    if (i % 3 === 0) {
      fill(102, 66, 245)
    }
    
    /* set green square*/
    if (i % 5 === 0) {
      fill(4, 181, 45)
      square(x, y, 50)
    }

    /* set blue square*/
    if (i % 3 === 0 && i % 5 == 0) {
      fill(17, 72, 237)
      square(x, y, 50)
    }
  }
} 