<div class="card-block">

    <form method="POST" action="/SP/{{ $pasparvalde->id }}/resursi">

        {{ csrf_field() }}


        <h5>@lang('messages.add')</h5>

        <div class="form-group">
            <label for="title">@lang('messages.title') </label>
            <textarea name="title" placeholder="@lang('messages.title')" class="form-control"></textarea>

        </div>

        <div class="form-group">
            <label for="description">@lang('messages.description')</label>
            <textarea name="description" placeholder="@lang('messages.description')" class="form-control"></textarea>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"> @lang('messages.publish') </button>
        </div>
    </form>
</div>

