<?php
class DealController extends \BaseController {
    
    public function index()
        {
        $deals = Deal::all();
        return View::make('home')->with('deals',$deals);
        }
    public function show($id)
	{
	$deal = Deal::find($id);
        return View::make('deal', array('deal' => $deal));
	}
    public function create()
	{
        $rules = array(
        'description'    => 'required',
        'price' => 'required|digits_between:1,6');
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
        return Redirect::to('create')
            ->withErrors($validator) 
            ->withInput(Input::except('password')); 
    } else {
        $userdata = array(
            'description'     => Input::get('description'),
            'price'  => Input::get('price')
        );
        
        $deal = new Deal;
        $deal->description = $userdata['description'];
        $deal->price = $userdata{'price'};
        $deal->save();
        return Redirect::to('/');
	}   
}
        public function destroy($id)
	{
	Deal::destroy($id);
        return Redirect::to('/');
	}

        
        
        public function update($id)
                {
    $rules = array(
        'description'    => 'required',
        'price' => 'required|digits_between:1,6');
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
        return Redirect::to('deal/'.$id)
            ->withErrors($validator) 
            ->withInput(Input::except('password')); 
    } else {
        $userdata = array(
            'description' => Input::get('description'),
            'price'  => Input::get('price')
        );
        
        $deal = Deal::find($id);
        $deal->description = $userdata['description'];
        $deal->price = $userdata{'price'};
        $deal->save();
        
        return Redirect::to('/');
	
        
        }   
}
      

            
                }