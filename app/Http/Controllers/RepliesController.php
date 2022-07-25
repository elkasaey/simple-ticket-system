<?php

namespace App\Http\Controllers;

use App\Models\replies;
use App\Http\Requests\StorerepliesRequest;
use App\Http\Requests\UpdaterepliesRequest;

class RepliesController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorerepliesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerepliesRequest $request)
    {
      $reply = replies::create($request->all());
      if($reply)
          return response()->json($reply, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function show(replies $replies)
    {
      if($replies->with("ticket"))
          return response()->json($replies, 200);
      else {
          return response()->json(['message' => 'NOT FOUND'], 404);
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function edit(replies $replies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterepliesRequest  $request
     * @param  \App\Models\replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterepliesRequest $request, replies $replies)
    {
        $replies->update($request->all());
        return response()->json($replies, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function destroy(replies $replies)
    {
        $replies->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
