<div class="card-block">

    <form method="POST" action="/SP/comment">

        {{ csrf_field() }}


        <h5>Pievienot jaunu komentāru:</h5>

        <div class="form-group">
            <textarea name="body" placeholder="Komentārs" class="form-control"></textarea>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Publicēt! </button>
        </div>
    </form>
</div>