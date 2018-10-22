@extends('layouts.app')
@section('styles')	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.semanticui.min.css"/>
	<style type="text/css">
		.dataTables_filter {
		   width: 50%;
		   float: right;
		   text-align: right;
		}
		.dataTables_length {
			display: inline;
		}
		.dataTables_paginate {
			float: right;
			margin-top:-30px;
		}
	</style>
@endsection
@section('content')
	<div class="container">
		<div class="row">
			<table class="table table-striped table-bordered" style="width:1000px;" id="message_table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Message</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#message_table').DataTable({ 
        	dom: '<"top"lf>rt<"bottom"ip>',                
            processing:true,
            serverSide: true,    
            ajax: "{!! route('message.get') !!}",      
            info:true,
            responsive: true,             
            columns: [              
                { data: "id", name: "id"}  ,
                { data: "name", name: "name"},
                { data: "email", name: "email"},
                { data: "subject", name:"subject"},
                { data: "message", name:"message"}               
             ]
        });  
    });
   
</script>
@endsection