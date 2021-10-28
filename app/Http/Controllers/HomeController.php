<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Brand;
use App\Review;

class HomeController extends Controller
{
    /**
     * contact
     */
    private $contact;

    /**
     * brand
     */
    private $brand;

    public function __construct(Contact $contact, Brand $brand)
    {
        $this->contact = $contact;
        $this->brand = $brand;
    }

    public function index()
    {
        $brands = $this->brand->all();
        $gallery = $brands->pluck('gallery');

        $res = $gallery->map(function ($item) {
            return json_decode($item);
        });
        $gallery = $res->toArray();

        $result = [];
        array_walk($gallery, function ($item, $key) use (&$result) {
            $result[] = implode(',', $item);
        });

        $gallery = implode(',', $result);
        $gallery = explode(',', $gallery);

        return view('home.index', compact('brands', 'gallery'));
    }


    public function contact()
    {
        $contacts = $this->contact->all();

        return view('home.contact', compact('contacts'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:reviews',
            'comment' => 'required'
        ]);

        $data = $request->all();
        $review = new Review();
        $review->fill($data);
        //save
        $review->save();

        $message = 'Спасибо за Ваш отзыв.';

        return redirect('/')->with('reviewSuccess', $message);
    }

}
