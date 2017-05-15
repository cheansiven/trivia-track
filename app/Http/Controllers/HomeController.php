<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\category;
use App\question;
use App\answer;

class HomeController extends Controller
{
    public function index() {
        $categories = category::all();
        return view('frontend.home')->with('categories', $categories);
    }
    public function dotest($name) {
        $categories = category::all();
        $questions = question::select('question.*')->join('category', 'question.category_id','=', 'category.id')
                    ->where('category.name', '=', $name)->orderBy(\DB::raw('RAND()'))->take(10)->get();
        if(count($questions) >0){
          for($i=0; $i<count($questions); $i++){
              $answer[] = answer::where('question_id', '=', $questions[$i]->id)->get();
              $all["questions"][$i]["q"] =  $questions[$i]->content;
              for($j=0; $j<count($answer[$i]); $j++){
                  if($answer[$i][$j]->correct == 1){
                      $all["questions"][$i]["a"] =  $answer[$i][$j]->content;
                  }else {
                      $all["questions"][$i]["options"][] =  $answer[$i][$j]->content;
                  }
              }
          }
        }else {
            $all = null;
        }

       return view('frontend.question')->with('questions', $all)->with('categories', $categories);
    }
    public function getCorrect(Request $request, $answer) {
        $answer = $request->name;
        $next = $request->next;
        $get_answer= answer::where('id', '=', $answer)->first();
        if($get_answer->correct == 0){
            $true = answer::where([
                          ['question_id', '=', $get_answer->question_id],
                          ['correct', '=', 1]
                    ])->first();
            $true_id = $true->id;
        }else {
            $true_id = 0;
        }
      //  $new_question = question::where('content', '=', $next)->first();
      //  $new_answer = answer::where('question_id', '=', $new_question->id)->get();
        return response()->json(['correct' => $get_answer->correct, 'id' => $get_answer->id, 'true_id' => $true_id] , 200);

    }
}
