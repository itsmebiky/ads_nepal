
@extends('layouts.app')
@section('content')

<div class="wrapper">
       

	<!-- Page Content  -->
	<div id="content">
		
		<br><br><br><br><br><br><br>
        
            {!! Form::open(['action'=>'PostsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                    <div class="row">
                        <div class="form-group col-md-6">
                            {{Form::label('title','Title of Ads')}}
                            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Advertisement Title'])}}
                        </div>
                        <div class="form-group col-md-6">
                                {{Form::label('company','Company Name')}}
                                {{Form::text('company','',['class'=>'form-control','placeholder'=>'Company Name'])}}
                        </div>
                    </div>
            <div class="row">
                <div class="form-group col-md-6">
                        {{Form::label('deadline','Deadline')}}
                        {{Form::Date('deadline','',['class'=>'form-control','placeholder'=>'Deadline'])}}
                </div>
                <div class="form-group col-md-6">
                        {{Form::label('address','Company Address')}}
                        {{Form::text('address','',['class'=>'form-control','placeholder'=>'Company Address'])}}
                </div>
            </div>
                            <div class="row">
                                    <div class="form-group col-md-6">
                                            {{Form::label('phone1','Company Phone')}}
                                            {{Form::text('phone1','',['class'=>'form-control','placeholder'=>'Company Phone'])}}
                                    </div>
                                    <div class="form-group col-md-6">
                                            {{Form::label('phone2','Company Mobile')}}
                                            {{Form::text('phone2','',['class'=>'form-control','placeholder'=>'Company Mobile'])}}
                                    </div>
                            </div>
                
            <div class="row">
                <div class="form-group col-md-6">
                        {{Form::label('email','Company Email')}}
                        {{Form::email('email','',['class'=>'form-control','placeholder'=>'Email Address'])}}
                </div>
                {{-- <div class="form-group col-md-6">   
                        {!! Form::label('categories','Category') !!}
                        {!! Form::select('categories',array('' =>'Choose Category')+ $categories,$categories,['class'=>'form-control']) !!}
                       
                </div> --}}
                <div class="form-group col-md-6">   
                        {!! Form::label('categories','Category') !!}
                        {!! Form::select('categories',array('' =>'Choose Category')+ $categories,null,['class'=>'form-control']) !!}
                       
                </div>
                


            </div>
            <div class="row">
                        <div class="form-group col-md-6">   
                                        {!! Form::label('adscategories','AdsCategory') !!}
                                        {!! Form::select('adscategories',array('' =>'Choose AdsCategory')+ $adscategories,null,['class'=>'form-control']) !!}
                                       
                        </div>
            </div>
            {{-- <div class="row">
                    <div class="col-md-6">
                                {!! Form::label('adscategories','AdsCategory') !!}
                                {!! Form::select('adscategories',array('' =>'Choose Ads-Category')+ $adscategories,null,['class'=>'form-control']) !!}         
                                
                    </div>
                    <div class="col-md-6"></div>
            </div> --}}
                <div class="form-group">
                    {{Form::label('description','Description')}}
                    {{Form::textarea('description','',['class'=>'form-control ckeditor','placeholder'=>'Advertisement description'])}}
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                            {{Form::file('ads_image')}}
                    </div>
                </div>
            
            <div class="row"><div class="col-md-12">{{Form::submit('Submit',['class'=>'btn btn-primary'])}}</div></div>
            {!! Form::close() !!}
	</div>
</div>

		

    @endsection
   