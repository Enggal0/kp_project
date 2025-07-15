<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Admin
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium mb-4">Tambah Task</h3>
            <form method="POST" action="{{ route('tasks.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Judul Tugas</label>
                    @if(session('success'))
                        <div class="mb-2 text-green-600">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="mb-2 text-red-600">
                            {{ session('error') }}
                        </div>
                    @endif
                    <input type="text" name="title" id="title"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                        required>
                    </div>
                <button type="submit"
                    class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">
                    Simpan
                </button>
            </form>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium mb-4">Daftar Tugas</h3>
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul Tugas</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Dibuat</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($tasks as $task)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $task->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $task->created_at->format('d-m-Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="px-6 py-4 text-center text-gray-500">Belum ada tugas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

