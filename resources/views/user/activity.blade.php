@extends('layouts.app')

@section('title','Dashboard')

@section('style')
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('public/css/dashboard.css')}}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('public/css/activity.css')}}" />
    <style type="text/css">
        .card-header{
            text-decoration: none !important;
        }
        .small, small {
            font-size: 70% !important;
        }
        .card-header small{
            text-transform: none;
        }
        .fa-2x {
            font-size: 1.5em;
        }
    </style>
@endsection

@section('content')
 
<div class="container">
    <div class="row pt-3 pb-3 d-flex">
        <div class="col-md-12">
            <a href="#" class="card-header bg-white d-flex align-items-center text-capitalize">
                <h5 class="ml-2 pt-2">Welcome, {{ Auth::user()->FirstName}} {{Auth::user()->LastName }}  <small>({{
                date('dS M Y h:i a')}})</small></h5>
            </a>
        </div>
    </div>
    <div class="row pt-3 pb-3 d-flex">
        <div class="col-md-4">
            @include('includes.dash-left-bar',['title'=>'User Timeline'])
        </div>
        <div class="col-md-8">
            <div class="main-card card">
                 <div class="card-body">
                     <!-- <h5 class="card-title">User Timeline</h5> -->
                        <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">


                        @foreach($activities as $activity)
                            <div class="vertical-timeline-item vertical-timeline-element">
                                 <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"> </i> </span>
                                     <div class="vertical-timeline-element-content bounce-in">
                                         <h4 class="timeline-title">Login into account</h4>
                                         <p>{{$activity->message}} at <a href="javascript:void(0);" data-abc="true">{{date('Y-m-d h:i a')}}</a></p> <span class="vertical-timeline-element-date">{{date('h:i a')}}</span>
                                     </div>
                                 </div>
                             </div>
                        @endforeach
                         <!--     <div class="vertical-timeline-item vertical-timeline-element">
                                 <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"></i> </span>
                                     <div class="vertical-timeline-element-content bounce-in">
                                         <h4 class="timeline-title">Meeting with client</h4>
                                         <p>Meeting with USA Client, today at <a href="javascript:void(0);" data-abc="true">12:00 PM</a></p> <span class="vertical-timeline-element-date">9:30 AM</span>
                                     </div>
                                 </div>
                             </div> -->
                            <!--  <div class="vertical-timeline-item vertical-timeline-element">
                                 <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                                     <div class="vertical-timeline-element-content bounce-in">
                                         <p>Another meeting with UK client today, at <b class="text-danger">3:00 PM</b></p>
                                         <p>Yet another one, at <span class="text-success">5:00 PM</span></p> <span class="vertical-timeline-element-date">12:25 PM</span>
                                     </div>
                                 </div>
                             </div> -->
                           <!--   <div class="vertical-timeline-item vertical-timeline-element">
                                 <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-danger"> </i> </span>
                                     <div class="vertical-timeline-element-content bounce-in">
                                         <h4 class="timeline-title">Discussion with team about new product launch</h4>
                                         <p>meeting with team mates about the launch of new product. and tell them about new features</p> <span class="vertical-timeline-element-date">6:00 PM</span>
                                     </div>
                                 </div>
                             </div> -->
                           <!--   <div class="vertical-timeline-item vertical-timeline-element">
                                 <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-primary"> </i> </span>
                                     <div class="vertical-timeline-element-content bounce-in">
                                         <h4 class="timeline-title text-success">Discussion with marketing team</h4>
                                         <p>Discussion with marketing team about the popularity of last product</p> <span class="vertical-timeline-element-date">9:00 AM</span>
                                     </div>
                                 </div>
                             </div> -->
                             <!-- <div class="vertical-timeline-item vertical-timeline-element">
                                 <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"> </i> </span>
                                     <div class="vertical-timeline-element-content bounce-in">
                                         <h4 class="timeline-title">Purchase new hosting plan</h4>
                                         <p>Purchase new hosting plan as discussed with development team, today at <a href="javascript:void(0);" data-abc="true">10:00 AM</a></p> <span class="vertical-timeline-element-date">10:30 PM</span>
                                     </div>
                                 </div>
                             </div> -->
                           <!--   <div class="vertical-timeline-item vertical-timeline-element">
                                 <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                                     <div class="vertical-timeline-element-content bounce-in">
                                         <p>Another conference call today, at <b class="text-danger">11:00 AM</b></p>
                                         <p>Yet another one, at <span class="text-success">1:00 PM</span></p> <span class="vertical-timeline-element-date">12:25 PM</span>
                                     </div>
                                 </div>
                             </div> -->
                           <!--   <div class="vertical-timeline-item vertical-timeline-element">
                                 <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                                     <div class="vertical-timeline-element-content bounce-in">
                                         <p>Another meeting with UK client today, at <b class="text-danger">3:00 PM</b></p>
                                         <p>Yet another one, at <span class="text-success">5:00 PM</span></p> <span class="vertical-timeline-element-date">12:25 PM</span>
                                     </div>
                                 </div>
                             </div> -->
                           <!--   <div class="vertical-timeline-item vertical-timeline-element">
                                 <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-danger"> </i> </span>
                                     <div class="vertical-timeline-element-content bounce-in">
                                         <h4 class="timeline-title">Discussion with team about new product launch</h4>
                                         <p>meeting with team mates about the launch of new product. and tell them about new features</p> <span class="vertical-timeline-element-date">6:00 PM</span>
                                     </div>
                                 </div>
                             </div> -->
                          <!--    <div class="vertical-timeline-item vertical-timeline-element">
                                 <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-primary"> </i> </span>
                                     <div class="vertical-timeline-element-content bounce-in">
                                         <h4 class="timeline-title text-success">Discussion with marketing team</h4>
                                         <p>Discussion with marketing team about the popularity of last product</p> <span class="vertical-timeline-element-date">9:00 AM</span>
                                     </div>
                                 </div>
                             </div> -->
                            
                            <!--  <div class="vertical-timeline-item vertical-timeline-element">
                                 <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                                     <div class="vertical-timeline-element-content bounce-in">
                                         <p>Another conference call today, at <b class="text-danger">11:00 AM</b></p>
                                         <p>Yet another one, at <span class="text-success">1:00 PM</span></p> <span class="vertical-timeline-element-date">12:25 PM</span>
                                     </div>
                                 </div>
                             </div> -->
                        </div>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
<!--  <script type="text/javascript" src="{{asset('public/js/dashboard.js')}}"></script> -->
@endsection