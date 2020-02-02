<?php

$n = 0;

// var_dump($this->field);        // liste       object
// var_dump($this->values);       // array       empty 
// var_dump($this->field->value); // array       empty
// var_dump($field);              // intersting, this variable works like $this->field !
// var_dump($this->item);         // i           have my       value, she this is "public "fieldvalues=>array()...
var_dump($item->fieldvalues);
$title_test =  $item->fieldvalues[21][0];
$desc_test  =  $item->fieldvalues[26][0];
$date_start =  $item->fieldvalues[24][0];
$date_end   =  $item->fieldvalues[25][0];
$pattern = array("-", ":");
$date_start = str_replace($pattern, "","$date_start");
$date_start = str_replace(" ", "T",$date_start);
echo $date_start . '<br>';
$date_end = str_replace($pattern, "","$date_end");
$date_end = str_replace(" ", "T",$date_end);
echo $date_end;
// echo $item->fieldvalues[21][0] . '<br>';
// echo $item->fieldvalues[26][0] . '<br>';
// echo $item->fieldvalues[24][0] . '<br>';
// echo $item->fieldvalues[25][0] . '<br>';
echo '<a href="https://www.google.com/calendar/render?action=TEMPLATE&text=' . $item->fieldvalues[21][0] . '&dates=' . $date_start . '00Z/' .$date_end   . '00Z&ctz=Europe/Paris&details=' . $desc_test . '&location=paris,%20france">LIEN GOOGLE CALENDAR</a>';
foreach ($values as $value)
{
	// Skip empty value, adding an empty placeholder if field inside in field group
	if ( !strlen($value) )
	{
		if ( $is_ingroup )
		{
			$field->{$prop}[$n++]	= '';
		}
		continue;
	}

	// Add prefix / suffix
	$field->{$prop}[$n]	= $pretext . $value . $posttext;

	// Add microdata to every value if field -- is -- in a field group
	if ($is_ingroup && $itemprop) $field->{$prop}[$n] = 'TOTO<div style="display:inline" itemprop="'.$itemprop.'" >' .$field->{$prop}[$n]. '</div>';

	$n++;
	if (!$multiple) break;  // multiple values disabled, break out of the loop, not adding further values even if the exist
}