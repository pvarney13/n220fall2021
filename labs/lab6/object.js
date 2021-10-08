var rdm = {
  x: 0,
  y: 30,
  width: 20,
  height: 80
}

function setup () {
  createCanvas(1000,1000)
}

function draw () {
  background(245, 238, 166)
  translate(580, 200)

  for (let i = 0; i < 10; i ++) {
    ellipse (rdm.x, rdm.y, rdm.width, rdm.height)
    fill (230, 103, 94)
    rotate(PI/5)
  }
  rdm.x += 1
}
