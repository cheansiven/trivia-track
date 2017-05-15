<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question;
use App\answer;
use App\Category;

class QuestionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = question::orderBy('created_at', 'desc')->get();
        return view('question.index')->with('questions', $questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('question.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
          'question' => 'required'
        ]);
        $question = question::create([
                      'content' => $request->question,
                      'category_id' => (int)$request->category_id
                  ]);
        $qId = $question->id;
        $answers = $request->answer;
        $correct = 0;
        for ($i=0; $i<count($answers); $i++){
            if($i == (int)$request->correct){
                $correct=1;
            }else {
                $correct=0;
            }
            answer::create([
                'content' => $answers[$i],
                'correct' => $correct,
                'question_id' => $qId
            ]);
        }
        \Session::flash('message', 'Question has been created.');
        return redirect('question');
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
        $question = question::findOrFail($id);
        $categories = category::all();
        $answer = answer::where('question_id', '=', $id)->get();
        return view('question.edit',  compact('question'))->with('categories', $categories)->with('answer', $answer);
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
