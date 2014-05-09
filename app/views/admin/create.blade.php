@extends( 'master.default' )
@section( 'title' )

Scrybo | Admin

@stop

@section( 'content' )
<div id="primary" class="site-content span12">
    
<h1>Admin Login</h1>

    {{ Form::open( ['route' => 'admin.store'] ) }}
    
    <p>
        {{ Form::text('email', Input::old('email'),  array( 'placeholder'=>'Email ID' )) }}
        {{ $errors->first( 'email' ) }}
    </p>
    <p>
        {{ Form::password( 'password', array( 'placeholder' => 'Password' ) ) }}
        {{ $errors->first( 'password' ) }}
    </p>
    <div class="eemail_caption">
        {{ $captchaURL }}
    </div>
    <div class="eemail_caption"> Not readable? <b class="changeCaptchaImage">Change text.</b> </div>
    <input class="captcha_textbox" id="captcha_textbox" placeholder="ENTER THE TEXT FROM THE IMAGE" maxlength="150" type="text">
    
    <p>
        {{ Form::submit( 'Login' ) }} 
    </p>
    {{ Form::close() }}
</div>
    
@stop