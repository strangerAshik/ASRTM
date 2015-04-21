<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	public function years(){
		$years['']='Year';
		for($i =date('Y'); $i >=1930; $i--){$years[$i] = $i;} return $years;
	}
	public function years_from(){
		$years['']='Year';
		$j=2017;
		for($i =date('Y'); $i <=$j; $i++){$years[$i] = $i;} return $years;
	}
	
	public function dates(){
		$dates['']='Day';
		for($i =1; $i <=31; $i++){$dates[$i] = $i;}	return $dates;
	}
	public function months(){
		$months = [
		''=>'Month',
    'January' => 'January',
    'February' => 'February',
    'March' => 'March',
    'April' => 'April',
    'May' => 'May',
    'June' => 'June',
    'July' => 'July',
    'August' => 'August',
    'September' => 'September',
    'October' => 'October',
    'November' => 'November',
    'December' => 'December'
	];
		return $months;
	}
	protected function getPersonnelInfo(){
		$id = Auth::user()->emp_id();
		$query=DB::table('qualification_personal')->where('emp_id', '=', $id )->get();
		return $query;
	}
   //fill upload 
   protected function fileUpload($field_name,$folder_name){
	   if($file = Input::file($field_name)){
		$destinationPath = 'files/'.$folder_name;
		//$filename = $file->getClientOriginalName();
		$filename = time().'_'.Auth::user()->emp_id().'.'.$file->getClientOriginalExtension();
		$upload_success = Input::file($field_name)->move($destinationPath, $filename);
		return $filename;
		}
		else{
		return $filename='Null';
		}
   }
   protected function updateFileUpload($old_file,$new_file,$folder_name){
	   $old_file=Input::get($old_file);
		//image upload
		if($file = Input::file($new_file)){
		$destinationPath = 'files/'.$folder_name;
		//$filename = $file->getClientOriginalName();
		$filename = time().'_'.Auth::user()->getId().'.'.$file->getClientOriginalExtension();
		$upload_success = Input::file($new_file)->move($destinationPath, $filename);
		File::delete('files/'.$folder_name.'/'.$old_file);
		
		return $filename;
		}
		else{
			return $filename=$old_file;
		}
		//image upload end  
   }
   /*
   Return the different between 2 dates 
   */
 
}
