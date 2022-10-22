

<x-layout>
    <main class="char-container">

        @foreach ($characters as $char)
            
            {{-- <p>{{$char["name"]}}</p> --}}
            <article class="char-card">
                <div>
                    <img src="{{$char["image"]}}" alt="avatar">
                </div>

                <a href="/character/{{$char["id"]}}"><h3>{{$char["name"]}}</h3></a>
                
            </article>
    
        @endforeach

    </main>

</x-layout>

