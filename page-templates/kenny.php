<?php
error_reporting(0); // Turn off all error reporting

/**
 * Template Name: Kenny PDF Template
 */

ob_start();

include("wp-content/themes/danielrevelry/mpdf/mpdf.php");

$mpdf = new mPDF();
while(have_posts()): the_post();

  $leftColumnSet = get_post_meta( $post->ID, '_leftColumnSet', true );
  $rightColumnSet = get_post_meta( $post->ID, '_rightColumnSet', true );
  $requestOnly = get_post_meta( $post->ID, '_requestOnly', true );
?>
<section class="acousticPdfPage">
<div class="setListTitle">Kenny and the Jets Request List</div><br>
<div class="leftColumn">
	<?= $leftColumnSet; ?>
</div>
<div class="rightColumn">
	<?= $rightColumnSet; ?>
</div>

<footer>
  
</footer>
</section>

<?php

endwhile;

$html = ob_get_contents();
ob_end_clean();
$stylesheet = file_get_contents('wp-content/themes/danielrevelry/css/kenny.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html,2);
$mpdf->Output();
exit;
