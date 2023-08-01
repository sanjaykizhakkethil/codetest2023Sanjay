<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $name = $request->input('name');
        $description = $request->input('description');
        $file = $request->file('image');
        $filename = $request->file('image')->getClientOriginalName();
        $filepath = 'Uploads/';
        $file->move($filepath, $filename);


        $data = array([
            'name' => $name,
            'description' => $description,
            'image' => $filename

        ]);

        $result = DB::table('blogs')->insert($data);

        if ($result) {
            return redirect()->back()->with('messages', 'Uploaded successfully');
        } else {
            return redirect()->back()->with('messages', 'Something wend wrong ');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog,$id)
    {
        $flag = 'edit';
        $blogs = Blog::get();
        $item = Blog::where('id', $id)->first();
        return view('/blog', compact('item','flag','blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $id)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $image = $request->input('image');
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $request->file('image')->getClientOriginalName();
            $filePath = 'Uploads/';
            $file->move($filePath, $filename);
            $data = [
                'name' => $name,
                'description' => $description,
                'image' => $filename,
            ];
        } else {

            $data = [
                'name' => $name,
                'description' => $description,
                
            ];
        }
        $result = DB::table('blogs')->where('id', $id)->update($data);
        if ($result) {

            return redirect('blog')->with('messages', 'Updated successfully');
        }
    }
    public function blog_details(Blog $blog,$id)
    {
        $blogs = Blog::where('id',$id)->first();
        $blog = Blog::limit(1)->orderBy('id','DESC')->get();

        return view('blog_detail',compact('blogs','blog'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, $id)
    {       

        DB::table('blogs')->where('id', $id)->delete($id);
        return redirect('/blog')->with('messages', 'Deleted successfully!');
    }
}
