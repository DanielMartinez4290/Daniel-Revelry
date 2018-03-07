<?php
/**
 * Template Name: Revelry PDF Template
 */
?>
<?php
  ob_start();
  include("wp-content/themes/danielrevelry/mpdf/mpdf.php");
  $mpdf = new mPDF();

  while(have_posts()): the_post();

  $leftColumnSet = get_post_meta( $post->ID, '_leftColumnSet', true );
  $rightColumnSet = get_post_meta( $post->ID, '_rightColumnSet', true );
  $requestOnly = get_post_meta( $post->ID, '_requestOnly', true );
?>
<div class="setListTitle">Revelry Request List</div>
<div class="leftColumn">	
<?= $leftColumnSet; ?>
</div>

<div class="rightColumn">
	<?= $rightColumnSet; ?>
	<!--
	<div class="otherSongsSection">
		<div class="otherSongsTitle">REQUEST ONLY:</div>
		<?= $requestOnly; ?>
	</div>
-->
	<div class="suggestedDonationSection">
	SUGGESTED DONATION
		<ul>
			<li> $3-$5 or Facebook like </li>
			<li> facebook.com/austinrevelry </li>
		</ul>
	</div>
</div>

<footer>
  revelryaustin.com
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
	49.) Cliffs of Dover - Eric Johnson<br>
	50.) I Wanna Be Sedated - The Ramones<br>
</div>
*/