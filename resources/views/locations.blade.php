<x-layout>

    <h1 class="title hover">Locations</h1>

    <main class="main-locations">

        @foreach ($locations as $loc)
    
            <div class="location-card">
                <h2 class="description">{{$loc["name"]}}</h2>
                <p class="hover">{{$loc["type"]}}</p>
            </div>
            
        @endforeach

    </main>

    <section class="button-container">
        @if ($page["prev"])
            <a href="/locations/{{$num - 2}}"><button class="button hover">Previous page</button></a>
        @endif
            <button class="button hover">Current page {{$num - 1}}</button>
        @if ($page["next"])
            <a href="/locations/{{$num}}"><button class="button hover">Next page {{$num}}</button></a>
        @else
            <div></div>
        @endif
    </section>


</x-layout>
