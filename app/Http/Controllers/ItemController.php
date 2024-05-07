<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Video;
use App\Models\Category;
use Auth;

class ItemController extends Controller
{
    public function profile(){
        return view('users.profile');
    }


    public function getLogin(){
        return view('users.getLogin');
    }


    public function login(Request $request){
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('items.index');
        }
        return view('users.getLogin');
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('items.index');
    }


    public function index(){
        $images = Image::all();
        $videos = Video::all();
        return view('items.index', ['images' => $images, 'videos' => $videos]);
    }


    public function create(){
        $categories = Category::all();
        return view('items.create', compact('categories'));
    }


    public function imageStore(Request $request){
        $image = new Image();
        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('', $file_name);
        $image->path = 'storage/' . $file_name;
        $image->category_id = $request->category_id;

        $image->save();
        return redirect()->route('images.show', $image);
    }


    public function imageShow(Image $image){
        return view('images.show', compact('image'));
    }


    public function edit(Image $image){
        return view('images.edit', compact('image'));
    }


    public function update(Request $request, Image $image){
        $image->description = $request->input('description');
        $image->caption = $request->input('caption');
        $image->detail = $request->input('detail');
        $image->update();
        return redirect()->route('images.show', $image);
    }


    public function videoStore(Request $request){
        $video = new Video();
        $file_name = $request->file('video')->getClientOriginalName();
        $request->file('video')->storeAs('', $file_name);
        $video->path = $file_name;

        $video->save();
        return redirect()->route('videos.show', $video);
    }


    public function videoShow(Video $video){
        return view('video.show', compact('video'));
    }
}
