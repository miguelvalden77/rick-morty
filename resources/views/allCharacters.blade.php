

<x-layout>
    <main class="char-container">

        @foreach ($characters as $char)
            
            {{-- <p>{{$char["name"]}}</p> --}}
            <article class="char-card">
                <div class="avatar-container">
                    <img src="{{$char["image"]}}" alt="avatar">
                </div>
                <div>
                    <a class="hover p-1" href="/character/{{$char["id"]}}"><h1>{{$char["name"]}}</h1></a>
                    <p class="hover p-1">{{$char["status"]}},  {{$char["species"]}}</p>
                    <p class="hover p-1">{{$char["gender"]}}</p>
                </div>

            </article>
    
        @endforeach

    </main>

</x-layout>

