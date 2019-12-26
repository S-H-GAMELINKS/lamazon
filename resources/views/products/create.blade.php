{{Form::open(['route' => 'products.store'])}}
    {{Form::input('text', 'name')}}
    {{Form::textarea('description')}}
    {{Form::number('price', 'price', ['min' => 0])}}
    {{Form::submit('Create')}}
{{Form::close()}}