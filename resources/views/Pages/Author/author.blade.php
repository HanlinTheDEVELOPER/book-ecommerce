@extends('Layout.app')

@section('body')
    <div class="p-10">
        <div class=" flex h-200">
            <div class="w-1/3 flex flex-col items-center justify-center">
                <div class="w-60 h-60 rounded-full overflow-hidden border border-gray-800 ">
                    @if ($author->photo)
                        <img alt="" class="w-full h-full object-fill" src="{{ url($author->photo) }}">
                    @else
                        <img class="w-full h-full object-fill" src="{{ url('/storage/upload/image/PngItem_307416.png') }}" />
                    @endif
                </div>
                <h1 class="text-3xl mt-5 ">{{ $author->name }}</h1>
                <h1 class="text-gray-700 m-3">
                    Total Books: {{ count($author->books) }}
                </h1>
                <div class="pb-3">
                    <a href="">
                        <button class="bg-gray-500 text-white rounded px-3 py-1">Edit</button>
                    </a>
                    <a href="{{ url('/author/' . $author->id) }}">
                        <button class="bg-gray-600 text-red-500 rounded px-3 py-1">Delete</button>
                    </a>
                </div>
            </div>
            <div class="my-1 rounded-full w-1 h-200 bg-black/20"> </div>
            <div class="w-2/3 h-200 px-10">
                <h3 class="text-2xl mb-10">Author Summary</h3>
                <div>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente perferendis adipisci neque fuga
                    architecto nulla perspiciatis vero dolorem saepe tempora laborum assumenda maxime tenetur recusandae,
                    repellendus, minus ab molestias illum?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde alias itaque officia consectetur eveniet
                    a
                    error quae? Et quo quod dicta aperiam assumenda veritatis? Possimus, error totam! Neque, dolor
                    accusamus.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta odit ut amet nostrum aspernatur non est
                    deleniti accusantium aliquid sint magnam facilis, porro praesentium, libero voluptate provident.
                    Tempora,
                    nulla ipsum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quaerat laborum, sint vero illo sed dolore
                    quam
                    expedita corporis minus assumenda libero dolorem ab quae placeat amet quidem, numquam repellat.
                </div>

            </div>
        </div>
        <div class="my-1 rounded-full h-1 bg-black/20"></div>
    </div>
@endsection
