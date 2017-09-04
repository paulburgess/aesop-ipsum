<?php

include('words.php');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Placeholder text using Aesop Rock lyrics</title>
	<link rel="stylesheet" href="_/css/screen.css?carpenter">

	<meta name="description" content="Create placeholder text using Aesop Rock lyrics">
<link rel="icon" type="image/png" href="https://projects.delargedesign.com/assets/images/favicon.png?v16021093844051"/>

<meta property="og:type" content="website">
<meta property="og:title" content="Aesop ipsum - placeholder text using Aesop Rock lyrics">
<meta property="og:site_name" content="Aesop ipsum">
<meta property="og:url" content="https://aesop.rocks/">
<meta property="og:image" content="https://aesop.rocks/_/img/share.jpg">
<meta property="og:description" content="When you can't work with real content, bring some of the illest rap lyrics ever written to your projects">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@delarge">
	<meta name="twitter:title" content="Aesop ipsum - placeholder text using Aesop Rock lyrics">
	<meta name="twitter:description" content="When you can't work with real content, bring some of the illest rap lyrics ever written to your projects">
	<meta name="twitter:image" content="https://aesop.rocks/_/img/share.jpg">

</head>
<body>

<div class="image-strip">
	<div class="image-strip__image">
		<img src="_/img/header.jpg" alt="Aesop Rock performing live">
	</div>
	<!-- image-strip__image -->
</div>

<header role="banner">
<!-- <img src="_/img/header.jpg" alt="Aesop Rock"> -->
	<div class="holder">
		<h1>Aesop Ipsum</h1>
		<h2>Placeholder text using Aesop Rock lyrics</h2>
	</div>
</header>

<div class="intro">
		<div class="holder">
			<p>When you can't work with real content, bring some of the illest rap lyrics ever written to your projects:</p>
		</div>
</div>
<!-- intro -->

	<main>
	<article>
		<h1><?php echo getTitle(); ?></h1>

		<section>
			<?php
			// =================
			// Loop them

			//$lines = isset($_GET['lines']) ? $_GET['lines'] : 2;

			echo "<p>";
			loopLines(2,3);
			echo "</p>";


			// =================
			// Titles, we don't need to loop - just pluck
			// echo "<p>Titles:</p>";
			// echo "<h1>" .getTitle(). "</h1>";
			// echo "<h2>" .getTitle(). "</h2>";

			?>

			<!-- <img/> -->

			<ul>

				<?php

				for ( $i = 0; $i < 4; $i++ )
				{
					echo"<li>";
					echo getTitle();
					echo "</li>";
				}

				?>
			</ul>

			<?php
			echo "<p>";
			loopLines(1,4);
			echo "</p>";
			?>

		</section>
		<h2><?php echo getTitle(); ?></h2>
		<section>
			<?php
			echo "<p>";
			for ( $i = 0; $i < 2; $i++ )
			{
				echo getLine();
				echo " ";
			}
			echo "</p>";
			?>

			<?php
			echo "<p>";
			loopLines(2,4);
			echo "</p>";
			?>


		</section>

		<h3><?php echo getTitle(); ?></h3>
		<section>

			<?php
			echo "<p>";
			loopLines(2,5);
			?>

		</section>

	</article>


	<div class="refresh">

		<button onclick="javascript:window.location.reload();"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve"><g transform="translate(0, 0)"><path fill="#444444" d="M7.5,14C4.5,14,2,11.5,2,8.5S4.5,3,7.5,3c1.2,0,2.2,0.4,3.2,1H8v2h6V0h-2v2.5C10.7,1.5,9.2,1,7.5,1 C3.4,1,0,4.4,0,8.5S3.4,16,7.5,16S15,12.6,15,8.5h-2C13,11.5,10.5,14,7.5,14z"></path></g></svg> Refresh the page for different text</button>


	</div>


</main>




<footer>
	<div class="holder">


	<p><a href="https://rhymesayers.com/artists/aesoprock">Aesop Rock on rhymesayers.com</a></p>

	<div class="foot-notes">
		<p><a href="https://www.flickr.com/photos/delarge/2230759958/in/album-72157603822916205/">Header photo</a> by <a href="http://www.simonwaller.co.uk/">Simon Waller</a></p>
		<p>A project from the <a href="https://projects.delargedesign.com/">Delarge web studio</a></p>
	</div>

	</div>

</footer>

</body>
</html>
