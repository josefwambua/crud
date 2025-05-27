<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

class HomeController extends Controller
{
    public function index()
    {
        // Rendering on the blade view
        $post = Post::all();
        //compacting
        return view('home.index', compact('post'));
    }

    public function upload(Request $request)
    {
        // Validate request inputs
        $request->validate([
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048'
        ]);

        // Ensure user is authenticated
        if (!Auth::check()) {
            return redirect()->back()->withErrors(['error' => 'User not authenticated']);
        }

        $data = new Post;

        // Assign username safely
        $data->username = Auth::user()->name;

        // Assign description
        $data->description = $request->description;

        // Check if an image is uploaded before processing
        if ($request->hasFile('image')) {
            $image = $request->file('image'); // Use `file()` method for clarity
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('post'), $imagename);// image storage path
            $data->image = $imagename; // Storing the image
        }

        $data->save();
        return redirect()->back()->with('success', 'Post uploaded successfully!');
        
    }
    public function view_winner(){

        $name=Auth::user()->name;
          $post = Post::all();
        $winner = Post::WHERE('username','===',$name);

        // sending winner into winners_page
        return view("winners_page",compact('post'));
    }
    public function delete_post($id){

        $data=post::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function update_post($id){
        $data=post::find($id);
        return view('update_post', compact('data'));
    }
    public function confirm_update(Request $request, $id){
        $data=post::find($id);
        $data->description=$request->description;

         if ($request->hasFile('image')) {
            $image = $request->file('image'); // Use `file()` method for clarity
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('post'), $imagename);// image storage path
            $data->image = $imagename; // Storing the image
        }
        $data->save();
        return redirect()->back();

    }
}