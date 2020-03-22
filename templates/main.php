<?php include 'inc/header.php';?>

<?php foreach($points as $point): ?>

<div id="wrapper">	
	<div id="termometer">
		<div id="points" style="height:0" data-value="0 Points"></div>
		<div id="goal-1" style="height:28%" data-value="350 Points"></div>
		<div id="goal-2" style="height:56%" data-value="700 Points"></div>
		<div id="graduations"></div>
	</div>
	
	<div id="playground">		
		<div id="range">
			<input id="minPoints" type="text" value="0">
			<input type="range" min="0" max="1250" value="<?php echo $point->points ?>">
			<input id="maxPoints" type="text" value="1250">
		</div>
	</div>
	
<?php endforeach; ?> 

</div>
<script src="js/script.js"></script>
<?php include 'inc/footer.php';?>
