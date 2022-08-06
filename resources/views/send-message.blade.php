<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Broadcasting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Send Message
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            window.onload = () => {
                console.log("Broadcasting on...");
                Echo.private('send-message').listen('SendMessage', (e) => {
                    console.log(e);
                    alert(e.message);
                });
            };
        </script>
    @endpush
</x-app-layout>
