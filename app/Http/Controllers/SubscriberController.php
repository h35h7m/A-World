<?php

namespace App\Http\Controllers;

use App\Models\subscriber;
use App\Http\Requests\StoresubscriberRequest;
use App\Http\Requests\UpdatesubscriberRequest;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribers=subscriber::paginate(config('pagination.count'));
        return view('admin.subscribers.index',get_defined_vars());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subscriber $subscriber)
    {
        $subscriber->delete();
        return to_route('admin.subscribers.index')->with('success',__('keywords.deleted_successfully'));
    }
}
