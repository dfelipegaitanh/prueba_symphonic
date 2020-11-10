<table>

    <thead>
    <tr>
        <th>Name</th>
        <th>Job</th>
        <th>Email</th>
        <th>Edit</th>
    </tr>
    </thead>

    <tbody>
    @foreach($jobs as $job)
        <tr>
            <td>{{ $job->name }}</td>
            <td>{{ $job->job }}</td>
            <td>{{ $job->email }}</td>
            <td><a href="{{ route('job.edit', ['job' => $job->id ]) }}">Edit</a></td>
        </tr>
    @endforeach
    </tbody>

</table>
