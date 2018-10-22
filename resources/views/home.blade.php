@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('toast::messages-jquery')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact Form</div>

                <form id="contactform" method="POST" action="{{route('message.send')}}">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" name="name" data-validation="required"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="text" class="form-control" name="email" data-validation="email"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Subject</label>
                            <input type="text" class="form-control" name="subject" data-validation="required"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Message</label>
                            <textarea type="text" class="form-control" name="message" data-validation="required"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.validate({form:'#contactform'});
    });
   
</script>
@endsection