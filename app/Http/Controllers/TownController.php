<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Town;

class TownController extends Controller
{
    /**
     * town
     */
    private $town;

    public function __construct(Town $town)
    {
        $this->town = $town;
    }

    public function show($name)
    {
        $town = $this->town->byTown($name)->first();

        $gallery = json_decode($town->gallery);

        return view('town.show', compact('town', 'gallery'));
    }

}
