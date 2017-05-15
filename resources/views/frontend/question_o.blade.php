@extends('layouts.frontend')

@section('content')
<!-- div class="container question_list">
    <div class="col-sm-2">
        <span id="count_question">1</span>/10
    </div>
    <div class="col-sm-8 content">
        {{$questions[0]->content}}
        <input type="hidden" name="next_question" value="{{$questions[1]->content}}" />
    </div>
    <div class="col-sm-2">
        <span id="score">0</span> pnts
    </div>
    <div class="col-sm-12 list_answer">
        <div id="list_answer">
          @for($j=0; $j<count($answer[0]); $j++)
              <button id="{{$answer[0][$j]->id}}" class="btn_answer col-sm-6" value="{{$answer[0][$j]->content}}" onclick="getClick('{{$answer[0][$j]->id}}')"><span>{{$answer[0][$j]->content}}</span></button>
          @endfor
        </div>
    </div>
</div -->
<div class="main">

  <div class="wrapper" onclick="showDropdown()">
    <span>1</span>/
    <span>5</span>
  </div>
  <ul class="dropdown">
    <li>Question <span>1</span></li>
    <li>Question <span>2</span></li>
    <li>Question <span>3</span></li>
    <li>Question <span>4</span></li>
    <li>Question <span>5</span></li>
  </ul>
  <p class="question"></p>
  <ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <button class="submit">Submit</button>
</div>
@endsection

@section('js')
<script src="{{url('js/main.js')}}"></script>
<script>
  var baseUrl = "{{url('')}}";
  var count_question = 1;
  var score=0;
  var x=0;
  var questions = <?php echo json_encode($questions);?>;
  var answers = <?php echo json_encode($answer);?>;
/* function getClick(answer){
    $.ajax({
        method : 'POST' ,
        url : baseUrl+"/selected/"+answer ,
        data:{
            name : answer,
        }
    }).done(function(msg){
        if(msg['correct'] == 1){
            $('#'+msg['id']+' span').css("background", "#00e600");
            $('.btn_answer').css("pointer-events", "none");
            score++;
            $('#score').html(score);
        }else {
            $('#'+msg['id']+' span').css("background", "red");
            $('#'+msg['true_id']+' span').css("background", "#00e600");
            $('.btn_answer').css("pointer-events", "none");
        }
        count_question++;
        x++;
        $('#count_question').html(count_question);
        $('.content').html(questions[x]["content"]);
        var button_answer = $('<div />');
        for(var a=0; a< answers[x].length; a++){
            button_answer.append(' <button id="'+answers[x][a]["id"]+'" class="btn_answer col-sm-6" value="'+answers[x][a]["content"]+'" onclick="getClick("'+answers[x][a]["content"]+'")"><span>'+answers[x][a]["content"]+'</span></button>');
        }

         $('#list_answer').html(button_answer);
    });
  }*/

</script>
@endsection
