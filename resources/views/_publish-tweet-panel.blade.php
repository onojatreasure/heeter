<div class="border border-blue-400 rounded-lg p-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea 
            name="body" 
            class="w-full"
            placeholder="What's up doc"
            >

        </textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt=" your avatar"
                class="rounded-full mr-2"
            >

            <button 
                type="submit"
                class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
            >
                Heet a roo!
            </button>
        </footer>

    </form>

    @error('body')
        <p class="text-re-500 text-sm mt-4">{{$message}}</p>
    @enderror
</div>