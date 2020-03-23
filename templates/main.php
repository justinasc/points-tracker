<?php include 'inc/header.php';?>


<div id="wrapper">	
	<div class="title">
		<svg viewBox="0 -40 500 500">
			<path id="curve" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" />
			<text width="500">
			<textPath xlink:href="#curve">
				Team Norway
			</textPath>
			</text>
			
		</svg>
	</div>
	<img src="./images/viking.png" alt="">
	<div id="termometer">
		<div id="points" style="height:0" data-value="0 Points"></div>
		<div id="goal" style="height:28%" data-value="Team break - 350 Points"></div>
		<div id="goal" style="height:56%" data-value="Team lunch - 700 Points"></div>
		<div id="goal" style="height:100%" data-value="Team &quot;out&quot; - 1250 Points"></div>
		<div id="graduations"></div>
	</div>
	
	<div id="playground" style="display:none">		
		<div id="range">
			<input id="minPoints" type="text" value="0">
			<input type="range" min="0" max="1250" value="200">
			<input id="maxPoints" type="text" value="1250">
		</div>
	</div>

</div>
<script src="js/script.js"></script>
<?php include 'inc/footer.php';?>
