<h2>TEst </h2>
@if($role=='Chief Admin')
	<p>OK Man It works Your Role: {{$role}}</p>
@elseif($role=='Employee')
	<p>OK Man It works Your Role: {{$role}}</p>
@endif