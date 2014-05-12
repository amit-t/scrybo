<?php

class AdminController extends \BaseController {

    protected $admin;
    
    public function __construct( Admin $admin ) {
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
    public function show($id)
    {
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
        
        if( ! $this->admin->fill( $input )->isValid(  ) ){
            $errors = $this->admin->errors->all();

            foreach( $errors as $key => $message ){
                if( $message != '' ){
                    
                    $split = explode(' ', $message);
                    $errorData[$split[1]] = '<div class="alert error"><strong>'.$message.'</strong></div>';
                }
            }
            
            return Redirect::back()->withInput()->withErrors( $errorData );
        }
    }
}
