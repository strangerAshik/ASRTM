@extends('layoutTable')
@section('content')
  <!-- Right side column. Contains the navbar and content of the page -->
            
                    <div class="row">
                        <div class="col-xs-12">
                            

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Program List</h3>
                                </div><!-- /.box-header -->
                                 <div class="content">
                              
                               {{Form::open(array('url'=>'surveillance/programListDateToDate','method'=>'get','class'=>'form-inline','data-toggle'=>'validator','role'=>'form'))}}
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
                                                <th>Date[Y-M-D]</th>
                                                <th>SIA/Tracking No</th>
                                                <th>Event</th>
                                                
                                                <th>Time</th>
                                                <th>Teammembers</th>
                                                <th>Accomplished?</th>
                                                <th>Remark</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <div style="display: none">{{$num=0;}}</div>
                                        @foreach ($prgramList as $program)
                                            <tr>
                                                <td>{{++$num}}</td>                                                
                                                <td>{{$program->date}}</td>
                                                <td>{{$program->sia_number}}</td>
                                                <td>{{$program->event}}</td>
                                                <td>{{$program->time}}</td>
                                                <td>
                                               @if($authors=CommonFunction::updateMultiSelection('sia_program', 'id',$program->id,'team_members'))
                                               @if($authors!=null)
                                                    @foreach($authors as $key=>$value)
                                                        {{$value}},
                                                    @endforeach
                                               
                                                @endif
                                                @else
                                                    No Members Added!!
                                                @endif</td>
                                                <td>@if($insNum=CommonFunction::inspectionHappend($program->sia_number)>0) 
                                                    Yes
                                                    @else
                                                    No
                                                    @endif
                                                 </td>
                                                <td>{{$program->remarks}}</td>
                                                <td><a target="_blink" href="{{URL::to('surveillance/singleProgram/'.$program->sia_number)}}">Details</a></td>
                                                
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No.</th>
                                                <th>Date[Y-M-D]</th>
                                                <th>SIA/Tracking No</th>
                                                <th>Event</th>
                                                
                                                <th>Time</th>
                                                <th>Teammembers</th>
                                                <th>Accomplished?</th>
                                                <th>Remark</th>
                                                <th>Details</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                

@stop