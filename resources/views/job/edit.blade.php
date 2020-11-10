<form action="/update" method="POST" >
    @csrf
<table>

    <tbody>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="{{ $job->name }}">  </td>
        </tr>
        <tr>
            <td>Job</td>
            <td><input type="text" name="job" value="{{ $job->job }}">  </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="{{ $job->email }}"></td>
        </tr>
    </tbody>

</table>
    <input type="hidden" name="id" value="{{ $job->id }}">
    <button type="submit">Edit</button>
</form>
