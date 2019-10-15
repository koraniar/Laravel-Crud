
<div class="form-group">
    <label for="" class="negrita">Name:</label>
    <div>
      @if (!empty($business->name))
        <input class="form-control" value="{{$business->name}}" required="required" name="name" type="text">
        @else
          <input class="form-control"  required="required" name="name" type="text">
      @endif
    </div>
    <label for="" class="negrita">NIT:</label>
    <div>
      @if (!empty($business->nit))
        <input class="form-control" value="{{$business->nit}}" required="required" name="nit" type="text">
        @else
          <input class="form-control"  required="required" name="nit" type="text">
      @endif
    </div>
    <label for="" class="negrita">City:</label>
    <div>
      @if (!empty($business->city))
        <input class="form-control" value="{{$business->city}}" required="required" name="city" type="text">
        @else
          <input class="form-control"  required="required" name="city" type="text">
      @endif
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="button" href="{{asset('/businesses')}}" class="btn btn-default">Cancel</a>
  