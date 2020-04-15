<div class="bg-gray-200 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">F0llowing</h3>

    <ul>
        @foreach (auth()->user()->follows as $user)
            <li class="mb-4">
                <div class="">
                    <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                        {{ $tweet->user->name}}
                    
                        <img
                            src="{{ $user->avatar }}"
                            alt=""
                            class="rounded-full mr-2"
                            width="40"
                            height="40"
                        >
                        </a>
                    {{ $user->name }}
                </div>
            </li>
        @endforeach
    </ul>
</div>