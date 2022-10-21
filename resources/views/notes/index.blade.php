<x-app-layout>
    <x-slot>
        <h2>
            {{ ('Notes')}}
        </h2>
    </x-slot>

    <div class="" style="padding-top: 2rem">
        <a href="{{route('notes.create')}}" style="padding: 1rem; background-color: white;"> +New Note</a>
        <br>
        <br>
        @forelse ($notes as $note)
            <a href="{{route('notes.show', $note->uuid)}}" style="font-weight: bold"><u>{{ $note->title }}</u></a>
            <p style="width: 70%;">
                {{Str::limit($note->text, 400)}}
            </p>
            <span style="font-size: .75rem"><i>{{$note->created_at->diffForHumans()}}</i></span>
        @empty
        <p>You have no notes</p>
        @endforelse
        {{$notes->links()}}
    </div>
</x-app-layout>