@extends('layouts.app')

@section('content')

<script src="https://cdn.tailwindcss.com"></script>

<body class="bg-gradient-to-br from-green-50 to-green-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-md border border-gray-200">
        <h2 class="text-3xl font-bold text-center text-green-600 mb-6">Tambah User</h2>

        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="nama" class="block font-semibold text-gray-700">Nama:</label>
                <input type="text" id="nama" name="nama"
                    class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-green-400 focus:outline-none focus:border-green-500 transition-shadow shadow-sm">
                @foreach ($errors->get('nama') as $msg)
                    <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
            </div>

            <div class="mb-4">
                <label for="npm" class="block font-semibold text-gray-700">NPM:</label>
                <input type="text" id="npm" name="npm"
                    class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-green-400 focus:outline-none focus:border-green-500 transition-shadow shadow-sm">
                @foreach ($errors->get('npm') as $msg)
                    <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
            </div>

            <div class="mb-4">
                <label for="kelas_id" class="block font-semibold text-gray-700">Kelas:</label>
                <select name="kelas_id" id="kelas_id"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm bg-white text-gray-700 focus:ring-green-400 focus:border-green-500 focus:outline-none transition">
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
                @foreach ($errors->get('kelas_id') as $msg)
                    <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
            </div>

            <div class="mb-6">
                <label for="foto" class="block font-semibold text-gray-700">Foto:</label>
                <input type="file" id="foto" name="foto"
                    class="mt-1 w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-green-100 file:text-green-700 hover:file:bg-green-200 transition">
            </div>

            <button type="submit"
                class="w-full bg-green-500 text-white font-semibold py-2 rounded-lg hover:bg-green-600 transition-all duration-200 transform hover:scale-105 shadow-md">
                Submit
            </button>
        </form>
    </div>

@endsection
