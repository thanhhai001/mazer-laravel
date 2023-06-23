<x-app-layout>
    <x-slot name='title'>
        <h1>Member List</h1>
    </x-slot>
    <a href="{{ route('member-show') }}"><button>Member show</button></a>
    <a href="{{ route('member-show', ['id' => 5]) }}"><button>Member 5</button></a>
</x-app-layout>
