
<div class="form-group">
    <label for="" class="negrita">Nombre:</label>
    <div>
      @if (!empty($module->name))
        <input class="form-control" value="{{$module->name}}" required="required" name="name" type="text">
        @else
        <input class="form-control" required="required" name="name" type="text">
      @endif
    </div>
    <label for="" class="negrita">Ruta:</label>
    <div>
      @if (!empty($module->route))
        <input class="form-control" value="{{$module->route}}" required="required" name="route" type="text">
        @else
        <input class="form-control" required="required" name="route" type="text">
      @endif
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<a type="button" href="{{asset('/modules')}}" class="btn btn-default">Cancelar</a>
  