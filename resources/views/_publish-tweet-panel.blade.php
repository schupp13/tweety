<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweet" method="POST">
        @csrf
        <textarea
        name="body"
        class="w-full"
        placeholder="Whats up doc!"
        ></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <div class="mr-4">
            <img src="{{auth()->user()->avatar}}" alt="" class="rounded-full mr-2" alt="your avatar">

            </div>

            <button
            type="submit"

            class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">
            Tweet-a-roo!
        </button>
        </footer>
    </form>
</div>
