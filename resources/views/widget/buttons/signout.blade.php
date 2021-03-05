<form class="signout" name="frmSignout" method="post" action="{{ route('logout') }}">
    <button class="signout">@lang('buttons.signout')</button>
    @csrf
</form>
