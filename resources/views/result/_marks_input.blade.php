@if ($courses->isEmpty())
  <div class="alert alert-danger">No resultable courses found with given information.</div>
@else
<div id='mark_div'>
<table class="table table-bordered table-responsive" id='marks_table'>
  <thead>
    <tr>
      <th>Course Name</th>
      <th>Course Code</th>
      <th>Credit</th>
      <th>GPA</th>
      <th>Remove</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($courses as $course)
      <tr>
        <td>{{ $course->name }}</td>
        <td>{{ $course->code }}</td>
        <td>{{ $course->credit }}</td>
        <td><input type="number" name="course_ids[]" hidden value="{{ $course->id }}">
        <input type="number" name="mark_{{ $course->id }}" step="0.01" min="2" max="4" required></td>
        <td><a href="javascript:void(0)" onclick ="remove(this)" id="remove">Remove</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
<div style="text-align: center">
    {{ Form::submit('Submit', ['class' => 'btn btn-primary','style'=>'margin: 0 auto;']) }}
</div>
</div>
@endif
