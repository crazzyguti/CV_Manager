{!! Form::open(array('route' => array('user.edit', $user->id), 'method' => 'POST')) !!}
<ul>
    <li>
        {!! Form::label('fname', 'Fname:') !!}
        {!! Form::text('fname') !!}
    </li>
    <li>
        {!! Form::label('lname', 'Lname:') !!}
        {!! Form::text('lname') !!}
    </li>
    <li>
        {!! Form::label('bdate', 'Bdate:') !!}
        {!! Form::text('bdate') !!}
    </li>
    <li>
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email') !!}
    </li>
    <li>
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone') !!}
    </li>
    <li>
        {!! Form::label('password', 'Password:') !!}
        {!! Form::text('password') !!}
    </li>
    <li>
        {!! Form::label('gender', 'Gender:') !!}
        {!! Form::text('gender') !!}
    </li>
    <li>
        {!! Form::label('salt', 'Salt:') !!}
        {!! Form::text('salt') !!}
    </li>
    <li>
        {!! Form::label('register_ip', 'Register_ip:') !!}
        {!! Form::text('register_ip') !!}
    </li>
    <li>
        {!! Form::label('forget_token', 'Forget_token:') !!}
        {!! Form::text('forget_token') !!}
    </li>
    <li>
        {!! Form::label('active_token', 'Active_token:') !!}
        {!! Form::text('active_token') !!}
    </li>
    <li>
        {!! Form::label('active', 'Active:') !!}
        {!! Form::text('active') !!}
    </li>
    <li>
        {!! Form::label('activation_key', 'Activation_key:') !!}
        {!! Form::text('activation_key') !!}
    </li>
    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}
