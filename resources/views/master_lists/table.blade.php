<div class="table-responsive">
    <table class="table" id="masterLists-table">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($masterLists as $masterList)
            <tr>
                <td>{{ $masterList->firstname }}</td>
                <td>{{ $masterList->lastname }}</td>
                <td>{{ $masterList->age }}</td>
                <td>{{ $masterList->address }}</td>
                <td>{{ $masterList->contact_number }}</td>
                <td>{{ $masterList->email }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['masterLists.destroy', $masterList->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('masterLists.show', [$masterList->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('masterLists.edit', [$masterList->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
<div class="container text-center">
    {{ $masterLists->links() }}
</div>
