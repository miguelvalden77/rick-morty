

<x-layout>
    
    @foreach ($characters as $char)
        
        <p>{{$char["name"]}}</p>

    @endforeach

</x-layout>

