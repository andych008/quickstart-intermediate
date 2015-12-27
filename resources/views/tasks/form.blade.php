<!-- Task Name -->
<div class="form-group">
    {!! Form::label('name','Title', array('class' => 'col-sm-3 control-label')) !!}

    <div class="col-sm-6">
        {!! Form::text('name', null, array('class' => 'form-control','value' =>  old('task') )) !!}
    </div>
</div>

<!-- Task Content -->
<div class="form-group">
    {!! Form::label('content','Content', array('class' => 'col-sm-3 control-label')) !!}

    <div class="col-sm-6">
        {!! Form::textarea('content', null, array('class' => 'form-control','cols' => '30','rows' => '10','value' =>  old('task') )) !!}
    </div>
</div>

<!-- Task FinishTime -->
<div class="form-group">
    {!! Form::label('finish_time','FinishTime', array('class' => 'col-sm-3 control-label')) !!}

    <div class="col-sm-6">
        {!! Form::date('finish_time', \Carbon\Carbon::now(), array('class' => 'form-control' )) !!}
    </div>
</div>
