@section('updateModule')
@foreach($modules as $module)
<div class="modal fade" id="updateModule{{$module->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Update Module</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                
				{{Form::open(array('url'=>'updateModule','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
                    {{Form::hidden('id',$module->id)}}
                    {{Form::hidden('old_module_name',$module->module_name)}}
				
					<div class="form-group required">
                                           
											{{Form::label('module_name','Module Name', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-7">
											{{Form::text('module_name',$module->module_name, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					

					<div class="form-group">
                       
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Add Update Module</button>
                       
                    </div>
					
					{{Form::close()}}
            </div>
        </div>
    </div>
</div>
@endforeach
@stop
