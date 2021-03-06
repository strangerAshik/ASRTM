@extends('layout')    
@section('content')
<span style='display:none'>
{{$role=Auth::User()->Role()}}
</span>
<section class='content widthController' style='margin: 0 auto; max-width: 1000px;'>
<div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">									
                                    <h3 class="box-title">Supporting Documents</h3>
									<div class="col-md-4 col-md-offset-3  position">
										<form action="" class="search-form">
											<div class="form-group has-feedback">
												<label for="search" class="sr-only">Search</label>
												<input type="text" class="form-control" name="search" id="search" placeholder="search">
												<span class="glyphicon glyphicon-search form-control-feedback"></span>
											</div>
										</form>
									</div>
                                </div><!-- /.box-header -->
							</div>
						</div>
</div>


@foreach($docTypes as $docType)
         <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">									
                                    <h3 class="box-title">{{ $cat=$docType}}</h3>
									<div class="col-md-4 col-md-offset-3  position">
										<form action="" class="search-form">
											
										</form>
									</div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
								
                                    <table class="table table-bordered table-hover dataTable">
								
									
									 @foreach($allDocs as $info)									
										<tbody >
										
										 @if($info->doc_type==$cat)
											 <tr>
												 <td>
												Title:  {{$info->doc_title}}</br>
												Author(s):
												@if($authors=CommonFunction::updateMultiSelection('lib_suporting_docs', 'id',$info->id,'doc_authors'))
													@foreach($authors as $key=>$value)
														{{$value}},
													@endforeach
												@endif
												</br>
												ISBN:  {{$info->doc_isbn}}</br>
												 Published Year: {{$info->doc_published_year}}</br>
												 </td> <td>
												Series: {{$info->doc_series}}</br>
												Edition: {{$info->doc_edition}}</br>
												Part : {{$info->doc_part}}</br>
												Volume : {{$info->doc_volume}}</br>
												Amendment: {{$info->doc_amendment}}</br>
												
												 </td> <td>
												Supporting Website(s): {{$info->doc_url}}</br>
												Supported Doc: 											@if($info->doc_upload!='Null'){{HTML::link('files/lib_supporting_docs/'.$info->doc_upload,'Document',array('target'=>'_blank'))}}
													@else
														{{HTML::link('#','No Document Provided')}}
													@endif</br>
												 </td>
												 <td>
												Doc Status: {{$info->doc_status}}</br>
												<span class='pule-left'>
												
										{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('lib_suporting_docs',$info->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
									
										{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('lib_suporting_docs', $info->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
									
									
									
										 <a data-toggle="modal" data-target="#updateSupportingDocs{{$info->id}}" href='' style='color:green;float:right;padding:5px;'>
											<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
										</a>
									
									 </span>
												 </td>
											 </tr>
										@endif
										</tbody>
									@endforeach
							
								
										
									</table>
									
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
      </div>    
	  	@endforeach
		   @foreach($allDocs as $info)	
	  <div class="modal fade" id="updateSupportingDocs{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">New Supporting Document</h4>
            </div>
		<div style='display:none'>	{{$num=$info->id}}</div>>
				{{--*/$authors=CommonFunction::updateMultiSelection('lib_suporting_doc_authors', 'doc_authors',$num,'doc_authors_name'); /*---}}
					
            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                
				{{Form::open(array('url'=>'library/updateSupportingDocument','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form','files'=>true))}}

					{{Form::hidden('id',$info->id)}}
					{{Form::hidden('old_doc_upload',$info->doc_upload)}}
				
					<div class="form-group required">
                                           
											{{Form::label('doc_title','Document Title', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('doc_title',$info->doc_title, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('doc_authors', 'Author(s)', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
											<select id="doc_authors{{$info->id}}"  multiple name="doc_authors[]" class="demo-default" >
											@if($authors=CommonFunction::updateMultiSelection('lib_suporting_docs', 'id',$info->id,'doc_authors'))
												{@foreach($authors as $key=>$value)
												<option selected='selected' value="{{$value}}">{{$value}}</option>
												@endforeach
												@endif
											</select>
											</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('doc_type', 'Document Type', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id='doc_type{{$info->id}}' name='doc_type' class="demo-default" placeholder="Select Document Type">																	
												<option selected="selected" value="{{$info->doc_type}}">{{$info->doc_type}}</option>												
												@foreach($docTypes as $docType)
												<option value="{{$docType}}">{{$docType}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('doc_subject', 'Subject', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('doc_subject',$info->doc_subject, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('doc_tags', 'Tags', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
											<select id="doc_tags{{$info->id}}"  multiple name="doc_tags[]" class="demo-default" >
												<option value=""></option>
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
												<option value="AZ">Arizona</option>
											</select>
											</div>
											
                    </div>
					
					<div class="form-group required ">
                                           
											{{Form::label('doc_series', 'Series', array('class' => 'col-xs-4 control-label'))}}
											
												<div class="col-xs-6">
														{{Form::select('doc_series',array(''=>'--Select Series --','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'), $info->doc_series ,array('class'=>'form-control', 'required'=>''))}}
												</div>													
													
											
                    </div>
					<div class="form-group required ">
                                           
											{{Form::label('doc_edition', 'Edition', array('class' => 'col-xs-4 control-label'))}}
											
												<div class="col-xs-6">
														{{Form::select('doc_edition',array(''=>'--Select Series --','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'),$info->doc_edition,array('class'=>'form-control', 'required'=>''))}}
												</div>													
													
											
                    </div>
					<div class="form-group required ">
                                           
											{{Form::label('doc_part', 'Part', array('class' => 'col-xs-4 control-label'))}}
											
												<div class="col-xs-6">
														{{Form::select('doc_part',array(''=>'--Select Part --','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'),$info->doc_part,array('class'=>'form-control', 'required'=>''))}}
												</div>													
													
											
                    </div>
					<div class="form-group required ">
                                           
											{{Form::label('doc_volume', 'Volume', array('class' => 'col-xs-4 control-label'))}}
											
												<div class="col-xs-6">
														{{Form::select('doc_volume',array(''=>'--Select Volume --','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'),$info->doc_part,array('class'=>'form-control', 'required'=>''))}}
												</div>													
													
											
                    </div>
					<div class="form-group required ">
                                           
											{{Form::label('doc_amendment', 'Amendment', array('class' => 'col-xs-4 control-label'))}}
											
												<div class="col-xs-6">
														{{Form::select('doc_amendment',array(''=>'--Select Amendment --','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'),$info->doc_part,array('class'=>'form-control', 'required'=>''))}}
												</div>													
													
											
                    </div>
					<div class="form-group required ">
                                           
											{{Form::label('doc_published_year', 'Published Year', array('class' => 'col-xs-4 control-label'))}}
											
												<div class="col-xs-6">
														{{Form::select('doc_published_year', $years,$info->doc_published_year,array('class'=>'form-control', 'required'=>''))}}
												</div>													
													
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('doc_isbn', 'ISBN ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('doc_isbn',$info->doc_isbn, array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('doc_upload', 'Uploaded Document ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											@if($info->doc_upload!=''){{HTML::link('files/lib_supporting_docs/'.$info->doc_upload,'Document',array('target'=>'_blank'))}}
												@else
													{{HTML::link('#','No Document Provided')}}
												@endif
											</div>
											
                    </div>
                    <div class="form-group ">
                                           
											{{Form::label('doc_upload', 'Update Document ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::file('doc_upload')}}
											</div>
											
                    </div>
					
					<div class="form-group ">
                                           
											{{Form::label('doc_url', 'URL ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('doc_url',$info->doc_url, array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					
					
					<div class="form-group required ">
                                           
											{{Form::label('doc_status', 'Keep ', array('class' => 'col-xs-4 control-label'))}}
											
												<div class="col-xs-6">
														{{Form::select('doc_status',array('Private'=>'Private','Public'=>'Public'),$info->doc_status,array('class'=>'form-control', 'required'=>''))}}
												</div>													
													
											
                    </div>

					<div class="form-group">
                       
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                       
                    </div>
					
					{{Form::close()}}
            </div>
        </div>
    </div>
</div>

	<script>
$(document).ready(function(){

$('#doc_type{{$info->id}}').selectize();

//multiple selection from options
var eventHandler = function(name) {
					return function() {
						console.log(name, arguments);
						$('#log').append('<div><span class="name">' + name + '</span></div>');
					};
				};
var $select = $('#doc_tags{{$info->id}}').selectize({
					create          : true,
					onChange        : eventHandler('onChange'),
					onItemAdd       : eventHandler('onItemAdd'),
					onItemRemove    : eventHandler('onItemRemove'),
					onOptionAdd     : eventHandler('onOptionAdd'),
					onOptionRemove  : eventHandler('onOptionRemove'),
					onDropdownOpen  : eventHandler('onDropdownOpen'),
					onDropdownClose : eventHandler('onDropdownClose'),
					onFocus         : eventHandler('onFocus'),
					onBlur          : eventHandler('onBlur'),
					onInitialize    : eventHandler('onInitialize'),
				});
var $select = $('#doc_authors{{$info->id}}').selectize({
					create          : true,
					onChange        : eventHandler('onChange'),
					onItemAdd       : eventHandler('onItemAdd'),
					onItemRemove    : eventHandler('onItemRemove'),
					onOptionAdd     : eventHandler('onOptionAdd'),
					onOptionRemove  : eventHandler('onOptionRemove'),
					onDropdownOpen  : eventHandler('onDropdownOpen'),
					onDropdownClose : eventHandler('onDropdownClose'),
					onFocus         : eventHandler('onFocus'),
					onBlur          : eventHandler('onBlur'),
					onInitialize    : eventHandler('onInitialize'),
				});
//end multiple selection from options	
});
</script>
@endforeach
	  </section>
	

@stop