@extends('layouts.app')

@section('content')
    <article class="max-w-4xl mx-auto space-y-8">
        <div>
            <div class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden">
                <div
                    class="w-full h-[400px] bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                    <p class="text-slate-600 text-center font-medium line-clamp-3 text-2xl">{{ $project->title }}</p>
                </div>
            </div>
        </div>
        <div class="space-y-6">
            <h1 class="text-4xl font-bold">{{ $project->title }}</h1>
            <div class="flex flex-wrap gap-4 text-sm text-muted-foreground">
                <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-calendar h-4 w-4">
                        <path d="M8 2v4"></path>
                        <path d="M16 2v4"></path>
                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                        <path d="M3 10h18"></path>
                    </svg><time datetime="2025-01-20T13:05:52.000000Z">{{ $project->created_at->format('d F Y') }}</time></div>
                <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-eye h-4 w-4">
                        <path
                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                        </path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg><span>{{ $project->views }} görüntülenme</span></div>
            </div>
            <div class="flex flex-wrap gap-2">
                <div
                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                    mollitia</div>
                <div
                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                    assumenda</div>
                <div
                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                    veniam</div>
            </div>
            <p class="text-lg text-muted-foreground leading-relaxed">Provident pariatur illum quo quia.</p>
            <div class="prose prose-neutral dark:prose-invert max-w-none">
                <p>Dolor omnis quia minus autem. Magnam inventore consequatur aliquam nesciunt nulla ea eligendi. Veritatis
                    voluptatibus quae vel.</p>
                <p>Impedit temporibus nulla nam nihil quisquam totam. Saepe ratione accusantium expedita qui aliquam. Vel
                    voluptatem incidunt in molestiae nobis et eveniet.</p>
            </div>
            <div class="space-y-4">
                <h2 class="text-2xl font-semibold">Özellikler</h2>
                <ul class="list-disc list-inside space-y-2 text-muted-foreground">
                    <li>adipisci</li>
                    <li>voluptates</li>
                    <li>aut</li>
                    <li>voluptate</li>
                    <li>labore</li>
                </ul>
            </div>
            <div class="flex gap-4"><a href="http://www.senger.com/adipisci-amet-quod-non-veritatis-reprehenderit.html"
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-9 px-4 py-2"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-github mr-2 h-4 w-4">
                        <path
                            d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                        </path>
                        <path d="M9 18c-4.51 2-5-2-7-2"></path>
                    </svg>GitHub'da İncele</a><a href="http://www.bahringer.info/odit-ipsum-nesciunt-voluptas-quia-possimus"
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-secondary text-secondary-foreground shadow-sm hover:bg-secondary/80 h-9 px-4 py-2"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-external-link mr-2 h-4 w-4">
                        <path d="M15 3h6v6"></path>
                        <path d="M10 14 21 3"></path>
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                    </svg>Canlı Demo</a></div>
        </div>
    </article>
@endsection
