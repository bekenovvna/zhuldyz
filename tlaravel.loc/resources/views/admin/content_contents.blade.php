<div style="margin: 0px 50px;">

@if($contents)
<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>№ п/п</th>
                <th>Name</th>
                <th>Product Code</th>
                <th>Composition</th>
                <th>price</th>
                <th>Время создания</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contents as $k=>$content)
                <tr>
                    <td>{{$content->id}}</td>
                    <td>{!!Html::link(route('contentEdit',['content'=>$content->id]),$content->name,['alt'=>$content->name])!!}</td>
                    <td>{{$content->product_code}}</td>
                    <td>{{$content->composition}}</td>
                    <td>{{$content->price}}</td>
                    <td>{{$content->created_at}}</td>
                    <td>
                        {!!Form::open(['url'=>route('contentEdit',['content'=>$content->id]),'class'=>'form-horizontal','method'=>'POST'])!!}
                            {{method_field('DELETE')}}
                            {!!Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit'])!!}
                        {!!Form::close()!!}
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
@endif
{!!Html::link(route('contentAdd'),"NEW Pizza")!!}
</div>