<p>
	<ul>
            @foreach($cars as $car)
                <li>
                    <a href={{route('single-car', ['id' => $car->id])}} > {{$car->title}} </a>
                </li>
            @endforeach
        </ul>
</p>