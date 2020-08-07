    @if (Auth::user()->is_favorite($micropost->id))
        {{-- アンフェイバリットボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('お気に入り解除', ['class' => "btn btn-secondary btn-block btn-sm col-sm-"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フェイバリットボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('お気に入り', ['class' => "btn btn-info btn-block btn-sm col-sm-"]) !!}
        {!! Form::close() !!}
    @endif
    