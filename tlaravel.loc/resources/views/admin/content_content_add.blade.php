<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('contentAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		
		{!! Form::label('name','Name',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('name',old('name'),['class' => 'form-control','placeholder'=>'Введите название пиццы'])!!}
		</div>
	
	</div>

	
	<div class="form-group">
	     {!! Form::label('product_code', 'Product_code:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('product_code', old('product_code'), ['class' => 'form-control','placeholder'=>'Product code:']) !!}
		 </div>
    </div>
   

    <div class="form-group">
	     {!! Form::label('price', 'price:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('price', old('price'), ['class' => 'form-control','placeholder'=>'Price']) !!}
		 </div>
    </div>

    


    <div class="form-group">
	     {!! Form::label('composition', 'Composition:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('composition', old('composition'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Composition:']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('img', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('img', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
		 </div>
    </div>
    
    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
	    </div>
	  </div>
	
	
	
	{!! Form::close() !!}
	
	<script>
		CKEDITOR.replace('editor');
	</script>
	
</div>
