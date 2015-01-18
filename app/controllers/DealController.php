<?php
class DealController extends \BaseController {
    
    public function index()
        {
        $deals = Deal::where('id','>',0)->orderBy('updated_at', 'desc')->SimplePaginate(15);
        $sum=array(Deal::sum('cash'),Deal::sum('bank'),Deal::sum('balance'));
        return View::make('home')->with('deals',$deals)->with('sum',$sum);
        }
    public function show($id)
	{
	$deal = Deal::find($id);
        return View::make('deal', array('deal' => $deal));
	}
    public function filter()
        {
        $deals = Deal::where('balance','>',0)->orderBy('updated_at', 'desc')->SimplePaginate(55);
        $sum=array(Deal::sum('cash'),Deal::sum('bank'),Deal::sum('balance'));
        return View::make('home')->with('deals',$deals)->with('sum',$sum);
        }
     public function income()
        {
        $deals = Deal::where('price','>=',0)->orderBy('updated_at', 'desc')->SimplePaginate(15);
        $sum=array(Deal::sum('cash'),Deal::sum('bank'),Deal::sum('balance'));
        return View::make('home')->with('deals',$deals)->with('sum',$sum);
        }    
    public function expense()
        {
        //$users = User::where('votes', '>', 100)->take(10)->get();
        $deals = Deal::where('price','<',0)->orderBy('updated_at', 'desc')->SimplePaginate(15);
        $sum=array(Deal::sum('cash'),Deal::sum('bank'),Deal::sum('balance'));
        return View::make('home')->with('deals',$deals)->with('sum',$sum);
        }    
    public function create()
	{
        $rules = array(
        'client'    => 'required',
        'description'    => 'required',
        'price' => 'digits_between:1,9',
        'cash' => 'digits_between:1,9',
        'bank' => 'digits_between:1,9');
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
        return Redirect::to('create')
            ->withErrors($validator) 
            ->withInput(Input::except('password')); 
    } else {
        $userdata = array(
            'client'     => Input::get('client'),
            'description'     => Input::get('description'),
            'price'  => Input::get('price'),
            'cash'  => Input::get('cash'),
            'bank'  => Input::get('bank')
        );
        
        $deal = new Deal;
        $deal->client = $userdata['client'];
        $deal->description = $userdata['description'];
        $deal->price = $userdata{'price'};
        $deal->cash = $userdata{'cash'};
        $deal->bank = $userdata{'bank'};
        $deal->balance = $userdata{'price'}-$userdata{'cash'}-$userdata{'bank'};
        $deal->save();
        return Redirect::to('/deal');
	}   
}
        public function destroy($id)
	{
	Deal::destroy($id);
        return Redirect::to('/deal');
	}

        
        
        public function update($id)
                {
    $rules = array(
        'client'    => 'required',
        'description'    => 'required',
        'price' => 'digits_between:1,9',
        'cash' => 'digits_between:1,9',
        'bank' => 'digits_between:1,9');
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
        return Redirect::to('deal/'.$id)
            ->withErrors($validator) 
            ->withInput(Input::except('password')); 
    } else {
        $userdata = array(
            'client'     => Input::get('client'),
            'description' => Input::get('description'),
            'price'  => Input::get('price'),
            'cash'  => Input::get('cash'),
            'bank'  => Input::get('bank')
        );
        
        $deal = Deal::find($id);
        $deal->client = $userdata['client'];
        $deal->description = $userdata['description'];
        $deal->price = $userdata{'price'};
        $deal->cash = $userdata{'cash'};
        $deal->bank = $userdata{'bank'};
        $deal->balance = $userdata{'price'}-$userdata{'cash'}-$userdata{'bank'};
        $deal->save();
        
        return Redirect::to('/deal');
	
        
        }   
}
      

            
                }