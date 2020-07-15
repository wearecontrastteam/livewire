<div class="container">
    <div class="row">
        <div class="col-md-12">

            <input type="text"  class="form-control" placeholder="Search Name" wire:model="search" />

            <table class="table table-bordered mt-4">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>
