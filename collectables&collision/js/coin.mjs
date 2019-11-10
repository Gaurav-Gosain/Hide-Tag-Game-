class Coin {
  constructor({ id, x = 10, y = 10, w = 32, h = 32 }) {
    this.x = x;
    this.y = y;
    this.w = w;
    this.h = h;
    this.xpAdded = 10;
    this.id = id;
  }

  draw(ctx) {
    ctx.beginPath();
    //ctx.fillStyle = "yellow";
    var img = new Image();
    img.src = '../Character Sprite.png'
    ctx.drawImage(img,0, 0, img.width, img.width, this.x, this.y, 32, 32);
  }
} 

export default Coin;
