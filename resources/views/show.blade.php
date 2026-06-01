@extends('layouts.app')
@section('title', $task->title)

@section('content')

<p>
    {{$task->description}}
</p>
@if ($task->completed)
    <p>{{$task->long_description}}</p>
@endif
<p>
  Task created at:  {{$task->created_at}}
</p>
<p>
   Task updated at:  {{$task->updated_at}}
</p>
@endsection
