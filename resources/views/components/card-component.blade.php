<div class="max-w-[350px] bg-white px-4 pt-4 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
    <h3 class="mb-2 text-lg font-bold text-indigo-600">{{ $title }}</h3>
    <div class="relative">
        <img class="h-[150px] w-full object-cover rounded-xl" src="{{ $imageSrc }}" alt="{{ $title }}" />
    </div>
    <h1 class="mt-3 text-gray-800 text-lg font-bold cursor-pointer">{{ $description }}</h1>
    <div class="my-3">
        <p class="text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni neque corporis iure. Expedita quam rerum optio, aspernatur itaque nemo reprehenderit deserunt adipisci molestiae, nobis facere pariatur voluptatibus iure quasi ducimus?</p>
        {{-- <div class="flex space-x-1 items-center">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mb-1" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
            <p>{{ $duration }} Minutes</p>
        </div>
        <div class="flex space-x-1 items-center">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mb-1" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </span>
            <p>{{ $parts }} Parts</p>
        </div>
        <div class="flex space-x-1 items-center">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mb-1" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
            </span>
            <p>Vanilla JS</p>
        </div>
        <button class="mt-3 text-lg w-full text-white bg-indigo-600 py-2 rounded shadow-lg">Buy Lesson</button> --}}
    </div>
</div>
