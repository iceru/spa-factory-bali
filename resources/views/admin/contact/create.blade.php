<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Clients Data
    </div>
    @if ($message = Session::get('success'))
        <div class="w-full mt-4 bg-green-100 border border-green-400 p-4 rounded-md text-green-700">
            <p>{{ $message }}</p>
        </div>
    @endif
    <x-slot name="table">
        <table class="table-auto border-collapse border">
            <thead>
                <tr>
                    <th class="p-3 border">Name</th>
                    <th class="p-3 border">Email</th>
                    <th class="p-3 border">Phone Number</th>
                    <th class="p-3 border">Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td class="p-3 border">{{ $contact->name }}</td>
                        <td class="p-3 border">{{ $contact->email }}</td>
                        <td class="p-3 border">{{ $contact->number }}</td>
                        <td class="p-3 border">{{ $contact->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-app-layout>
