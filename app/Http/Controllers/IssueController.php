<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\IssueReply;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : Renderable
    {
        $issues = Issue::orderBy('created_at', 'desc')->get();
        return view('support.issues', compact('issues'));
    }

    public function viewIssuePage($id) : Renderable {
        $issue = Issue::findOrFail($id);
        return view('support.view-issue', compact('issue'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required'
            ]);

            Issue::create([
                'user_id' => Auth::id(),
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'status' => 'New',
                'priority' => 'Medium'
            ]);

            return redirect()->back()->with('success', 'Issue reported.');

        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->all();
            
            foreach ($errors as $error) {
                toastr()->error($error);
            }
            return redirect()->back();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteReply($id)
    {
        IssueReply::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Comment deleted');
    }
}
