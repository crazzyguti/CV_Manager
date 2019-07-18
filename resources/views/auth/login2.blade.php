<form method="post" action="{{ url('/login') }}">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="remembercheck" name="remember">
        <label class="form-check-label" for="remembercheck">Remember Me</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
