<div class="videocall" id="videocall"> <a href="#"> <img src="{{ asset('images/videocall.png') }}"  alt=""> </a></div>

<div class="join_call" id="join_call">    
    <div class="modal-header">
        <h4>Join Video Call</h4>
        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body">
        {{ Form::open(['url' => 'videocall/store','method'=>'POST']) }}

        <div class="form-group">
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
            <span class="text-danger">
                <strong id="company_name-error"></strong>
            </span>
        </div>

        <div class="form-group">
            {!! NoCaptcha::display() !!}
            <div class="col-sm-8">
            </div>
            <span class="text-danger">
                <strong id="started_on-error"></strong>
            </span>
        </div>                                

        <div class="form-group no-margin">
            {!! Form::submit('Submit', array('id'=>'submitForm','class'=>'btn btn-sec btn-block')) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#videocall').click(function () {
            $('#join_call').show();
            $('#join_call').slideDown();
        });

        $('.close').click(function () {
            $('#join_call').hide();
        });

    });
</script>