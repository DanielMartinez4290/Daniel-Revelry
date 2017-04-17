<?php
/**
 * Template Name: Trio PDF Template
 */
?>
<?php
  ob_start();
  include("wp-content/themes/danielrevelry/mpdf/mpdf.php");
  $mpdf = new mPDF();

  while(have_posts()): the_post();

  $leftColumnSet = get_post_meta( $post->ID, '_leftColumnSet', true );
  $rightColumnSet = get_post_meta( $post->ID, '_rightColumnSet', true );
?>
<div class="setListTitle">Daniel Revelry Trio Request List</div>
<div class="leftColumn">	
<?= $leftColumnSet; ?>
</div>

<div class="rightColumn">
<?= $rightColumnSet; ?>
</div>

<div class="suggestedDonationSection">
	SUGGESTED DONATION
	<ul>
		<li> $5 or Facebook like </li>
		<li> facebook.com/danielrevelrytrio </li>
	</ul>
</div>
<footer>
  danielrevelry.com/trio
</footer>

<?php 

endwhile;

$html = ob_get_contents();
ob_end_clean();
$stylesheet = file_get_contents('wp-content/themes/danielrevelry/css/trio-pdf.css');

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html,2);
$mpdf->Output();
exit;

/*
<div class="otherSongsSection">
	<div class="otherSongsTitle">OTHER SONGS:</div>
	41.) Fire - Daniel Revelry Trio <br>
	42.) Little Wing - Jimi Hendrix <br>
	43.) Wonderwall - Oasis<br>
	44.) Sweet Caroline - Neil Diamond<br>
	45.) Drift Away - Uncle Kracker<br>
	46.) Wagon Wheel - Old Crow Medicine Show<br>
	47.) Friends In Low Places - Garth Brooks<br>
	48.) Santeria - Sublime<br>
	49.) Cliffs of Dover - Eric Johnson<br>
	50.) I Wanna Be Sedated - The Ramones<br>
</div>
*/