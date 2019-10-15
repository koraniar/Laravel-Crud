
<div class="form-group">
  <label for="" class="negrita">Name:</label>
  <div>
    @if (!empty($role->name))
      <input class="form-control" value="{{$role->name}}" required="required" name="name" type="text">
      @else
        <input class="form-control"  required="required" name="name" type="text">
    @endif
  </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<a type="button" href="{{asset('/roles')}}" class="btn btn-default">Cancel</a>
