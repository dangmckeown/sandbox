@extends('app')

@section('content')
@if(count($details))
<ul>
@foreach ($details as $detail)
<li>{!! $detail !!}</li>
@endforeach
</ul>
@endif
@stop