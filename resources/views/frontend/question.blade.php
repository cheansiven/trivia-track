@extends('layouts.frontend')

@section('content')
  <div class="container">
    @if($questions != null )
    <div id="quiz1"></div>
    @else
    <p class="error_msg">
        There are no questions in this category. We are working on it. Please come later!!!
    </p>
    @endif
</div>
@endsection
@section('js')
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='http://plugins.chynodeluxe.com/dlx-quiz/assets/js/main.min.js'></script>

    <script>
    var quizData = <?php echo json_encode($questions);?>;
    $("#quiz1").dlxQuiz({quizData});
    </script>
@endsection
