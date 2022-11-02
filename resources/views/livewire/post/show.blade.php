

@if (count($posts) > 0)
    @foreach ($posts as $post)
        <article  wire:id="{{$post->id}}" class="mb-4 mx-4 break-inside p-6 rounded-xl bg-white dark:bg-slate-800  bg-clip-border shadow-lg">
            <button wire:key="{{ $loop->index }}" wire:click="positiveRecomendation({{ $post->id }},{{ $post->positive_rec }})" type="submit"
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
            <div wire:loading >
                <img src="https://paladins-draft.com/img/circle_loading.gif" width="64" height="64" class="m-auto mt-1/4">
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