<x-app-layout>
    <x-slot name='title'>
        <h1>member show has ID: {{ $member['id'] ?? 0 }}</h1>
    </x-slot>
    <a href="{{ route('member-list') }}"><button>back member list</button></a>

    <form action="{{ route('member-create') }}" method="post">
        @csrf
        <button type="submit">Create</button>
    </form>

    <form action="{{ route('member-update', ['id' => '3']) }}" method="post">
        @csrf
        <button type="submit">update</button>
    </form>
</x-app-layout>
