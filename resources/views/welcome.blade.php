@extends('layouts.app')

@section('content')
    <section class="xl:w-1/3 lg:w-2/4 md:w-3/4 mt-3 mx-auto flex flex-col box-border ">
        @livewire('post.show')
    </section>
@endsection

