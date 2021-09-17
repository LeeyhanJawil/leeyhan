<div class="table-responsive">
    <table class="table" id="families-table">
        <thead>
            <tr>
                <th>Fathersname</th>
        <th>Mothersname</th>
        <th>Sistersname</th>
        <th>Brothersname</th>
        <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($families as $family)
            <tr>
                <td>{{ $family->fathersName }}</td>
            <td>{{ $family->mothersName }}</td>
            <td>{{ $family->sistersName }}</td>
            <td>{{ $family->brothersName }}</td>
            <td>{{ $family->Address }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['families.destroy', $family->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('families.show', [$family->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('families.edit', [$family->id]) }}" class='btn btn-default btn-xs'>
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
