<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $profile_posts = Profile::all()->sortByDesc('update_at');
        
        if (count($profile_posts) > 0) {
            $profile_headline = $profile_posts->shift();
        } else {
            $profile_headline = null;
        }
        
        
        return view('profile.index', ['profile_headline' => $profile_headline, 'profile_posts' => $profile_posts]);
        
    }
}

