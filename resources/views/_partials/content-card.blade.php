<a href="#" class="bg-white rounded-lg shadow transition hover:translateY-2px hover:shadow-raised flex-1 flex flex-col overflow-hidden">
    <div class="bg-cover h-48" style="background-image: url({{ $image }})"></div>
    <div class="p-6 flex-1 flex flex-col justify-between">
        <h3 class="font-display text-black mb-4">{{ $title }}</h3>
        <div class="inline-flex items-center">
            <span class="text-grey-dark text-sm mr-2">{{ $externalDomain }}</span>
            <svg class="h-4 w-4 text-grey fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M14 3.41l-7.3 7.3a1 1 0 0 1-1.4-1.42L12.58 2H9a1 1 0 1 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V3.41zM12 11a1 1 0 0 1 2 0v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h3a1 1 0 1 1 0 2H2v10h10v-3z"></path></svg>
        </div>
    </div>
</a>
