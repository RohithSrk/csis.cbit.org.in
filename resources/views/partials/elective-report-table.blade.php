<table class="table table-bordered mb-0 th-bb-n">
    <thead>
    <tr>
        <th>#</th>
        <th>Roll Number</th>
        <th>Student Name</th>
        <th>Elective Subject</th>
    </tr>
    </thead>
    <tbody>
    @php $i = 0 @endphp
    @foreach( $students as $student )
        <tr>
            <td class="width-50">{{ ++$i }}</td>
            <td>{{ $student->rollnum  }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->getElectiveSubject( $elective_id ) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>