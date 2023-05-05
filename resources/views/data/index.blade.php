@extends('welcome')

@section('contents')
    <form action="{{ route('data.store') }}" class="mt-5" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="json_file">Upload JSON file</label>
        <br>
        <input type="file" name="file" id="json_file" class="mt-2" accept=".json">
        <div class="mt-2">
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
