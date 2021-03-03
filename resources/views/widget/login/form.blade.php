<form id="frmLogin" name="frmLogin" method="post" action="{{ route('login') }}">

    <div class="control">
        <label for="txtLoginEmail">@lang('user.fields.email')</label>
        <input type="text" id="txtLoginEmail" name="email" placeholder="email@example.com"/>
        <div class="error">{{ $errors->first('email') }}</div>
    </div>

    <div class="control">
        <label for="txtLoginPass">@lang('user.fields.password')</label>
        <input type="text" id="txtLoginPass" name="password" placeholder="P@ssWord!"/>
        <div class="error">{{ $errors->first('password') }}</div>
    </div>

    <div class="actions">
        <button id="cmdSubmit" type="submit" class="primary">@lang('buttons.signin')</button>
        <a class="button" href="{{ route('register') }}">@lang('buttons.register')</a>
    </div>
    @csrf
</form>
