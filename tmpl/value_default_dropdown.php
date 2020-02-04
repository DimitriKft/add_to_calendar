<?php

	// var_dump($this->item);         // i have my value, she this is "public "fieldvalues=>array()...
	// var_dump($item->fieldvalues);
	// var_dump($this->field->value); // get an empty array
	// var_dump($values); // test $values , is empty array


$n = 0;

var_dump($n);

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
	if ($is_ingroup && $itemprop) $field->{$prop}[$n] = '<div style="display:inline" itemprop="'.$itemprop.'" ><h1>TOTOTOTOTO</h1>' .$field->{$prop}[$n]. '</div>';
	
	$n++;
	if (!$multiple) break;  // multiple values disabled, break out of the loop, not adding further values even if the exist
}


	
	