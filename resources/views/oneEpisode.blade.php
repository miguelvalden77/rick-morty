<x-layout>

    <h1>{{$episode["name"]}}</h1>
    <p>{{$episode["air_date"]}}</p>

    <section>
        @foreach ($episode["characters"] as $char)
            <p>{{$char}}</p>
        @endforeach
    </section>


</x-layout>
