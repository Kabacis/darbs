<form enctype="multipart/form-data" action="/profile" method="POST">
    {{ csrf_field() }}
    <label>Update profile image</label>
    <input type="file" name="avatar">
    <input type="submit" name="Submit" class="pull-right btn btn-sm btn-primary">
</form>