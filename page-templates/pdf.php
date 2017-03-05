<?php
/**
 * Template Name: PDF Template
 */

ob_start();

//error_reporting(E_ALL);
//ini_set('display_errors', 1);
require('fpdf.php');

class PDF extends FPDF
{
protected $B = 0;
protected $I = 0;
protected $U = 0;
protected $HREF = '';

function WriteHTML($html)
{
    // HTML parser
    $html = str_replace("\n",' ',$html);
    $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
    foreach($a as $i=>$e)
    {
        if($i%2==0)
        {
            // Text
            if($this->HREF)
                $this->PutLink($this->HREF,$e);
            else
                $this->Write(5,$e);
        }
        else
        {
            // Tag
            if($e[0]=='/')
                $this->CloseTag(strtoupper(substr($e,1)));
            else
            {
                // Extract attributes
                $a2 = explode(' ',$e);
                $tag = strtoupper(array_shift($a2));
                $attr = array();
                foreach($a2 as $v)
                {
                    if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                        $attr[strtoupper($a3[1])] = $a3[2];
                }
                $this->OpenTag($tag,$attr);
            }
        }
    }
}

function OpenTag($tag, $attr)
{
    // Opening tag
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,true);
    if($tag=='A')
        $this->HREF = $attr['HREF'];
    if($tag=='BR')
        $this->Ln(6);
}

function CloseTag($tag)
{
    // Closing tag
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,false);
    if($tag=='A')
        $this->HREF = '';
}

function SetStyle($tag, $enable)
{
    // Modify style and select corresponding font
    $this->$tag += ($enable ? 1 : -1);
    $style = '';
    foreach(array('B', 'I', 'U') as $s)
    {
        if($this->$s>0)
            $style .= $s;
    }
    $this->SetFont('',$style);
}

function PutLink($URL, $txt)
{
    // Put a hyperlink
    $this->SetTextColor(0,0,255);
    $this->SetStyle('U',true);
    $this->Write(5,$txt,$URL);
    $this->SetStyle('U',false);
    $this->SetTextColor(0);
}
}

$dash = utf8_encode("-");

$html = 'Daniel Revelry Trio Set List<br>
1.) Brown Eyed Girl '.$dash.' Van Morrison<br>
2.) Drift Away '.$dash.' Uncle Kracker<br>
3.) Voodoo Child '.$dash.' Jimi Hendrix<br>
4.) Pride and Joy '.$dash.' Stevie Ray Vaughan<br>
5.) Gravity '.$dash.' John Mayer<br>
6.) Yellow Ledbetter '.$dash.' Pearl Jam<br>
7.) Gypsy Soul '.$dash.' Daniel Revelry Trio<br>
8.) When I Come Around '.$dash.' Green Day<br>
9.) Valerie '.$dash.' Amy Winehouse<br>
10.) Free Bird '.$dash.' Lynyrd Skynyrd<br>
11.) Sweet Home Alabama '.$dash.' Lynyrd Skynyrd<br>
12.) Bright Lights '.$dash.' Gary Clark Jr<br>
13.) Seven Nation Army '.$dash.' The White Stripes<br>
14.) Killing In The Name of '.$dash.' Rage Against The Machine<br>
15.) Waitin On The World To Change '.$dash.' John Mayer<br>
16.) The Middle '.$dash.' Jimmy Eat World<br>
17.) Basketcase '.$dash.' Green Day<br>
18.) What I Got '.$dash.' Sublime<br>
19.) Garden Grove '.$dash.' Sublime<br>
20.) Little Wing '.$dash.' Jimi Hendrix<br>
21.) Another Brick In The Wall '.$dash.' Pink Floyd<br>
22.) Far Behind '.$dash.' Candlebox<br>
23.) Bulls on Parade '.$dash.' Rage Against The Machine<br>
24.) Rock N Roll All Night '.$dash.' KISS<br>
25.) Under The Bridge '.$dash.' Red Hot Chili Peppers<br>
26.) Stranglehold '.$dash.' Ted Nugent<br>
27.) Sweet Caroline '.$dash.' Neil Diamond<br>
28.) Purple Rain / Under The Bridge '.$dash.' Prince / RHCP<br>
29.) Folsom Prison Blues '.$dash.' Johnny Cash<br>
30.) Wagon Wheel '.$dash.' Old Crow Medicine Show<br>
31.) Friends In Low Places '.$dash.' Garth Brooks<br>
32.) Caress Me Down '.$dash.' Sublime<br>
33.) Hard To Handle '.$dash.' The Black Crowes<br>
34.) Santeria '.$dash.' Sublime<br>
35.) I Wanna Be Sedated '.$dash.' The Ramones<br>
36.) Down '.$dash.' 311<br>
37.) In Da Club '.$dash.' 50 Cent<br>
38.) Aeroplane '.$dash.' Red Hot Chili Peppers<br>
39.) I Want You To Want Me '.$dash.' Cheap Trick<br>
40.) Doin Time '.$dash.' Sublime<br><br>
OTHER SONGS:<br>
1.) Fire '.$dash.' Daniel Revelry Trio <br>
2.) Whiskey Train '.$dash.' Daniel Revelry Trio <br>
3.) Wonderwall '.$dash.' Oasis<br>
';

$pdf = new PDF();
// First page
$pdf->SetTitle('Daniel Revelry Trio Set List');
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->SetLeftMargin(5);
//$pdf->Write(5,"To find out what's new in this tutorial, click ");
$pdf->WriteHTML($html);
//$pdf->SetFont('','U');
//$link = $pdf->AddLink();
//$pdf->Write(5,'here',$link);
//$pdf->SetFont('');

// Second page
/*
$pdf->AddPage();
$pdf->SetLink($link);
//$pdf->Image('logo.png',10,12,30,0,'','http://www.fpdf.org');
$pdf->SetLeftMargin(25);
$pdf->SetFontSize(14);
$pdf->WriteHTML($html);
*/
$pdf->Output();

?>