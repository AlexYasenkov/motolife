<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Bike;

class BikeController extends Controller
{
    /**
     * brand
     */
    private $brand;

    /**
     * bike
     */
    private $bike;

    public function __construct(Brand $brand, Bike $bike)
    {
        $this->brand = $brand;
        $this->bike = $bike;
    }

    public function index($brand)
    {
        $bikeBrand = $this->brand->bySlug($brand)->first();

        $bikes = $this->bike->byBrand($bikeBrand->id)->get();

        return view('bike.index', compact('bikes', 'bikeBrand'));
    }

    public function show($brand, $model)
    {
        $moto = $this->bike->bySlug($model)->first();

        $gallery = json_decode($moto->gallery);

        return view('bike.show', compact('moto', 'gallery'));
    }

}
