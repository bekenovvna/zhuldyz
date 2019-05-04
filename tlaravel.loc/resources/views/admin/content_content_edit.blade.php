<div class="wrapper container-fluid">
{!! Form::open(['url' => route('contentEdit',array('content'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    	{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('name', 'Name:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Pizza name']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('product_code', 'Product_code:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('product_code', $data['product_code'], ['class' => 'form-control','placeholder'=>'Product Code']) !!}
		 </div>
    </div>

    <div class="form-group">
	     {!! Form::label('Price', 'price:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		{!! Form::text('price', $data['price'], ['class' => 'form-control','placeholder'=>'Price:']) !!}
		 </div>
    </div>
    
    
    <div class="form-group">
	     {!! Form::label('composition', 'Composition:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('composition', $data['composition'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Composition:']) !!}
		 </div>
    </div>
    
    <div class="form-group">
    	{!! Form::label('old_img', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10">
			{!! Html::image('assets/img/'.$data['img'],'',['class'=>'img-responsive','width'=>'150px']) !!}
			{!! Form::hidden('old_img', $data['img']) !!}
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
	CKEDITOR.replace( 'editor' );
</script>
</div>