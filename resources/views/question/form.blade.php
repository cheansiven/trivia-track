
<div class="form-group col-sm-12">
    {!! Form::label('Category', 'Category :',['class'=>'col-sm-offset-1  col-sm-2']) !!}
    <div class="col-sm-4">
        <select name="category_id" class="selectpicker" data-live-search="true">
            @foreach($categories as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group col-sm-12">
    {!! Form::label('qu', 'Question :',['class'=>'col-sm-offset-1  col-sm-2']) !!}
    <div class="col-sm-8">
        {!! Form::text('question', null, ['required' => 'required','class'=> 'form-control']) !!}
    </div>
</div>
<div class="form-group col-sm-12">
    {!! Form::label('ans', 'Answer :',['class'=>'col-sm-offset-1  col-sm-2']) !!}
    <div class="col-sm-8">
        <div class="list-answer">
            
        </div>
        <a href="#" id="add_answer">Add Answer</a>
    </div>
</div>
{!! Form::submit($submitTextButton, array('class' => 'btn btn-primary submit_button pull-right')) !!}
