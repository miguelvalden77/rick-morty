

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
    <section class="button-container">
        @if ($page["prev"])
            <a href="/all-characters/{{$num - 2}}"><button class="button hover">Previous page</button></a>
        @endif
            <button class="button hover">Current page {{$num - 1}}</button>
        @if ($page["next"])
            <a href="/all-characters/{{$num}}"><button class="button hover">Next page {{$num}}</button></a>
        @endif
    </section>

</x-layout>

