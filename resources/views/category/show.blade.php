@extends('layouts.app')

@section('content')
    <div class="space-y-12">
        <section>
            <div class="relative h-[300px] rounded-lg overflow-hidden">
                <div
                    class="w-full h-[400px] bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                    <p class="text-stone-600 text-center font-medium line-clamp-3 text-2xl">similique qui</p>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <div class="space-y-4" style="opacity: 1; transform: none;">
                        <h1 class="text-4xl font-bold text-white">similique qui</h1>
                        <p class="text-lg text-white/90 max-w-3xl">Placeat quibusdam autem illum dolorum. Voluptatum neque
                            accusantium quo molestias et velit. Omnis ut consectetur iure qui ea molestiae odio.</p>
                        <div class="flex items-center text-white/80"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text w-5 h-5 mr-2">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                            </svg><span>0 yazı</span></div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="space-y-8">
                <div class="text-center space-y-4" style="opacity: 1; transform: none;">
                    <h2 class="text-3xl font-bold">Yazılar</h2>
                    <p class="text-muted-foreground max-w-2xl mx-auto">Bu kategorideki tüm yazılar</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div style="opacity: 1; transform: none;"><a
                            href="/post/ducimus-repellat-id-voluptatem-in-velit-possimus-eum">
                            <div
                                class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                                <div class="h-48">
                                    <div
                                        class="w-full h-48 bg-zinc-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-zinc-600 text-center font-medium line-clamp-3 text-lg">Ducimus
                                            repellat id voluptatem in velit possimus eum.</p>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            saepe</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            ipsum</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            aut</div>
                                    </div>
                                    <h2 class="text-xl font-semibold mb-2 line-clamp-2">Ducimus repellat id voluptatem in
                                        velit possimus eum.</h2>
                                    <p class="text-muted-foreground line-clamp-3 mb-4">Culpa hic rem laborum provident
                                        facilis. Error molestias qui et ut non ipsum. Reprehenderit esse vel sapiente quam.
                                    </p>
                                    <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-calendar mr-2 h-4 w-4">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>20 Oca 2025</div>
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-eye mr-1 h-4 w-4">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>425</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div style="opacity: 1; transform: none;"><a href="/post/laudantium-tempora-qui-animi">
                            <div
                                class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                                <div class="h-48">
                                    <div
                                        class="w-full h-48 bg-zinc-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-zinc-600 text-center font-medium line-clamp-3 text-lg">Laudantium
                                            tempora qui animi.</p>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            recusandae</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            nemo</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            nulla</div>
                                    </div>
                                    <h2 class="text-xl font-semibold mb-2 line-clamp-2">Laudantium tempora qui animi.</h2>
                                    <p class="text-muted-foreground line-clamp-3 mb-4">Consequatur eaque perspiciatis culpa
                                        velit consequatur. Error et laborum est praesentium aliquid dolor. Dignissimos
                                        repellendus ut illo eum voluptate cumque quos.</p>
                                    <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-calendar mr-2 h-4 w-4">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>20 Oca 2025</div>
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-eye mr-1 h-4 w-4">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>80</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div style="opacity: 1; transform: none;"><a
                            href="/post/dolorem-ad-at-doloribus-occaecati-possimus-sunt">
                            <div
                                class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                                <div class="h-48">
                                    <div
                                        class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">Dolorem ad
                                            at doloribus occaecati possimus sunt.</p>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            exercitationem</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            consequatur</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            modi</div>
                                    </div>
                                    <h2 class="text-xl font-semibold mb-2 line-clamp-2">Dolorem ad at doloribus occaecati
                                        possimus sunt.</h2>
                                    <p class="text-muted-foreground line-clamp-3 mb-4">A earum dolores eaque veritatis
                                        officia nulla quaerat. Harum ullam eos eveniet amet ducimus ea. Officiis quod
                                        pariatur officiis accusantium eos. Incidunt dolores laborum consequuntur cum velit
                                        ut et.</p>
                                    <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-calendar mr-2 h-4 w-4">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>20 Oca 2025</div>
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-eye mr-1 h-4 w-4">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>241</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div style="opacity: 1; transform: none;"><a href="/post/beatae-fuga-nesciunt-consequatur-molestiae">
                            <div
                                class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                                <div class="h-48">
                                    <div
                                        class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">Beatae fuga
                                            nesciunt consequatur molestiae.</p>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            fugit</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            nihil</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            molestiae</div>
                                    </div>
                                    <h2 class="text-xl font-semibold mb-2 line-clamp-2">Beatae fuga nesciunt consequatur
                                        molestiae.</h2>
                                    <p class="text-muted-foreground line-clamp-3 mb-4">Quia harum eveniet fuga dolores
                                        distinctio et quia. Sed ad et nisi qui qui. Dicta aspernatur vero omnis consequatur
                                        animi. Iure labore est labore sed pariatur consequuntur.</p>
                                    <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-calendar mr-2 h-4 w-4">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>20 Oca 2025</div>
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-eye mr-1 h-4 w-4">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>338</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div style="opacity: 1; transform: none;"><a
                            href="/post/dolorem-esse-dolores-et-eos-dolorem-ratione-corporis-quasi">
                            <div
                                class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                                <div class="h-48">
                                    <div
                                        class="w-full h-48 bg-zinc-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-zinc-600 text-center font-medium line-clamp-3 text-lg">Dolorem esse
                                            dolores et eos dolorem ratione corporis quasi.</p>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            cum</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            quidem</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            hic</div>
                                    </div>
                                    <h2 class="text-xl font-semibold mb-2 line-clamp-2">Dolorem esse dolores et eos dolorem
                                        ratione corporis quasi.</h2>
                                    <p class="text-muted-foreground line-clamp-3 mb-4">Quia et doloremque molestias ab quia
                                        distinctio. Perferendis occaecati eligendi dolore mollitia eius. Voluptatibus animi
                                        adipisci eum perspiciatis et dolorem non. Ipsum dignissimos culpa sed blanditiis.
                                    </p>
                                    <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-calendar mr-2 h-4 w-4">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>20 Oca 2025</div>
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-eye mr-1 h-4 w-4">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>695</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div style="opacity: 1; transform: none;"><a href="/post/amet-sed-veritatis-nostrum-quia-ratione">
                            <div
                                class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                                <div class="h-48">
                                    <div
                                        class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">Amet sed
                                            veritatis nostrum quia ratione.</p>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            aperiam</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            ut</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            suscipit</div>
                                    </div>
                                    <h2 class="text-xl font-semibold mb-2 line-clamp-2">Amet sed veritatis nostrum quia
                                        ratione.</h2>
                                    <p class="text-muted-foreground line-clamp-3 mb-4">Mollitia praesentium perferendis
                                        eligendi. Vero tempore rem ipsam sed eligendi. Ut alias quis est minus delectus
                                        neque. Similique ut dolorem ea voluptatum magni ea odit.</p>
                                    <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-calendar mr-2 h-4 w-4">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>20 Oca 2025</div>
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-eye mr-1 h-4 w-4">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>79</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div style="opacity: 1; transform: none;"><a
                            href="/post/ipsam-ratione-corrupti-provident-inventore-quasi-natus-ut">
                            <div
                                class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                                <div class="h-48">
                                    <div
                                        class="w-full h-48 bg-neutral-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-neutral-600 text-center font-medium line-clamp-3 text-lg">Ipsam
                                            ratione corrupti provident inventore quasi natus ut.</p>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            voluptas</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            odit</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            voluptatem</div>
                                    </div>
                                    <h2 class="text-xl font-semibold mb-2 line-clamp-2">Ipsam ratione corrupti provident
                                        inventore quasi natus ut.</h2>
                                    <p class="text-muted-foreground line-clamp-3 mb-4">Pariatur nisi sed nemo quis. Ipsam
                                        ut aut reiciendis non ut sint veniam. Non animi autem a incidunt in sequi cum.
                                        Soluta numquam est ducimus saepe sit quo. Ea sint cumque doloribus illo dolore cum.
                                    </p>
                                    <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-calendar mr-2 h-4 w-4">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>20 Oca 2025</div>
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-eye mr-1 h-4 w-4">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>174</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div style="opacity: 1; transform: none;"><a
                            href="/post/excepturi-qui-eos-sed-dolorem-velit-ullam-enim-vel">
                            <div
                                class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                                <div class="h-48">
                                    <div
                                        class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">Excepturi
                                            qui eos sed dolorem velit ullam enim vel.</p>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            autem</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            temporibus</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            dolores</div>
                                    </div>
                                    <h2 class="text-xl font-semibold mb-2 line-clamp-2">Excepturi qui eos sed dolorem velit
                                        ullam enim vel.</h2>
                                    <p class="text-muted-foreground line-clamp-3 mb-4">Architecto voluptates dolores enim
                                        tempore architecto voluptas maiores. Nihil est velit doloremque omnis velit
                                        praesentium error.</p>
                                    <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-calendar mr-2 h-4 w-4">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>20 Oca 2025</div>
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-eye mr-1 h-4 w-4">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>98</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div style="opacity: 1; transform: none;"><a href="/post/est-debitis-accusantium-itaque-sunt">
                            <div
                                class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                                <div class="h-48">
                                    <div
                                        class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">Est debitis
                                            accusantium itaque sunt.</p>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            error</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            rerum</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            quibusdam</div>
                                    </div>
                                    <h2 class="text-xl font-semibold mb-2 line-clamp-2">Est debitis accusantium itaque
                                        sunt.</h2>
                                    <p class="text-muted-foreground line-clamp-3 mb-4">Cumque tempora optio magni et qui
                                        est aut. Atque consequatur enim consequuntur maiores distinctio sit impedit ipsum.
                                        Sed quia voluptatem sunt aliquam voluptas. Soluta aut reprehenderit distinctio modi
                                        aspernatur et.</p>
                                    <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-calendar mr-2 h-4 w-4">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>20 Oca 2025</div>
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-eye mr-1 h-4 w-4">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>185</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div style="opacity: 1; transform: none;"><a href="/post/est-occaecati-explicabo-dolores-aut">
                            <div
                                class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                                <div class="h-48">
                                    <div
                                        class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">Est
                                            occaecati explicabo dolores aut.</p>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            atque</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            saepe</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            praesentium</div>
                                    </div>
                                    <h2 class="text-xl font-semibold mb-2 line-clamp-2">Est occaecati explicabo dolores
                                        aut.</h2>
                                    <p class="text-muted-foreground line-clamp-3 mb-4">Deleniti magni et rerum sapiente
                                        quia itaque porro. In amet perspiciatis totam adipisci et dolorem sint nihil.</p>
                                    <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-calendar mr-2 h-4 w-4">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>20 Oca 2025</div>
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-eye mr-1 h-4 w-4">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>819</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div style="opacity: 1; transform: none;"><a href="/post/labore-fugiat-sequi-vero-omnis">
                            <div
                                class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                                <div class="h-48">
                                    <div
                                        class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">Labore
                                            fugiat sequi vero omnis.</p>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            minus</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            unde</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            non</div>
                                    </div>
                                    <h2 class="text-xl font-semibold mb-2 line-clamp-2">Labore fugiat sequi vero omnis.
                                    </h2>
                                    <p class="text-muted-foreground line-clamp-3 mb-4">Quam laboriosam quia similique
                                        fugiat suscipit repellendus. Recusandae itaque et quasi sequi animi.</p>
                                    <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-calendar mr-2 h-4 w-4">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>20 Oca 2025</div>
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-eye mr-1 h-4 w-4">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>392</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div style="opacity: 1; transform: none;"><a href="/post/rerum-minus-aut-in-voluptates">
                            <div
                                class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                                <div class="h-48">
                                    <div
                                        class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">Rerum minus
                                            aut in voluptates.</p>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            beatae</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            eligendi</div>
                                        <div
                                            class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                            ad</div>
                                    </div>
                                    <h2 class="text-xl font-semibold mb-2 line-clamp-2">Rerum minus aut in voluptates.</h2>
                                    <p class="text-muted-foreground line-clamp-3 mb-4">Quis quia modi fugiat quae dicta
                                        autem. Et et et et sed suscipit sapiente totam eaque. Sed quia odio pariatur
                                        cupiditate ad similique. Velit modi a quasi aperiam.</p>
                                    <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-calendar mr-2 h-4 w-4">
                                                <path d="M8 2v4"></path>
                                                <path d="M16 2v4"></path>
                                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                <path d="M3 10h18"></path>
                                            </svg>20 Oca 2025</div>
                                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-eye mr-1 h-4 w-4">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>398</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                </div>
            </div>
        </section>
    </div>
@endsection
