{!! Form::open(['route' => 'microposts.store']) !!}
    <div class="form-group">
        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}