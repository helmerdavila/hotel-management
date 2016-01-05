@if (count($errors->{$form}) > 0)
    <div class="alert alert-danger">
        <strong>{{ trans('strings.whoops') }}</strong> {{ trans('strings.error.message') }}
    </div>
@endif
