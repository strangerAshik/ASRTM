
@section('scInfos')
		@if($role=='Chief Admin'||$role=='Director')
			{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('sc_safety_concern',$sc->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
		@endif
		@if($role=='Chief Admin')
			{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('sc_safety_concern',$sc->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
	    @endif
		@if($role=='Chief Admin'||$role=='Director'||$role=='Maintenance Eng.')
			 <a data-toggle="modal" data-target="#editIssueSafety{{$sc->id}}" href='' style='color:green;float:right;padding:5px;'>
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			</a>
		@endif
@stop
