<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

use App\Http\Requests;

class FeedbackController extends Controller
{
    /**
     * FeedbackController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $content = Feedback::orderBy('id', 'desc')->paginate(20);
        return view('adminView.feedback', array('content' => $content));

    }
    public function store(Request $request)
    {
        $this->check($request);
        Feedback::create($request->all());
        return redirect('/');
    }
    public function delete(Request $request){

        if($request->checkbox) {
            foreach ($request->checkbox as $item) {
                Feedback::destroy($item);
            }
        }
        return redirect('/feedback');
    }
    protected function check(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'max:255',
        ));
    }
}
