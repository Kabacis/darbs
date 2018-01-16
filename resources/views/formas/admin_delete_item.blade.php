
<div class="col-sm-3">
    <form action="/admin/item_delete" method="POST" role="search">
        {{ csrf_field() }}
        <div class="dorm-group">
            <strong> <label for="name">Dzēst resursu: </label> </strong><br>
            <input type="number" placeholder="item_id" class="form-control" name="item_id">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Dzēst resursu! </button>
        </div>

    </form>

</div>
<p><i>(funkcija ļauj dzēst resursu, ievadot viņa ID)</i></p>