@props(['users'])
<div class="container mx-auto p-6">
    <h2 class="text-xl font-semibold mb-4">Gestió d'Usuaris</h2>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left text-gray-600">#</th>
                    <th class="px-4 py-2 text-left text-gray-600">Nom</th>
                    <th class="px-4 py-2 text-left text-gray-600">Email</th>
                    <th class="px-4 py-2 text-center text-gray-600">Accions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($users as $index => $user)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2">{{ $user->name }}</td>
                        <td class="px-4 py-2">{{ $user->email }}</td>
                        <td class="px-4 py-2 text-center">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Editar</button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded text-sm ml-2">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
