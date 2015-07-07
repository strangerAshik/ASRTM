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
   static function listsOfColumn($tableName,$columnName){
    return DB::table($tableName)->orderBy($columnName)->lists($columnName,$columnName);
   }
   static function hasPermission($moduleName,$empId,$colName){
   	return DB::table('module_user_permission')
   	->where('user_id',$empId)
   	->where('module_name',$moduleName)
   	->pluck($colName);

   }
   static function getOptions($dropdownName){
    $tableName='dropdown_option_management';
    $options='options';
    $select=array(''=>'--Select--');
    $options=DB::table($tableName)->where('dropdown_names',$dropdownName)
          ->where('soft_delete','<>','1')
          ->lists($options,$options);
    $options=array_merge($select,$options);
    return $options;
   }
   static function pelLicenseType($empId){
  return  DB::table('pel_general_info')
    ->where('emp_id',$empId)  
    ->pluck('license_type');
}
static function getInspectorList(){
  return DB::table('users')->where('role','Inspector')->lists('name');
}
static function inspectionHappend($sia_number){
return DB::table('sia_action')->where('sia_number',$sia_number)->count();
//  return 0;
}
static function stateOfReg(){
  return DB::table('aircraft_primary_info')->lists('state_registration','state_registration');
}
static function date($strToTIme){
  return date('d',strtotime($strToTIme));
}

static function month($strToTIme){
  return date('F',strtotime($strToTIme));
}
static function year($strToTIme){
  return date('Y',strtotime($strToTIme));
}

}