<?php

class BlogController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        
        $captcha = new CaptchaController();
        $captchaURL = $captcha->show();
        
        $viewData = array(
            'captchaURL'=> $captchaURL,
            'header'    => 'yes'
        );
        return View::make( 'blog.index' )->with( $viewData );
        //		if(Request::ajax())
//	        {
//			$html = View::make('blog.post_comments', $data)->render();
//			return Response::json(array('html' => $html));
//	        }
            //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
            //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
            //
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


}
