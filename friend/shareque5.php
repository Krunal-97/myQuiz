<?php
	include 'header4.php';
?>
<section>
		<div class="middle-que">
			<form action="includefrd/shareans5.php" method="POST" name = "quiz">
				<p class="middle-one">(5) What is the more preferable for <?php session_start(); include 'getusername1.php'; ?>?</p>
				<p class="middle-two">
				<input type="radio" name="q5" value="a">  A) Love before career<br>
				<input type="radio" name="q5" value="b">  B) Career before love<br>
				<input type="radio" name="q5" value="c">  C) Love and career simultaneously<br>
				</p>
				<center><button type="submit" name="submit" value="submit">Next</button></center>
			</form>
		</div>
	</section>
<?php
	include 'footer4.php';
?>