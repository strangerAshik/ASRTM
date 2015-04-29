@extends('layout')    
@section('content')

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
		  
	  </section>
	

@stop