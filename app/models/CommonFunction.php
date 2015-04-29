<?php

class CommonFunction extends \Eloquent {
	protected $fillable = [];
	static function dDays($day,$month,$year){
	 $months=[
		''=>'Month',
    '1' => 'January',
    '2' => 'February',
    '3' => 'March',
    '4' => 'April',
    '5' => 'May',
    '6' => 'June',
    '7' => 'July',
    '8' => 'August',
    '9' => 'September',
    '10' => 'October',
    '11' => 'November',
    '12' => 'December'
	];
	for($i=1;$i<=12;$i++){
		if($months[$i]==$month){
			$month=$i;
		}
	}
	 $date=$day.'-'.$month.'-'.$year;
	 $now = time(); // or your date as well
     $your_date = strtotime($date);
     $datediff = $your_date-$now ;
     return floor($datediff/(60*60*24));

   }
      static function updateMultiSelection($table_name, $where_field_name, $where_field_value, $field_name_of_target_value){
	   //Multiple selection update
		$query =  DB::table($table_name) ->where( $where_field_name,'=',$where_field_value)->pluck( $field_name_of_target_value);
		return $dquery=unserialize($query);
		//return 'Hellod';
		//End Multiple selection update
	   
   }
}