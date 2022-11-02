@if (count($posts) > 0)
    @foreach ($posts as $post)
        <article wire:id="{{ $post->id }}"
            class="relative mb-4 mx-4 break-inside p-6 rounded-xl bg-white dark:bg-slate-800  bg-clip-border shadow-lg">

            <div class="flex pb-6 items-center justify-between">
                <div class="flex">
                    <a class="inline-block mr-4" href="#">
                        <img class="rounded-full max-w-none w-12 h-12"
                            src="https://randomuser.me/api/portraits/men/35.jpg" />
                    </a>
                    <div class="flex flex-col">
                        <div>
                            <a class="inline-block text-lg font-bold dark:text-white"
                                href="#">{{ $post->user->name }}</a>
                        </div>
                        <div class="text-slate-500 dark:text-slate-300 dark:text-slate-400">
                            {{ date('d/m/Y', strtotime($post->created_at)) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-4">
                @if ($post->category === 'series')
                    <div
                        class="absolute -mt-4 -ml-0 text-lg inline-flex items-center font-bold leading-sm px-3 py-1 bg-gray-200 text-gray-700 rounded-md shadow-sm">
                        Séries
                    </div>
                @else
                    <div
                        class="absolute -mt-4 -ml-0 text-lg inline-flex items-center font-bold leading-sm px-3 py-1 bg-gray-200 text-gray-700 rounded-md shadow-sm">
                        Filme
                    </div>
                @endif
                <div class="flex justify-between gap-1 mb-1">
                    <a class="flex" href="#">
                        <img class="max-w-full rounded-tl-lg"
                            src="https://images.pexels.com/photos/92866/pexels-photo-92866.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" />
                    </a>
                    <a class="flex" href="#">
                        <img class="max-w-full"
                            src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" />
                    </a>
                    <a class="flex" href="#">
                        <img class="max-w-full rounded-tr-lg"
                            src="https://images.pexels.com/photos/631522/pexels-photo-631522.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" />
                    </a>
                </div>
                <div class="flex justify-between gap-1">
                    <a class="flex" href="#">
                        <img class="max-w-full rounded-bl-lg"
                            src="https://images.pexels.com/photos/1429748/pexels-photo-1429748.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" />
                    </a>
                    <a class="flex" href="#">
                        <img class="max-w-full rounded-br-lg"
                            src="https://images.pexels.com/photos/69020/pexels-photo-69020.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" />
                    </a>
                </div>
            </div>

            <h2 class="text-3xl font-extrabold dark:text-white">
                {{ $post->title }}
            </h2>

            <div class="relative flex py-5 items-center">
                <div class="flex-grow border-t border-gray-200"></div>
                <div class="flex-grow border-t border-gray-200"></div>
            </div>

            <div class=" flex flex-row justify-between">
                <div class="inline-flex">
                    <button wire:click="positiveRecomendation({{ $post->id }},{{ $post->positive_rec }})"
                        class="inline-flex relative items-center p-2 mx-2 text-sm font-medium text-center text-white bg-green-700 rounded-full hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M23,10C23,8.89 22.1,8 21,8H14.68L15.64,3.43C15.66,3.33 15.67,3.22 15.67,3.11C15.67,2.7 15.5,2.32 15.23,2.05L14.17,1L7.59,7.58C7.22,7.95 7,8.45 7,9V19A2,2 0 0,0 9,21H18C18.83,21 19.54,20.5 19.84,19.78L22.86,12.73C22.95,12.5 23,12.26 23,12V10M1,21H5V9H1V21Z" />
                        </svg>
                        <span class="sr-only">Recomendo</span>
                        <div
                            class="inline-flex absolute -top-3 -right-3 justify-center items-center w-6 h-6 text-xs font-bold text-white bg-green-500 rounded-full border-2 border-white dark:border-gray-900">
                            {{ $post->positive_rec }}
                        </div>
                    </button>

                    <button wire:click="negativeRecomendation({{ $post->id }},{{ $post->negative_rec }})"
                        class="inline-flex relative items-center p-2 mx-2 text-sm font-medium text-center text-white bg-red-700 rounded-full hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-green-800">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19,15H23V3H19M15,3H6C5.17,3 4.46,3.5 4.16,4.22L1.14,11.27C1.05,11.5 1,11.74 1,12V14A2,2 0 0,0 3,16H9.31L8.36,20.57C8.34,20.67 8.33,20.77 8.33,20.88C8.33,21.3 8.5,21.67 8.77,21.94L9.83,23L16.41,16.41C16.78,16.05 17,15.55 17,15V5C17,3.89 16.1,3 15,3Z" />
                        </svg>
                        <span class="sr-only">Não Recomendo</span>
                        <div
                            class="inline-flex absolute -top-3 -right-3 justify-center items-center w-6 h-6 text-xs font-bold text-white bg-red-500 rounded-full border-2 border-white dark:border-gray-900">
                            {{ $post->negative_rec }}
                        </div>
                    </button>
                </div>
                <div class="">
                    <button
                        class="ml-5 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Seguir
                    </button>
                </div>
            </div>

            <div wire:loading class=" absolute flex justify-center rounded-full w-10 h-10">
                <img style="display: block;-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);" src="https://paladins-draft.com/img/circle_loading.gif">
            </div>
        </article>
    @endforeach
@else
    <div class="flex flex-row m-4 rounded-xl shadow-lg bg-white">
        <div class="bg-red-100 p-5 w-full ">
            <div class="flex space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="flex-none fill-current text-red-500 h-4 w-4">
                    <path
                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.597 17.954l-4.591-4.55-4.555 4.596-1.405-1.405 4.547-4.592-4.593-4.552 1.405-1.405 4.588 4.543 4.545-4.589 1.416 1.403-4.546 4.587 4.592 4.548-1.403 1.416z" />
                </svg>
                <div class="leading-tight flex flex-col space-y-2">
                    <div class="flex-1 leading-snug text-sm text-red-600">
                        Não há posts
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
