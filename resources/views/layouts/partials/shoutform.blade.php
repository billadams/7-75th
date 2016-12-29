<div class="shoutbox-form">

    {!! Form::open(array('url' => 'App\Http\Shout')) !!}

    <!-- Shoutbox-name Form Input -->
    <div class="form-group">
        {!! Form::label( 'shoutbox-name', 'Name:' ) !!}
        {!! Form::text( 'shoutbox-name', null, [ 'class' => 'form-control' ] ) !!}
    </div>

    <!-- Shoutbox-comment Form Input -->
    <div class="form-group">
        {!! Form::label( 'shoutbox-comment', 'Comment:' ) !!}
        {!! Form::textarea( 'shoutbox-comment', null, [ 'class' => 'form-control' ] ) !!}
    </div>
    
    <!-- Shout! Form Input -->
    <div class="form-group">
        {!! Form::submit( 'Shout!', [ 'class' => 'btn btn-primary form-control' ] ) !!}
    </div>

    {!! Form::close() !!}
</div>