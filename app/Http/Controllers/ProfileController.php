<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function update(Request $request): RedirectResponse
    {
        // Get logged in user
        $user = Auth::user();

        // Validate data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'avatar' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:2048'
        ]);

        // Get user name and email
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }

            $user->avatar = $request->file('avatar')->store('avatars', 'public');
        }

        // Update user info

        $user->save();
        

        return redirect()->route('dashboard')->with('success', 'Profile info updated!');
    }
    

}
