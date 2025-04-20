@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<div class="min-h-screen bg-gradient-to-br from-green-100 to-green-200 py-10 px-4">
    <div class="max-w-6xl mx-auto">

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-green-700">Daftar Pengguna</h2>
            <a href="{{ route('user.create') }}"
                class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-200 shadow-md">
                + Tambah Pengguna Baru
            </a>
        </div>

        <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-200">
            <div class="p-6">
                <p class="text-center text-gray-600 mb-6">Berikut adalah daftar pengguna yang terdaftar dalam sistem.</p>

                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-center border border-gray-200">
                        <thead class="bg-green-600 text-white">
                            <tr>
                                <th class="py-3 px-4">ID</th>
                                <th class="py-3 px-4">Nama</th>
                                <th class="py-3 px-4">NPM</th>
                                <th class="py-3 px-4">Kelas</th>
                                <th class="py-3 px-4">Foto</th>
                                <th class="py-3 px-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="py-3 px-4">{{ $user->id }}</td>
                                    <td class="py-3 px-4">{{ $user->nama }}</td>
                                    <td class="py-3 px-4">{{ $user->npm }}</td>
                                    <td class="py-3 px-4">
                                        {{ $user->kelas->nama_kelas ?? '-' }}
                                    </td>
                                    <td class="py-3 px-4">
                                        @if ($user->foto)
                                            <img src="{{ asset($user->foto) }}" alt="Foto {{ $user->nama }}" class="w-12 h-12 object-cover rounded-full mx-auto">
                                        @else
                                            <span class="text-gray-400 italic">Tidak ada</span>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4">
                                        <a href="{{ route('users.show', $user->id) }}"
                                            class="bg-yellow-400 text-white px-3 py-1 rounded-lg hover:bg-yellow-500 transition duration-150">
                                            Detail
                                        </a>
                                    <a href="{{ route('user.edit', $user ['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($users->isEmpty())
                        <p class="text-center text-gray-500 py-6">Belum ada pengguna yang terdaftar.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
