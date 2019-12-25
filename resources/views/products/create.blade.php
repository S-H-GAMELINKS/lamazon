{{Form::open(['route' => 'products.store'])}}
    {{Form::input('text', 'name')}}
    {{Form::textarea('description')}}
    {{Form::number('number', 'price', ['min' => 0])}}
    {{Form::submit('Create')}}
{{Form::close()}}