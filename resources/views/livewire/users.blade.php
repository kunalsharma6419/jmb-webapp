<div class="max-w-6xl mx-auto my-16">

    <h5 class="text-center text-5xl font-bold py-3">Users</h5>



    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 p-2 ">

        @php
            // Define an array of light background color codes
            $bgColors = ['#ebf8ff', '#f0fff4', '#fffaf0', '#ffe4e6', '#f5f3ff', '#fdf2f8', '#f9fafb'];
        @endphp
        @foreach ($users as $key => $user)
            @php
                $name = $user->name;
                $initials = collect(explode(' ', $name))
                    ->map(function ($segment) {
                        return strtoupper(substr($segment, 0, 1));
                    })
                    ->take(2)
                    ->implode('');
                // Cycle through the background colors using modulo
                $bgColor = $bgColors[$key % count($bgColors)];
            @endphp
            {{-- child --}}
            <div class="w-full border border-gray-200 rounded-lg p-5 shadow" style="background-color: {{ $bgColor }};">

                <div class="flex flex-col items-center pb-10">

                    <img src="https://ui-avatars.com/api/?name={{ urlencode($name) }}&size=500"
                        alt="{{ $name }}'s avatar" class="w-24 h-24 mb-2.5 rounded-full shadow-lg">


                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">
                        {{ $user->name }}
                    </h5>
                    <span class="text-sm text-gray-500">{{ $user->email }} </span>

                    <div class="flex mt-4 space-x-3 md:mt-6">

                        {{-- <x-secondary-button>
                        Add Friend
                    </x-secondary-button> --}}

                        <x-secondary-button wire:click="message({{ $user->id }})">
                            Message
                        </x-secondary-button>

                    </div>

                </div>


            </div>
        @endforeach
    </div>




</div>
