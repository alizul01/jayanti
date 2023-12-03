@extends('layout.admin')
@section('content')
  <section>
    <h1>Upload File Excel</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('import.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel_file">
        <button type="submit">Upload</button>
    </form>

  </section>
@endsection
