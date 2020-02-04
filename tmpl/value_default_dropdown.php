<?php

$n = 0;

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



	// var_dump($this->item);         // i have my value, she this is "public "fieldvalues=>array()...
	// var_dump($item->fieldvalues);
	// var_dump($this->field->value); // get an ampty array
	
	// $titleGoogleCalendar      =  $item->fieldvalues[21][0];
	// $descGoogleCalendar       =  $item->fieldvalues[26][0];
	// $date_startGoogleCalendar =  $item->fieldvalues[24][0];
	// $date_endGoogleCalendar   =  $item->fieldvalues[25][0];
	// $locationGoogleCalendar   =  $item->fieldvalues[23][0];
	
	// $remplace   = array("-", ":");
	// $date_startGoogleCalendar = str_replace($remplace, "","$date_startGoogleCalendar");
	// $date_startGoogleCalendar = str_replace(" ", "T",$date_startGoogleCalendar);
	// $date_endGoogleCalendar   = str_replace($remplace, "","$date_endGoogleCalendar");
	// $date_endGoogleCalendar   = str_replace(" ", "T",$date_endGoogleCalendar);
	
	// var_dump($title_event);
	// echo '<button>
	// 	  <a href="https://www.google.com/calendar/render?action=TEMPLATE&text=' . $titleGoogleCalendar . '&dates=' . $date_startGoogleCalendar . '00Z/' .$date_endGoogleCalendar   . '00Z&ctz=Europe/Paris&details=' . $descGoogleCalendar . '&location=">LIEN GOOGLE CALENDAR</a>
	// 	  </button>';
		//   var_dump($this->values);  // get an empty array