<div class="form-group col-sm-12">
    {!! Form::label('Nom', 'Category Name:',['class'=>'col-sm-offset-1  col-sm-2']) !!}
    <div class="col-sm-8">
        {!! Form::text('name', null, ['required' => 'required','class'=> 'form-control']) !!}
    </div>
</div>
{!! Form::submit($submitTextButton, array('class' => 'btn btn-primary submit_button pull-right')) !!}
