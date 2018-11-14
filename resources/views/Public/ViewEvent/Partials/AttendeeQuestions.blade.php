@foreach($ticket->questions as $question)
    @if ($question['is_enabled'] === '1')

    <div class="col-md-12">
        <div class="form-group survey_question">
            {!! Form::label("ticket_holder_questions[{$ticket->id}][{$i}][$question->id]", $question->title, ['class' => $question->is_required ? 'required' : '']) !!}

            @if($question->question_type_id == config('attendize.question_textbox_single'))
                {!! Form::text("ticket_holder_questions[{$ticket->id}][{$i}][$question->id]", null, [$question->is_required ? 'required' : '' => $question->is_required ? 'required' : '', 'class' => "ticket_holder_questions.{$ticket->id}.{$i}.{$question->id}   form-control"]) !!}
            @elseif($question->question_type_id == config('attendize.question_textbox_multi'))
                {!! Form::textarea("ticket_holder_questions[{$ticket->id}][{$i}][$question->id]", null, ['rows'=>5, $question->is_required ? 'required' : '' => $question->is_required ? 'required' : '', 'class' => "ticket_holder_questions.{$ticket->id}.{$i}.{$question->id}  form-control"]) !!}
            @elseif($question->question_type_id == config('attendize.question_dropdown_single'))
                {!! Form::select("ticket_holder_questions[{$ticket->id}][{$i}][$question->id]", array_merge(['' => '-- Please Select --'], $question->options->lists('name', 'name')->toArray()), null, [$question->is_required ? 'required' : '' => $question->is_required ? 'required' : '', 'class' => "ticket_holder_questions.{$ticket->id}.{$i}.{$question->id}   form-control"]) !!}
            @elseif($question->question_type_id == config('attendize.question_dropdown_multi'))
                {!! Form::select("ticket_holder_questions[{$ticket->id}][{$i}][$question->id][]",$question->options->lists('name', 'name'), null, [$question->is_required ? 'required' : '' => $question->is_required ? 'required' : '', 'multiple' => 'multiple','class' => "ticket_holder_questions.{$ticket->id}.{$i}.{$question->id}   form-control"]) !!}
            @elseif($question->question_type_id == config('attendize.question_checkbox_multi'))
                <br>
                @foreach($question->options as $option)
                    <?php
                        $checkbox_id = md5($ticket->id.$i.$question->id.$option->name);
                    ?>
                    <div class="custom-checkbox">
                        {!! Form::checkbox("ticket_holder_questions[{$ticket->id}][{$i}][$question->id][]",$option->name, false,['class' => "ticket_holder_questions.{$ticket->id}.{$i}.{$question->id}  ", 'id' => $checkbox_id]) !!}
                        <label for="{{ $checkbox_id }}">{{$option->name}}</label>
                    </div>
                @endforeach

                <p id="errormssg2" style="color: red;"></p>

            @elseif($question->question_type_id == config('attendize.question_radio_single'))
                <br>
                @foreach($question->options as $option)
                    <?php
                    $radio_id = md5($ticket->id.$i.$question->id.$option->name);
                    ?>
                <div class="custom-radio">
                    {!! Form::radio("ticket_holder_questions[{$ticket->id}][{$i}][$question->id]",$option->name, false, ['id' => $radio_id, 'class' => "ticket_holder_questions.{$ticket->id}.{$i}.{$question->id}  "]) !!}
                    <label for="{{ $radio_id }}">{{$option->name}}</label>
                </div>
                @endforeach

                <p id="errormssg" style="color: red;"></p>
            @endif

        </div>
    </div>
            
    @endif
@endforeach

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript">
    function numberOfCheckboxesSelected() {
        return document.querySelectorAll('input:checked').length;
    }

    function onChange() {
        document.getElementById('paystacksubmit').disabled = numberOfCheckboxesSelected() < 1;
    }
    document.getElementById('enablee').addEventListener('change', onChange, false);
</script>