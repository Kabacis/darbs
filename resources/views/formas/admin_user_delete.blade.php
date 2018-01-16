<div class="col-sm-3">
    <form action="/admin/delete" method="POST" role="search">
        {{ csrf_field() }}
        <div class="dorm-group">
            <strong> <label for="name">Dzēst lietotāju: </label> </strong><br>
            <input type="number" placeholder="user_id" class="form-control" name="user_id">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Dzēst lietotāju! </button>
        </div>

    </form>

</div>
<p><i>(funkcija ļauj dzēst lietotāju, ievadot viņa ID)</i></p>