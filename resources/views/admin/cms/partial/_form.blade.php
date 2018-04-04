<div class="form-group">
    {!! Form::label('title','Title*',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('title', old('title'), array('class'=>'form-control')) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('content','Content*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::textarea('content', old('title'),['class'=>'form-control summernote']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('slug','Slug*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('slug', old('slug'),['class'=>'form-control slug']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-xs-offset-2 col-xs-6">
        {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
    </div>
</div>

@push('scripts')
<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 400,
        });
    });
</script>
@endpush