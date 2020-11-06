<div class="table-responsive">
    <table class="table" id="courseOutlines-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Course Id</th>
        <th>Course Title No</th>
        <th>Course Title</th>
        <th>Duration</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courseOutlines as $courseOutlines)
            <tr>
                <td>{{ $courseOutlines->user_id }}</td>
            <td>{{ $courseOutlines->course_id }}</td>
            <td>{{ $courseOutlines->course_title_no }}</td>
            <td>{{ $courseOutlines->course_title }}</td>
            <td>{{ $courseOutlines->duration }}</td>
                <td>
                    {!! Form::open(['route' => ['courseOutlines.destroy', $courseOutlines->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courseOutlines.show', [$courseOutlines->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('courseOutlines.edit', [$courseOutlines->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
