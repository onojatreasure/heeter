@extends('layouts.app')

@section('content')
    <header class-="mb-6 relative">
        <img 
            src="/images/default-profile-banner.jpg" 
            alt=""
            class="mb-2"
        >
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffforhumans() }}</p>
            </div>
            <div>
                <a href="" 
                    class="rounded-full 
                        border border-gray-300 py-2 px-2 
                        text-black text-xs mr-2">
                        Edit Profile
                </a>
                <a href="" 
                    class="bg-blue-500 
                        rounded-full shadow py-2 px-2 text-white text-xs">
                        Follow Me
                </a>
            </div>
        </div>

        <p class="text-sm">
            The name's Bugs, Bugs Bunny. Don't wear it out. Bugs is an anthropomorphic
            gray and white rabbit or hare who is famous for his flippant,
            insuciant personality. He is also characterised by a Brooklyn accent,
            his portrayal is a trickster, and his catch phrase "Eh... What's up, doc?"
        </p>

        <img
                src="{{$user->avatar}}"
                alt=""
                class="rounded-full mr-2 absolute"
                style="width: 150px; top: 130px; left: calc(50%-75px);"
        >

    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection