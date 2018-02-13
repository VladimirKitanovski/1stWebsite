var canvas = document.querySelector('canvas')
	;

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var c = canvas.getContext('2d');

/*

c.fillRect(600, 100, 100, 100);
c.fillRect(700, 100, 100, 100);
c.fillRect(500, 100, 100, 100);
c.fillRect(400, 100, 100, 100);
c.fillRect(300, 200, 100, 100);
c.fillRect(300, 100, 100, 100);
c.fillRect(300, 300, 100, 100);

c.fillStyle = "red";
c.fillRect(100, 300, 100, 100); 

c.fillStyle = "black";
c.fillRect(700, 300, 100, 100);
c.fillRect(700, 200, 100, 100);
c.fillRect(300, 400, 100, 100);
c.fillRect(300, 500, 100, 100);
c.fillRect(400, 500, 100, 100);
c.fillRect(700, 400, 100, 100);
c.fillRect(600, 500, 100, 100);
c.fillRect(700, 500, 100, 100);
c.fillRect(500, 500, 100, 100);
*/


console.log(canvas);

// Line

/*c.beginPath();
c.moveTo(100, 300);
c.lineTo(300, 200);
c.lineTo(300, 300);
c.lineTo(300, 200);
c.lineTo(200, 200);
c.strokeStyle = "orange";
c.stroke();
*/


/*

for (var i = 0; i < 100; i++) {
	var x = Math.random() * window.innerWidth;
	var y = Math.random() * window.innerHeight;
	c.beginPath();
	c.arc(x, y, 30, 0, Math.PI * 2, false);
	c.strokeStyle = getRandomColor();
	c.stroke();
}
*/

function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

/*
for (var i = 0; i < 50; i++) {
	var x = Math.random() * window.innerWidth;
	var y = Math.random() * window.innerHeight;
	c.fillRect(x, y, 100, 100);
	c.fillStyle = getRandomColor();
}


for (var i = 0; i < 50; i++) {
	var x = Math.random() * window.innerWidth;
	var y = Math.random() * window.innerHeight;
	c.beginPath();
	c.moveTo(x, y);
	c.lineTo(x, y);
	c.lineTo(x, y);
	c.lineTo(x, y);
	c.lineTo(x, y);
	c.strokeStyle = getRandomColor();
	c.stroke();
}
 */

 

var mouse = {
	x: undefined,
	y: undefined
}

var maxRadius = 40;
//var minRadius = 2;

var colorArray = [
	'#2196f3',
	'#222222',
	'#f9f9f9',
	'#999999',
	'#aeaeae',
];

window.addEventListener('mousemove', function(event){
	mouse.x = event.x;
	mouse.y = event.y;
})


window.addEventListener('resize', function() 
	{
		canvas.width = window.innerWidth;
		canvas.height = window.innerHeight;

		init();
});


function Circle(x, y, dx, dy, radius) {
	this.x = x;
	this.y = y;
	this.dx = dx;
	this.dy = dy;
	this.radius = radius;
	this.minRadius = radius;
	this.color = colorArray[Math.floor(Math.random() * colorArray.length)];

	this.draw = function() {
	 c.beginPath();
	 c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
	 c.fillStyle = this.color;
	 c.fill();
	}

	this.update = function() {
		if (this.x + this.radius > innerWidth || this.x - this.radius < 0) {
			 this.dx = -this.dx;
		 } 	

		 if (this.y + this.radius > innerHeight || this.y - this.radius < 0) {
		 	this.dy = -this.dy;
		 }
		 	this.x += this.dx;
		 	this.y += this.dy;

		 	// this is where interactivity is

		 	if (mouse.x - this.x < 50 && mouse.x - this.x > -50
		 		&& mouse.y - this.y < 50 && mouse.y - this.y  > -50
		 		) {
		 		if (this.radius < maxRadius) {
		 			this.radius += 1;

		 		}
		 	} else if (this.radius > this.minRadius){
		 		this.radius -= 1;
		 	}

		 	this.draw();
 	}
}


var circleArray = [];

function init() {

circleArray = [];

for (var i = 0; i < 1000; i++) {
	 	var radius = Math.random() * 3 + 1;
		var x = Math.random() * (innerWidth - radius * 2) + radius;
 		var y = Math.random() * (innerHeight - radius * 2) + radius;
 		var dy = (Math.random() - 0.5);
 		var dx = (Math.random() - 0.5);
		circleArray.push(new Circle(x, y, dx, dy, radius));
	}
}

 function animate() {
 	requestAnimationFrame(animate);
 	 c.clearRect(0, 0, innerWidth, innerHeight);

for (var i = 0; i < circleArray.length; i++) {
	circleArray[i].update();
	}

if (x + radius > innerWidth || x - radius < 0) {
	 dx = -dx;
 } else if (y + radius > innerHeight || y - radius < 0) {
 	dy = -dy;
 }
 	x += dx;
 	y += dy;
 }


 init();
 animate();


// RECTANGLE 

/*
 
var x = Math.random() * innerWidth;
var y = Math.random() * innerHeight;
var dx = (Math.random() - 0.5) * 8;
var dy = (Math.random() - 0.5) * 8;


function Rectangle(x, y, dx, dy) {
	this.x = x;
	this.y = y;
	this.dx = dx;
	this.dy = dy;

	this.draw = function() {
	c.fillRect(this.x, this.y, 100, 100);
	c.fillStyle = getRandomColor();
	c.stroke();
	c.fill();

	}

	this.update = function() {
		if (this.x + 100 > innerWidth || this.x - 0 < 0) {
		this.dx = -this.dx;
	}
		if (this.y + 100 > innerHeight || this.y - 0 < 0) {
		this.dy = -this.dy;
	}

		this.x += this.dx;
		this.y += this.dy;

		this.draw();
	}

}

var rectangleArray = [];

for (var i = 0; i < 100; i++) {
	var x = Math.random() * (innerWidth - 100 * 2) + 100;
	var y = Math.random() * (innerHeight - 100 * 2) + 100;
	var dx = (Math.random() - 0.5);
	var dy = (Math.random() - 0.5);
	rectangleArray.push(new Rectangle(x, y, dx, dy))

}


function animate() {
	requestAnimationFrame(animate);
	c.clearRect(0, 0, innerWidth, innerHeight);

	for (var i = 0; i < rectangleArray.length; i++) {
		rectangleArray[i].update();
	}

}

animate();


*/



