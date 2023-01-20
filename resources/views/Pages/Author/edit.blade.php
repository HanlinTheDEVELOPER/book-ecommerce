@extends('Layout.app')
@section('body')
    <div class="flex justify-center py-5">
        <form action="{{ url('/author/' . $author->id . '/edit') }}" class="w-1/3 px-5" enctype="multipart/form-data"
            method="post">
            @csrf
            <div class="mb-3">
                <input
                    class="bg-gray-50 p-3 rounded w-full border @error('name')
            border-red-500
            @enderror"
                    name="name" placeholder="Enter Author Name" type="text" value="{{ $author->name }}">
                @error('name')
                    <span>
                        <small class="text-red-500">
                            {{ $message }}
                        </small>
                    </span>
                @enderror
            </div>

            <div class="mb-3 w-full flex justify-center  h-80 relative">
                <div class="w-80 h-80">
                    @if ($author->photo)
                        <img alt="{{ $author->name }}'s photo" class="h-full w-full object-fill" id="author_image"
                            src="{{ url($author->photo) }}" title="author photo" />
                    @else
                        <img alt="{{ $author->name }}'s photo" class="h-full w-full object-fill" id="author_image"
                            src="{{ url('storage/upload/image/PngItem_307416.png') }}" title="author photo" />
                    @endif
                </div>
                <div class="w-full h-full absolute top-0 flex items-center justify-center">
                    <input class="absolute top-0 left-0 opacity-0 w-full h-full cursor-pointer" id="author_image_upload"
                        name="photo" type="file">
                    <button class="bg-gray-200/70 px-3 py-2 rounded">Edit</button>

                </div>
                @error('photo')
                    <span>
                        <small class="text-red-500">
                            {{ $message }}
                        </small>
                    </span>
                @enderror
            </div>
            <div>
                <textarea class="bg-gray-50 p-3 rounded mb-3 w-full border " cols="30" name="about"
                    placeholder="Enter summary about the author!" rows="10">
                {{ $author->about }}
                </textarea>
            </div>
            <div class="text-end">
                <input class="bg-blue-400 text-white p-3 rounded" type="submit" value="Update">

            </div>
        </form>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(e) {


        $('#author_image_upload').change(function() {

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#author_image').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });



    });
</script>
