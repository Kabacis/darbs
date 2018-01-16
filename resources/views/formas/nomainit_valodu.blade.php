
<div>

    <form action="language" method="post">
        <label for="title">@lang('messages.chlang')</label>
        <select name="locale">
            <option value="en">English</option>
            <option value="lv">Latviešu</option>
        </select>
        {{csrf_field()}}
        <input type="submit" value="Submit">
    </form>

</div>
