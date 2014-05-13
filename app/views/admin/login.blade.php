@extends( 'master.default' )
@section( 'title' )

Scrybo | Admin

@stop

@section( 'content' )
<div id="primary" class="site-content span6">
    
<h1>Admin Login</h1>

    <div class="row-fluid">

        {{ Form::open( ['url' => 'admin/login'] ) }}

        <div class="span6">
            <p>
                {{ Form::email('email', Input::old('email'),  array( 'placeholder'=>'Email ID' )) }}
                {{ $errors->first( 'email' ) }}
            </p>           

            <p>
                {{ Form::password( 'password', array( 'placeholder' => 'Password' ) ) }}
                {{ $errors->first( 'password' ) }}
            </p>

        </div>

        <div class="span6">

            <div class="eemail_caption">
                {{ $captchaURL }}
            </div>
            <div class="eemail_caption"> Not readable? <b class="changeCaptchaImage">Change text.</b> </div>
            <p>
                {{ Form::text( 'captcha', Input::old( 'captcha' ),  array( 'placeholder'=> 'Enter the text from above image' ) ) }}
                {{ $errors->first( 'captcha' ) }}                
            </p>
                {{ $errors->first( 'general' ) }}
        </div>

        <div class="span6">

            {{ Form::submit( 'Login' ) }} 

        </div>
        {{ Form::close() }}
    </div>

</div>
    
@stop