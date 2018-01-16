<div class="col-sm-4">
    <form action="/admin/role_change" method="POST" role="search">
        {{ csrf_field() }}
        <div class="dorm-group">
            <strong> <label for="name">Mainīt pašpārvaldi/lomu: </label> </strong><br>
            <input type="number" placeholder="user_id to change role" class="form-control" name="user_id">
            <input type="number" placeholder="new role id" class="form-control" name="role_id">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Mainīt lomu</button>
        </div>

    </form>

</div>
<p><i>(Ievadot lietotāja ID, admins var mainīt lietotāja piederību pašpārvaldei vai piešķirt vinam admina statusu)</i></p>