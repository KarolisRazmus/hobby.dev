<?php namespace App\Http\Controllers;

use App\Model\HBCities;
use App\Model\HBHobbies;
use App\Model\HBPeople;
use Illuminate\Routing\Controller;

class HBPeopleController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /hbpeople
	 *
	 * @return string
     */
	public function index()
	{
	    return "All people";
	}

	public function form()
	{

        $configuration['cities'] = HBCities::all()->pluck('name', 'id')->toArray();

        $configuration['hobbies'] = HBHobbies::all()->pluck('name', 'id')->toArray();

//        dd($configuration);

		return view('content.form_person', $configuration);
	}

	public function addPerson()
	{
		$data = request()->all();

		$record = HBPeople::create ([
		    'name' => $data['person'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'hb_cities_id' => $data['city'],
            ]);

        $record->connection()->sync($data['hobbies']);

        $record['cities'] = HBCities::all()->pluck('name', 'id')->toArray();
        $record['hobbies'] = HBHobbies::all()->pluck('name', 'id')->toArray();

        return view('content.form_person', $record);
	}
}