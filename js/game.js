<script type = "text/javascript">



var pjs = new PointJS('2d', 400, 400);
pjs.system.initFullPage();

var vector = pjs.vector;
var log = pjs.system.log;
var game = pjs.game;
var point = vector.point;
var size = vector.size;
var camera = pjs.camera;
var brush = pjs.brush;
var OOP = pjs.OOP;

var touch = pjs.touchControl;
touch.initTouchControl();

var backgroung = game.newImageObject({
	x : 0, y : 0,
	file : 'game/img/background_1.jpg'
});

game.newLoop('game', function() {
	game.fill('#D9D9D9');

	brush.drawText({
		x : 10, y : 10,
		text : 'TBM Game!',
		size : 30,
		color : '#515151'
	});

});

