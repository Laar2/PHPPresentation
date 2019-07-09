<?php

include_once 'Sample_Header.php';

use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\Slide\Animation;
use PhpOffice\PhpPresentation\Style\Border;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Fill;
use PhpOffice\PhpPresentation\Shape\Audio;

// Create new PHPPresentation object
$objPHPPresentation = new PhpPresentation();
// Create slide
$currentSlide = $objPHPPresentation->getActiveSlide();




$oFill = new Fill();
$oFill->setFillType(Fill::FILL_SOLID)
->setStartColor(new Color('99FF0000'));

$shape3 = $currentSlide->createRichTextShape()
->setHeight(50)
->setWidth(20)
->setOffsetX(220)
->setOffsetY(220)
->setFill( $oFill)
;
$shape3->getBorder()->setColor(new Color('FF4477aa'))->setDashStyle(Border::DASH_SOLID)->setLineStyle(Border::LINE_DOUBLE);



$shape = $currentSlide->createRichTextShape()
->setHeight(625)
->setWidth(20)
->setOffsetX(20)
->setOffsetY(75)
->setFill( $oFill);


$oAnimation1 = new Animation();
$oAnimation1->addShape($shape);
$oAnimation1->setDuration(20);
$oAnimation1->setAnimEffectFilter('wipe(up)');
$oAnimation1->setAnimEffectTransition('out');
$currentSlide->addAnimation($oAnimation1);




$shape2 = $currentSlide->createRichTextShape()
->setHeight(50)
->setWidth(20)
->setOffsetX(320)
->setOffsetY(320)
->setFill( $oFill)
;


$oAnimation2 = new Animation();
$oAnimation2->addShape($shape2);
$oAnimation2->setDuration(5);
$oAnimation2->setAnimEffectFilter('fade');
$oAnimation2->setAnimEffectTransition('in');
$currentSlide->addAnimation($oAnimation2);





// Save file
echo write($objPHPPresentation, basename(__FILE__, '.php'), $writers);
if (!CLI) {
	include_once 'Sample_Footer.php';
}
