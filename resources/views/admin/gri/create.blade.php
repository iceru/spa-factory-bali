<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Request GRI Form Data
    </div>
    <x-slot name="table">
        <table class="table-auto border-collapse border">
            <thead>
                <tr>
                    <th class="p-3 border">Name</th>
                    <th class="p-3 border">Email</th>
                    <th class="p-3 border">Company</th>
                    <th class="p-3 border">Job Title</th>
                    <th class="p-3 border">Usage</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td class="p-3 border">{{ $contact->name }}</td>
                        <td class="p-3 border">{{ $contact->email }}</td>
                        <td class="p-3 border">{{ $contact->number }}</td>
                        <td class="p-3 border">{{ $contact->company }}</td>
                        <td class="p-3 border">{{ $contact->job_title }}</td>
                        <td class="p-3 border">{{ $contact->usage_for }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-app-layout>
