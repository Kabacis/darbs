
<div class="col-sm-6">

    <form action="/profile/edit" method="POST" role="search">
        {{ csrf_field() }}
        <div class="form-group">
            <strong> <label for="name">Rediģēt savu vārdu</label> </strong><br>
            <textarea name="name" placeholder="Jaunais vārds" class="form-control"></textarea>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Rediģēt </button>
        </div>


    </form>

</div>
