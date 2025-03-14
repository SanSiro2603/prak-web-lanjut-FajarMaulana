<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-500 to-green-600 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-indigo-600 mb-6">Tambah User</h2>

        <form action="{{ route('user.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="nama" class="block font-medium text-gray-700">Nama :</label>
                <input type="text" id="nama" name="nama" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">

                @foreach ($errors->get('nama') as $msg)
                <p class="text-red-600 text-sm mt-1 bg-red-100 p-2 rounded">{{ $msg }}</p>
                @endforeach
            </div>

            <div>
                <label for="npm" class="block font-medium text-gray-700">NPM :</label>
                <input type="text" id="npm" name="npm" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                
                @foreach ($errors->get('npm') as $msg)
                <p class="text-red-600 text-sm mt-1 bg-red-100 p-2 rounded">{{ $msg }}</p>
                @endforeach
            </div>
            
            <div>
                <label for="kelas" class="block font-medium text-gray-700">Kelas :</label>
                <select name="kelas_id" id="kelas_id" class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50">
                    <option value="" disabled selected>Pilih Kelas</option>
                    @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 rounded-lg hover:bg-indigo-700 transition">Submit</button>
        </form>
    </div>

</body>
</html>