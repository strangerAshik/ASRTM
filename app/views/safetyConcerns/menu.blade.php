@section('menuNewInspection')
 
<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#inspectionInfo">Add Inspection Primary Info.</button>
	
</p>
<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#issueSafety" disabled='disabled'>Add New Concern</button>
	
</p>

@stop
@section('menuIssueSafetyConcern')
<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#issueSafety" >Add New Concern</button>
	
</p>
@stop
@section('menuSingleSafetyConcern')
<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#correctiveIssue" >Add New Corrective Action</button>	
</p>
<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#" >Enforcement Action (EDP)</button>    
</p>
<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#legalOpenion" >Opinion Of Legal Department</button>	
</p>
<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#forwardingForm" >Forwarding</button>	
</p>
<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#approvalForm" >Approval</button>	
</p>
@if($PageName=='Single Safety concern')
<p class="text-center">
{{ HTML::linkAction('safetyConcernsController@followUp', 'Follow up',array('safety_issue_number'=>$sc->safety_issue_number ), array('class' => 'btn btn-primary btn-block')) }}
</p>
@endif
@stop