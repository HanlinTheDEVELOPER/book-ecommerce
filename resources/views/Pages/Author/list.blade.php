@extends('Layout.app')

@section('body')
    <div class="flex gap-10 py-20">

        <form action="{{ url('/authors') }}" class="w-1/3 px-5" enctype="multipart/form-data" method="post">
            @csrf
            <div class="mb-3">
                <input
                    class="bg-gray-50 p-3 rounded w-full border @error('name')
                border-red-500
                @enderror"
                    name="name" placeholder="Enter Author Name" type="text">
                @error('name')
                    <span>
                        <small class="text-red-500">
                            {{ $message }}
                        </small>
                    </span>
                @enderror
            </div>
            <div>
                <textarea class="bg-gray-50 p-3 rounded mb-3 w-full border " cols="30" name="about"
                    placeholder="Enter summary about the author!" rows="10"></textarea>
            </div>
            <div class="mb-3">

                <input accept="image/*"
                    class="bg-gray-50 p-3 rounded w-full border @error('photo')
                    bg-red-500
                @enderror"
                    name="photo" type="file">
                @error('photo')
                    <span>
                        <small class="text-red-500">
                            {{ $message }}
                        </small>
                    </span>
                @enderror
            </div>
            <div class="text-end">
                <input class="bg-blue-400 text-white p-3 rounded" type="submit" value="Create">
            </div>
        </form>
        <div class="w-2/3 flex flex-wrap gap-5">
            @foreach ($authors as $author)
                <a class="w-1/4 h-[40vh]" href="{{ url('/authors/' . $author->id) }}">
                    <div class="h-full w-full bg-gray-100 rounded shadow overflow-hidden ">
                        <div class="h-3/4">
                            @if ($author->photo)
                                <img alt="{{ $author->name }}'s photo" class="h-full w-full object-fill"
                                    src="{{ url($author->photo) }}" title="author photo" />
                            @else
                                <img alt="{{ $author->name }}'s photo" class="h-full w-full object-fill"
                                    src="{{ url('storage/upload/image/PngItem_307416.png') }}" title="author photo" />
                            @endif
                        </div>
                        <div class="h-14 px-4 mt-3">
                            <h1 class="text-lg leading-6">{{ $author->name }}</h1>
                            <h1>{{ count($author->books) }} Books</h1>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
@endsection
