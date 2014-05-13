<?php

class AdminController extends \BaseController {

    protected $admin;
    
    public function __construct( User $admin ) {
        $this->admin = $admin;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        
        $captcha = new CaptchaController();
        $captchaURL = $captcha->show();
        
        $viewData = array(
            'captchaURL' => $captchaURL,
            'header' => 'no',
            
        );
        return View::make( 'admin.login' )->with( $viewData );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(){
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show( $name ){
        if( ! Auth::check() ) return Redirect::to( 'admin.index' );
        $split = explode( '-', $name );
        $admin = $this->admin->where( 'first_name', '=', $split[0] )->first();
        $viewData = array(
            'admin' => $admin,
            'header' => 'no',
        );
        return View::make( 'admin.create' )->with( $viewData );
            //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
            //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
            //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
            //
    }
    
    public function login(){
        
        $input = Input::all();

        $filterArray = array_filter( $input );
        
        if( empty( $filterArray ) ) return Redirect::route( 'admin.index' );
        
        if( ! $this->admin->fill( $input )->isValid(  ) || Input::get( 'captcha' ) == '' ){
            $errors = $this->admin->errors->all();

            foreach( $errors as $key => $message ){
                if( $message != '' ){
                    
                    $split = explode(' ', $message);
                    $errorData[$split[1]] = '<div class="alert error"><strong>'.$message.'</strong></div>';
                }
            }
            
            $message = 'The captcha field is required.';
            $errorData['captcha'] = '<div class="alert error"><strong>'.$message.'</strong></div>';
            
            return Redirect::back()->withInput()->withErrors( $errorData );
        }
        
        if ( Session::get( 'captcha' ) == Input::get( 'captcha' ) ){
            
            if( Auth::attempt( Input::only( 'email', 'password' ) ) ){
                $name = Auth::user()->first_name.'-'.Auth::user()->last_name;
                return Redirect::route( 'admin.show', $name );
            }

            $message = 'The email/password you entered is incorrect!';
            $errorData['general'] = '<div class="alert error"><strong>'.$message.'</strong></div>';
            return Redirect::back()->withInput()->withErrors( $errorData );
            
//            $this->admin->user_id = '7955444e-3541-49e0-9e5a-ee81e86f68da';
//            $this->admin->first_name = 'Amit';
//            $this->admin->last_name = 'Tiwari';
//            $this->admin->email = Input::get( 'email' );
//            $this->admin->password = Hash::make( Input::get( 'password' ) );
//            $this->admin->is_admin = 'yes';
//            $this->admin->is_reg = 'yes';
//            
//            try{
//                $this->admin->save();
//            }
//            catch(PDOException $exception){
//                return Response::make('Database error! ' . $exception->getSql() );
//            }
//            return 'Save Done';
            
        }else{
            $message = 'The captcha text does not match text in the image.';
            $errorData['captcha'] = '<div class="alert error"><strong>'.$message.'</strong></div>';
            
            return Redirect::back()->withInput()->withErrors( $errorData );
        }
        
    }
}
