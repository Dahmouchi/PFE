<h1>user index</h1>
<table>
    <tr>
        <th>name</th>
        <th>email</th>
    </tr>
    @foreach ($users as $data)
    <tr>
        <td>{{$data->ProductName}}</td>
        <td>{{$data->description}}</td>
    </tr>
    @endforeach

</table>
