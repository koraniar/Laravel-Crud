
<div class="form-group">
  <label for="" class="negrita">Nombre rol:</label>
  <div>
    @if (!empty($rol->name))
      <input class="form-control" value="{{ $rol->name}}" required="required" name="name" type="text">
      @else
        <input class="form-control"  required="required" name="name" type="text">
    @endif
  </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<button class="btn btn-default" type="reset">Cancelar </button>
