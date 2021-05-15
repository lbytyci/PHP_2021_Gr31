
	var canvas = document.querySelector('canvas');
var c = canvas.getContext('2d');

canvas.width = window.innerWidth-20;
canvas.height = window.innerHeight;


// Variables
var mouse = {
	x: window.innerWidth / 2,
	y: window.innerHeight / 2 
};

var colors = [
	'#4b789b',
	'#f6d6cb',
	'#eddee5',
	'#a09eae',
	'#8493ae'
];

var gravity = 0.2;
var friction = 0.98;


// Event Listeners
addEventListener("mousemove", function(event) {
	mouse.x = event.clientX;
	mouse.y = event.clientY;
});

addEventListener("resize", function() {
	canvas.width = innerWidth;	
	canvas.height = innerHeight;
  init();
});

addEventListener("click", function(event) {
	init();
});


// Utility Functions
function randomIntFromRange(min,max) {
	return Math.floor(Math.random() * (max - min + 1) + min);
}

function randomColor(colors) {
	return colors[Math.floor(Math.random() * colors.length)];
}


// Objects
function Ball(x, y, dx, dy, radius, color) {
	this.x = x;
	this.y = y;
	this.dx = dx;
	this.dy = dy;
	this.radius = radius;
	this.color = color;

	this.update = function() {
		if (this.y + this.radius + this.dy> canvas.height) {
			this.dy = -this.dy;
			this.dy = this.dy * friction;
			this.dx = this.dx * friction;
		} else {
			this.dy += gravity;
		}

		if (this.x + this.radius >= canvas.width || this.x - this.radius <= 0) {
			this.dx = -this.dx * friction;
		}

		this.x += this.dx;
		this.y += this.dy;
		this.draw();
	};

	this.draw = function() {
		c.beginPath();
		c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);	
		c.fillStyle = this.color;
		c.fill();
		
		c.closePath();
	};
}


// Implementation
var ballArray = [];

function init() {
	ballArray = [];
var i = 0;
	while ( i < 300 ) {
		var radius = randomIntFromRange(10, 20);
		var x = randomIntFromRange(radius, canvas.width - radius);
		var y = randomIntFromRange(0, canvas.height - radius);
		var dx = randomIntFromRange(-2, 3);
		var dy = randomIntFromRange(-2, 2);
	    ballArray.push(new Ball(x, y, dx, dy, radius, randomColor(colors)));
		i++;
	}
}

// Animation Loop
function animate() {
	requestAnimationFrame(animate);

	c.clearRect(0, 0, canvas.width, canvas.height);

	for (let i = 0; i < ballArray.length; i++) {
		ballArray[i].update();
	}
}

init();
animate();