

<x-layout>
    <main class="char-container">

        @foreach ($characters as $char)
            
            {{-- <p>{{$char["name"]}}</p> --}}
            <a class="hover p-1" href="/character/{{$char["id"]}}">
            <article class="char-card">
                <div class="avatar-container">
                    <img src="{{$char["image"]}}" alt="avatar">
                </div>
                <div>
                    <h1>{{$char["name"]}}</h1>
                    <p class="hover p-1">{{$char["status"]}},  {{$char["species"]}}</p>
                    <p class="hover p-1">{{$char["gender"]}}</p>
                </div>

            </article>
            </a>
    
        @endforeach

        
    </main>
    <section class="button-container">
        @if ($page["prev"])
            <a href="/all-characters/{{$num - 2}}"><button class="button hover">Previous {{$num - 2}}</button></a>
        @endif
            <button class="button hover">{{$num - 1}}</button>
        @if ($page["next"] !== null)
            <a href="/all-characters/{{$num}}"><button class="button hover">Next {{$num}}</button></a>
        @endif
    </section>

</x-layout>

