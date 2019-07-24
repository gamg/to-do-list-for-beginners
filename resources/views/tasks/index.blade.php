@extends('layouts.app')

@section('content')
<div class="container">
    @include('tasks.partials.task-form')
    <br>
    @include('tasks.partials.tasks-list')
</div>
@endsection