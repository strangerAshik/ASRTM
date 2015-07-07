@extends('layoutTable')
@section('content')
  <!-- Right side column. Contains the navbar and content of the page -->
            
                    <div class="row">
                        <div class="col-xs-12">
                            

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Surveillance List</h3>
                                </div><!-- /.box-header -->
                                 <div class="content">
                              
                               {{Form::open(array('url'=>'surveillance/actionListDateToDate','method'=>'get','class'=>'form-inline','data-toggle'=>'validator','role'=>'form'))}}
                                  <div class="form-group">
                                    <label for="email"> From :</label>
                                    {{Form::select('from_date', $dates,'1',array('class'=>'form-control','required'=>''))}}
                                    {{Form::select('from_month',$months,'January',array('class'=>'form-control','required'=>''))}}
                                    {{Form::select('from_year',$years,'2015',array('class'=>'form-control','required'=>''))}}
                                  </div>
                                  <div class="form-group">
                                    <label for="email"> To: </label>
                                    {{Form::select('to_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
                                    {{Form::select('to_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
                                    {{Form::select('to_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
                                  </div>
                                  
                                  <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                                </div>
                                <div class="box-body table-responsive">
                                  Recor Shown From <b>{{$from}}</b> To <b>{{$to}}</b>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                 <th>Date</th>
                                                <th>SIA/Tracking No</th>
                                                <th>Type Of SIA(Event)</th>
                                                <th>Organization</th>                     
                                                <th>Time</th>
                                                <th>Safety Concern(number)</th>
                                                <th>Teammembers</th>
                                                <th>Aircraft Reg.</th>
                                                <th>Status</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <div style="display: none">{{$num=0;}}</div>
                                        @foreach ($actionList as $info)
                                            <tr>
                                                <td>{{++$num}}</td>                                                
                                                <td>{{$info->date}}</td>
                                                <td>{{$info->sia_number}}</td>
                                                <td>{{$info->event}}</td>
                                                <td>{{$info->organization}}</td>
                                                <td>{{$info->time}}</td>
                                                <td>2</td>
                                                <td>
                                               @if($authors=CommonFunction::updateMultiSelection('sia_action', 'id',$info->id,'team_members'))
                                               @if($authors!=null)
                                                    @foreach($authors as $key=>$value)
                                                        {{$value}},
                                                    @endforeach
                                               
                                                @endif
                                                @else
                                                    No Members Added!!
                                                @endif
                                                </td>
                                                <td>
                                                    {{$info->aircraft_registration_no}}
                                                 </td>
                                                <td>status</td>
                                                <td><a target="_blink" href="{{URL::to('surveillance/singleProgram/'.$info->sia_number)}}">Details</a></td>
                                                
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              	 <th>No.</th>
                                                 <th>Date</th>
                                                <th>SIA/Tracking No</th>
                                                <th>Type Of SIA(Event)</th>
                                                <th>Organization</th>
                                                <th>Time</th>
                                                <th>Safety Concern(number)</th>
                                                <th>Teammembers</th>
                                                <th>Aircraft Reg.</th>
                                                <th>Status</th>
                                                <th>Details</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                

@stop