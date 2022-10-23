<x-layout>

    <h1>Locations</h1>

    <main class="main-locations">

        @foreach ($locations as $loc)
    
            <h2>{{$loc["name"]}}</h2>
            <p>{{$loc["type"]}}</p>
            
        @endforeach

    </main>


</x-layout>
