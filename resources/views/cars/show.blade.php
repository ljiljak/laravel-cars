@extends('layouts.master')


@section('content')

<div class="col-sm-8 blog-main">

          <div class="blog-post">
<h1>{{$car->producer}}</h1>
<p>{{$car->title}}, with {{$car->number_of_doors}} doors </p>

</div>
</div>

@endsection
