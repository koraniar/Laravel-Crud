
<div class="form-group">
    <label for="" class="negrita">Name:</label>
    <div>
      @if (!empty($user->name))
        <input class="form-control" value="{{$user->name}}" required="required" name="name" type="text">
        @else
          <input class="form-control"  required="required" name="name" type="text">
      @endif
    </div>
    <label for="" class="negrita">Email:</label>
    <div>
      @if (!empty($user->email))
        <input class="form-control" value="{{$user->email}}" required="required" name="email" type="text">
        @else
          <input class="form-control"  required="required" name="email" type="text">
      @endif
    </div>
    <label for="" class="negrita">Password:</label>
    <div>
      @if (!empty($user->password))
        <input class="form-control" value="{{$user->password}}" required="required" name="password" type="text">
        @else
          <input class="form-control"  required="required" name="password" type="text">
      @endif
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="button" href="{{asset('/users')}}" class="btn btn-default">Cancel</a>
  