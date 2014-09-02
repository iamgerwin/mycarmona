<div class="ui input">
    {{Form::label('name','Name')}}
    {{Form::text('name')}}
</div>
<div class="ui input">
    {{Form::label('location','Location')}}
    {{Form::text('location')}}
</div>
<div class="ui form">
    {{Form::label('description','Name')}}
    {{Form::textarea('description')}}
</div>
<div class="ui checkbox toggle">
  <input type="checkbox" id="unique-id" value=0>
  <label for="unique-id">Active</label>
</div>
<div class="ui input">
    {{Form::submit('Submit')}}
</div>

