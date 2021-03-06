<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />

    <title>Flocon de Koch - hbassinot.com</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <?php include("../analytics.php"); ?>
  </head> 
  <body>
    <div>
	    <h1>Flocon de Koch et variations:</h1>
	    Itération:
	    <select id="iteration">
		    <option value="0">0</option>
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
		    <option value="6">6</option>
		    <option value="7">7</option>
		    <option value="8">8</option>
	    </select>
	    <br />
	    Taille:
	    <select id="size">
		    <option value="200">200</option>
		    <option value="300">300</option>
		    <option value="400">400</option>
		    <option value="500" selected="selected">500</option>
		    <option value="600">600</option>
		    <option value="700">700</option>
		    <option value="800">800</option>
		    <option value="900">900</option>
		    <option value="1000">1000</option>
		    <option value="1500">1500</option>
	    </select>
	    <br />
	    Nombre d'arrète:
	    <select id="edge">
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3" selected="selected">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
		    <option value="6">6</option>
		    <option value="7">7</option>
		    <option value="8">8</option>
	    </select>
	    <br />
	    Forme de base<input type="checkbox" id="shape" value="true"/>
	    <br />
	    <canvas id="moncanevas" width="2000" height="2000">
		    Canvas n'est pas implémenté dans ce navigateur.
	    </canvas>  
    </div>

    <script>
    /** */
    var canvas = document.getElementById("moncanevas");
    var context = canvas.getContext("2d");

    /** */
    $("#iteration, #size, #edge, #shape").change(function() {
	    setCanvas();
    });

    var colors = ['green', 'blue', 'black', 'red', 'purple', 'pink', 'brown', 'grey'];

    /** */
    function reset() {
	    iteration = Number($("#iteration").val());
	    edge = Number($("#edge").val());
	    size = Number($("#size").val());
	    decal = $("#shape").is(":checked");
	    lastStartX = size;
	    lastStartY = size / 2;
	    radius = 0;

	    LEFT = -1*Math.PI/3;
	    RIGHT = 2*Math.PI/3;
	    RIGHT_SEGMENT = 2*Math.PI/edge;
	
	    LEFTN = (2-edge)*Math.PI/edge;
	    RIGHTN = (2)*Math.PI/edge;;
	
	    context.clearRect(0, 0, canvas.width, canvas.height);
    }


    /** */
    function angle(r, l) {
	    lastStartX=lastFinishX;
	    lastStartY=lastFinishY;
	
	    radius += r;
	    radius %= 2*Math.PI;
    }

    function drawLine(startX, startY, l) {
	    context.beginPath();
	    context.strokeStyle=color;
	    context.moveTo(startX,startY);

	    lastFinishX = Math.cos(radius) * l + startX;
	    lastFinishY = Math.sin(radius) * l + startY;
	
	    context.lineTo(lastFinishX,lastFinishY);
	    context.stroke(); 
    }

    function segment(n, l) {
	    if(n == 0) {
		    drawLine(lastStartX, lastStartY, l);
	    } else {
		    if(decal) {
			    for(var e = 0; e < edge; e++) {
				    segment(n-1, l/3);
				    if(e == 0 || e == (edge - 1)) {
					    angle(LEFTN, l);
				    } else {
					    angle(RIGHTN, l);
				    }
			    }
			    segment(n-1, l/3);
		    } else {
			    segment(n-1, l/3);
			    angle(LEFT, l);
			    segment(n-1, l/3);
			    angle(RIGHT, l);
			    segment(n-1, l/3);
			    angle(LEFT, l);
			    segment(n-1, l/3);
		    }
	    }
    }

    function flocon(n, l) {
	    for(var i = 0; i < edge; i++) {
		    color = colors[i];
		    segment(n, l);
		    angle(RIGHT_SEGMENT, l);
	    }
    }


    /** */
    function setCanvas() {
	    reset();
	    flocon(iteration, size);
    }

    window.onload=setCanvas;
    </script>
  </body>
</html>

