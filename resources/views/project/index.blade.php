@extends('layouts.app')

@section('content')
    <div class="space-y-8">
        <div class="text-center space-y-4">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-primary to-purple-500 bg-clip-text text-transparent leading-loose">
                Projelerim</h1>
            <p class="text-muted-foreground max-w-2xl mx-auto">Son çalışmalarım ve kişisel projelerim.</p>
        </div>
        <div class="relative max-w-sm mx-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"
                class="lucide lucide-search absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground h-4 w-4">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
            </svg><input
                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-9"
                placeholder="Projelerde ara..." value=""></div>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($projects as $project)
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[400px] flex flex-col">
                    <a href="{{ route('project.show', $project->slug) }}">
                        <div class="relative">
                            <div
                                class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">{{ $project->title }}
                                </p>
                            </div>
                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </a>
                    <div class="p-4 space-y-3 flex flex-col flex-1">
                        <div class="space-y-3 flex-1">
                            <a href="{{ route('project.show', $project->slug) }}" class="text-xl font-semibold line-clamp-2">{{ $project->title }}</a>
                            <p class="text-muted-foreground line-clamp-2">{{ $project->description }}</p>
                            <div class="flex flex-wrap gap-2 mt-2">
                                @for($i=1;$i<=3;$i++)
                                <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    tag-{{ $i }}
                                </div>
                                @endfor
                            </div>

                        </div>
                        <div class="flex justify-between">
                            <a href="https://www.ledner.com/repellat-voluptate-enim-omnis-suscipit-vero-sit-in-saepe"
                                target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-github mr-2 h-4 w-4">
                                    <path
                                        d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                    </path>
                                    <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                </svg> Kod </a>
                            <a href="http://www.dietrich.com/quae-laudantium-dolores-dolorem-qui-sit-dolor-aut"
                                target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-external-link mr-2 h-4 w-4">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg> Demo </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $projects->links() }}

    </div>
@endsection
