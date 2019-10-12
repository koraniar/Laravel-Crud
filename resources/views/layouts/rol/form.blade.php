
<div class="form-group">
  <label for="" class="negrita">Nombre:</label>
  <div>
    @if (!empty($rol->name))
      <input class="form-control" value="{{ $rol->name}}" required="required" name="name" type="text">
      @else
        <input class="form-control"  required="required" name="name" type="text">
    @endif
  </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<a type="button" href="{{asset('/rols')}}" class="btn btn-default">Cancelar</a>
