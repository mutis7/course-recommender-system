@extends('layouts.master')

@section('navigationLinks')
    <ul class="nav side-menu">
        <li><a href="#"><i class="fa fa-search"></i> Search </a></li>
        <li><a href="#"><i class="fa fa-edit"></i> Recommended </a></li>
        <li><a href="{{ route('student.showProfile') }}"><i class="fa fa-desktop"></i>
             Profile </a></li>
        <li><a href="#"><i class="fa fa-table"></i> Forumns </a></li>
        
    </ul>
@endsection