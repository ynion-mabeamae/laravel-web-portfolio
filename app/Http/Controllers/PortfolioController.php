<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Message;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $organizations = Organization::all();
        $experience = Experience::all();
        $skills = Skill::all();
        $projects = Project::all();

        return view('main', compact('profile', 'organizations', 'experience', 'skills', 'projects'));
    }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Message::create($request->all());

        return back()->with('status', 'Message sent successfully!');
    }
}
