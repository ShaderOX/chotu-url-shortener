<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\UrlMapping;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterURL extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.register-url');
    }

    public function store()
    {

        $this->validate(request(), [
            'maps_to' => 'required|url',
            'suffix' => 'required|unique:url_mappings',
        ]);

        request()->user()->urls()->create(array_merge(
            request()->only('maps_to', 'suffix'),
            ['expires_at' => Carbon::now()->addDays(14)]
        ));

        return redirect()->route('my-urls')->with('status', 'URL registered successfully.');
    }

    // Delete URL
    public function delete($id)
    {
        $url = UrlMapping::find($id);

        if ($url && $url->user_id == request()->user()->id) {
            $url->delete();
        }

        return redirect()->route('my-urls')->with('status', 'URL deleted successfully.');
    }

    // Query if a URL is available
    public function query($suffix)
    {

        $suffix = UrlMapping::where('suffix', $suffix)->first();
        if ($suffix) {
            return json_encode([
                'isAvailable' => false
            ]);
        } else {
            return json_encode([
                'isAvailable' => true
            ]);
        }
    }
}
