<?php

class mainController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    private  $rules = array(
        'name'    => 'required', 						// just a normal required validation
        'email'   => 'required|email', 	// required and must be unique in the ducks table
        'twitter' => 'required',
        'facebook'=> 'required', 			// required and has to match the password field
        'no_telp' => 'required', 			// required and has to match the password field
        'address' => 'required', 			// required and has to match the password field
    );

	public function index()
	{
        $phones = Phonebook::all();
        return View::make('pages.main',array("phones"=>$phones));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function add()
	{
        return View::make('pages.addphonebook');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function save()
	{

        $data = Input::all();
        $validator = Validator::make($data, $this->rules);

        // check if the validator failed -----------------------
        if ($validator->fails()) {
            return Redirect::to("/phonebook/add")->withErrors($validator)->withInput($data);
        }

        if(Phonebook::create($data)){
            Session::flash('message', "New Phonebook Saved");
            return Redirect::to("/phonebook/add");
        }else{
            Session::flash('error', "Fail Save New Phonebook");
            return Redirect::to("/phonebook/add")->withInput($data);
        }

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$phones = Phonebook::find($id);
        return View::make('pages.editphonebook',array("phones"=>$phones));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
        $data = Input::all();
        $validator = Validator::make($data, $this->rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput($data);
        }

        $phone = Phonebook::find($data['id']);
        $phone->name = $data['name'];
        $phone->address = $data['address'];
        $phone->no_telp = $data['no_telp'];
        $phone->gender = $data['gender'];
        $phone->twitter = $data['twitter'];
        $phone->facebook = $data['facebook'];
        $phone->email = $data['email'];
        $phone->save();
         Session::flash('message', "Update Phonebook Saved");
         return Redirect::to("/phonebook/add");
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
        $phone = Phonebook::find($id);
        $phone->delete();
        return Redirect::to("/");
	}


}
