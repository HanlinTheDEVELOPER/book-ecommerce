@extends('Layout.app')

@section('body')
    <div class="flex gap-10 py-20">
        <form action="" class="w-1/3 px-5" method="post">
            @csrf
            <div>
                <input class="bg-gray-50 p-3 rounded mb-3 w-full border border-red-500" name="name"
                    placeholder="Enter Author Name" type="text">
            </div>
            <div>
                <textarea class="bg-gray-50 p-3 rounded mb-3 w-full border border-red-500 " cols="30" name="about"
                    placeholder="Enter summary about the author!" rows="10"></textarea>
            </div>
            <div>
                <input class="bg-gray-50 p-3 rounded mb-3 w-full border border-red-500 " name="photo" type="file">
            </div>
            <div class="text-end">
                <input class="bg-blue-400 text-white p-3 rounded" type="submit" value="Create">
            </div>
        </form>
        <div class="w-2/3 flex flex-wrap gap-5">
            @foreach ($authors as $author)
                <div class="w-1/4 h-[40vh] bg-gray-100 rounded shadow overflow-hidden">
                    <div class="h-3/4">
                        @if ($author->photo)
                            <img alt="{{ $author->name }}'s photo" src="{{ url($author->photo) }}" title="author photo" />
                        @else
                            <img alt="{{ $author->name }}'s photo" src="{{ asset('upload/image/PngItem_307416.png') }}"
                                title="author photo" />
                        @endif
                    </div>
                    <div class="h-14 px-4 mt-3">
                        <h1>{{ $author->name }}</h1>
                        <h1>{{ count($author->books) }} Books</h1>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
