@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="mb-8"><a
                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2 flex items-center"
                href="/posts"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-left mr-2 h-4 w-4">
                    <path d="m12 19-7-7 7-7"></path>
                    <path d="M19 12H5"></path>
                </svg>Yazılara Dön</a></div>
        <article class="space-y-8" style="opacity: 1;">
            <div class="space-y-4">
                <h1 class="text-4xl font-bold">Architecto nulla sed assumenda fugiat architecto enim eius eaque.</h1>
                <div class="flex items-center gap-4 text-muted-foreground">
                    <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-calendar mr-2 h-4 w-4">
                            <path d="M8 2v4"></path>
                            <path d="M16 2v4"></path>
                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                            <path d="M3 10h18"></path>
                        </svg>20 Ocak 2025</div>
                    <div class="flex items-center"><span>625 görüntülenme</span></div>
                </div>
            </div>
            <div class="w-full h-[400px] bg-zinc-100 flex items-center justify-center p-4 transition-colors duration-200">
                <p class="text-zinc-600 text-center font-medium line-clamp-3 text-2xl">Architecto nulla sed assumenda fugiat
                    architecto enim eius eaque.</p>
            </div>
            <div class="flex flex-wrap gap-2">
                <div
                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                    ut</div>
                <div
                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                    placeat</div>
                <div
                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                    aut</div>
            </div>
            <div class="flex gap-2 items-center"><span class="text-muted-foreground">Kategoriler:</span><a
                    href="/category/consequatur-nihil">
                    <div
                        class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground">
                        consequatur nihil</div>
                </a></div>
            <div class="prose prose-lg dark:prose-invert">
                <p>Distinctio velit et et omnis sint qui consequuntur. Sunt ut nesciunt aliquid quos cumque fugiat error
                    labore. Ut magni eos a voluptatum vero. Tenetur provident eaque atque placeat quod aut.</p>
                <p>Ut est pariatur voluptatem nam aliquam beatae est. Quidem similique necessitatibus beatae vitae dicta
                    reprehenderit. Voluptatem reprehenderit ullam possimus eius nisi.</p>
                <p>Et nulla rem sunt occaecati aut. Nisi officia molestias nisi reiciendis vero tempore id necessitatibus.
                    Qui tempore laudantium unde sunt architecto non.</p>
            </div>
        </article>
    </div>
@endsection
