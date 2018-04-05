@extends('layouts.master')

@section('content')


        <div class="col-sm-8 blog-main">

          <div class="blog-post">
          	<ul>
            @foreach($cars as $car)
                <li>
                    <a href={{route('single-car', ['id' => $car->id])}} > {{$car->title}} </a>
                </li>
            @endforeach
    		</ul>

    	</div>

    	</div>	
@endsection