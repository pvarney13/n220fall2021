function setup() {
  createCanvas(400, 300);

}

function draw() {
  circle(mouseX, mouseY,15,15)

  if (mouseX<200) {
    fill(0,0,255)
  }
  if (mouseX>200){
    fill(255,0,0)
  }
}
