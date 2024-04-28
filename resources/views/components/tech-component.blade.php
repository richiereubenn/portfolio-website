<style>
    /* Definisikan animasi bouncing */
    @keyframes bouncing {
        0% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
        100% { transform: translateY(0); }
    }

    /* Terapkan animasi pada elemen saat dihover */
    .bouncing:hover {
        animation: bouncing 0.9s ease infinite;
    }
</style>

<!-- Komponen Tech Stack Item -->
<div class="border border-indigo-600 inline-block items-center justify-center p-4 hover:bg-indigo-900 transition duration-400 rounded bouncing">
    <div class="flex items-center gap-3">
        <img src="{{ $image }}" alt="" class="h-[20px]">
        <p class="text-white text-md font-medium">{{ $text }}</p>
    </div>
</div>