<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="jquery.flip.js"></script>
<script>
/*
function change_visibility(id, id2, id3) {
       var show = document.getElementById(id);
	   var hide1 = document.getElementById(id2);
	   var hide2 = document.getElementById(id3);	  
       hide1.style.display = 'none';
	   hide2.style.display = 'none';
       show.style.display = 'block';
}
function go_home(id, id2, id3){
	  var hide1 = document.getElementById(id);
	  var hide2 = document.getElementById(id2);
	  var hide3 = document.getElementById(id3);
	  hide1.style.display = 'none';
	  hide2.style.display = 'none';
	  hide.style.display = 'none';
}
*/

$(document).ready(function(){
$("body").flip({
	direction:'tb'
})
    $("#home_btn").click(
	function(){
   		 $("#about").hide();
		 $("#projects").hide();
		 $("#tutorials").hide();
 	}
   );
  $("#about_btn").click(function(){
	$("#about").show();
        }
   );
  $("#about").click(function(){
	$(this).css("background-color","black");
	$(this).css("height","4000");
  });
  $("#projects_btn").click(
        function(){
                 $("#about").hide();
                 $("#projects").show();
                 $("#tutorials").hide(); 
        }
   );
   $("#tutorials_btn").click(
        function(){
                 $("#about").hide();
                 $("#projects").hide();
                 $("#tutorials").show(); 
        }
   );



});

</script>
	<link href='style.css' rel='stylesheet' type='text/css'>
</head>
	<body>
		<table style="width:100%; height:600px;" border="0">
			<tr>
				<td class="nav" style="width:15%; background-color:#981e32;">
					<div style="height:200px;">
					<p style="font-family:fixedsys; padding:50px;"> WSU Robotics Club </p>
					</div>
					<div style="height:200px;">
						<ul>
							<li><button id="home_btn"> Home </button></li>
							<li><button id="about_btn"> About </button></li>
							<li><button id="projects_btn"> Projects </button></li>
							<li><button id="tutorials_btn"> Tutorials </button></li>
						</ul>
					</div>
					<div style="height:200px;">
					Email: robotics@eecs.wsu.edu
					</div>
				</td>
				<td class="nav" id="about" style="display:none; width:15%; background-color:#5e6a71;">
					<ul>
						<li>Club Structure</li>
						<li>Officers</li>
						<li>Members</li>
						<li>Pictures</li>
					</ul>
				</td>
				<td class="nav" id="projects" style="display:none; width:15%; background-color:#5e6a71;">
					<ul>
						<li>In Progress</li>
						<li>Completed</li>
						<li>Potential Projects</li>
					</ul>
				</td>
				<td class="nav" id="tutorials" style="display:none; width:15%; background-color:#5e6a71;">
					<ul>
						<li>Online tutorials</li>
						<li>Review Material</li>
						<li>Schedule</li>
					</ul>
				</td>
				<td id="home_content" class="nav" style="width:70%">
					<?php include 'home_content.php' ?>
				</td>
			</tr>
		</table>
	</body>
</html>
