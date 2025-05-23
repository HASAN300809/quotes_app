<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-[#0f2c59] leading-tight">📖 All Quotes</h2>
    </x-slot>

    <div class="max-w-3xl mx-auto mt-6 px-4">
        @foreach ($quotes as $quote)
            <div class="bg-white border border-gray-200 shadow-md rounded-xl p-5 mb-5">
                <p class="text-lg text-gray-800 italic mb-2">“{{ $quote->content }}”</p>
                <div class=" flex items-center justify-between">
                    <small class="text-[#0f2c59] font-medium">By {{ $quote->user->name }}</small>
                    <small class="text-gray-500">{{ $quote->created_at->format('d M Y') }}</small>
                </div>

                <div class="mt-4 flex items-center gap-3 text-md">
                    @if ($quote->isLikedBy(auth()->user()))
                        <form method="POST" action="{{ route('quotes.unlike', $quote->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 font-semibold text-lg">❤️</button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('quotes.like', $quote->id) }}">
                            @csrf
                            <button class="text-[#0f2c59] font-semibold text-lg">🤍</button>
                        </form>
                    @endif
                    <span class="text-gray-600 text-ms">{{ $quote->likes->count() }} like</span>
                </div>
            </div>
        @endforeach

        <div class="mt-6 pb-6">
            {{ $quotes->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (session('success')) 
          Swal.fire({
            icon: "success",
            title: "Success!",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
          });
        @elseif(session('error'))
          Swal.fire({
            icon: "error",
            title: "Error!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
          });
        @endif
      </script>

</x-app-layout>
