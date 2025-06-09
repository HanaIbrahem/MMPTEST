<x-dashbord.layout.app>

    <x-dashbord.card.header title="Contacts" />


    <x-dashbord.table.table>
        <x-dashbord.table.table-header>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Created At</th>
            <th>Actions</th>
        </x-dashbord.table.table-header>

        <tbody>
            @foreach ($contacts as $contact)
                <x-dashbord.table.table-row>
                    <x-dashbord.table.table-col />
                    <x-dashbord.table.table-col :value="$contact->firstname" />
                    <x-dashbord.table.table-col :value="$contact->lastname" />
                    <x-dashbord.table.table-col :value="$contact->email" />
                    <x-dashbord.table.table-col :value="Str::limit($contact->message, 50)" />
                    <x-dashbord.table.table-col :value="$contact->created_at->format('Y-m-d H:i')" />

                    <x-dashbord.table.table-col>
                        <form action="{{ route('control.contact.destroy', $contact->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this contact?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </x-dashbord.table.table-col>
                </x-dashbord.table.table-row>
            @endforeach
        </tbody>
    </x-dashbord.table.table>

</x-dashbord.layout.app>
