<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            'heading'=>'Latest Listings',
            'listings'=> Listing::latest()->get()
        ]);
    }
    // Show single Listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing'=> $listing
        ]);
    }
}
