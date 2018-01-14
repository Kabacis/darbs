<div class="card-block">

    <form method="POST" action="/SP/{{ $pasparvalde->id }}/resursi">

        {{ csrf_field() }}


        <h5>Pievienot jaunu resursu:</h5>

        <div class="form-group">
            <label for="title">Resursa nosaukums: </label>
            <textarea name="title" placeholder="Nosaukums" class="form-control"></textarea>

        </div>

        <div class="form-group">
            <label for="description">Resursa apraksts: </label>
            <textarea name="description" placeholder="Apraksts" class="form-control"></textarea>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Publicēt! </button>
        </div>
    </form>
</div>

