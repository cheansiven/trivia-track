
<div class="form-group col-sm-12">
    {!! Form::label('Category', 'Category :',['class'=>'col-sm-offset-1  col-sm-2']) !!}
    <div class="col-sm-4">
        <select name="category_id" class="selectpicker" data-live-search="true">
            @foreach($categories as $c)
                @if($question->category_id == $c->id)
                    <option value="{{$c->id}}" selected>{{$c->name}}</option>
                @else
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
<div class="form-group col-sm-12">
    {!! Form::label('qu', 'Question :',['class'=>'col-sm-offset-1  col-sm-2']) !!}
    <div class="col-sm-8">
        {!! Form::text('question', $question->content, ['required' => 'required','class'=> 'form-control']) !!}
    </div>
</div>
<div class="form-group col-sm-12">
    {!! Form::label('ans', 'Answer :',['class'=>'col-sm-offset-1  col-sm-2']) !!}
    <div class="col-sm-8">
        <div class="list-answer">
            @for($i=0; $i<count($answer); $i++)
                <div class="col-sm-12 margin-top answer{{$i}}">
                    @if($answer[$i]->correct == 1)
                        <input type="radio" name="correct" value="{{$answer[$i]->correct}}" checked>
                    @else
                        <input type="radio" name="correct" value="{{$answer[$i]->correct}}">
                    @endif
                    <div class="col-sm-8">
                        <input required="required" class="form-control" name="answer[]" type="text" value="{{$answer[$i]->content}}">
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
{!! Form::submit($submitTextButton, array('class' => 'btn btn-primary submit_button pull-right')) !!}
