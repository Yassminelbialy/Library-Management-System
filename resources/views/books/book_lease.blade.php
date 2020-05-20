@extends('layouts.app')


@section('content')

    <!-- Sound Started -->
    <audio class="bell" src="bell.mp3"></audio>
    <!-- PopUp Started -->    
  
 
    <div class="lease_form h-80 col-sm-3 text-center ">
     
    {!! Form::open(array('route' => array('borrow.store', 'book_id'=>$mybook->id))) !!}
      <span class="close_form">X</span>
      
      <div class="form-group mt-3">
      {!! Form::text( 'book_id',$mybook->title,['value'=> $mybook->id ,'class'=>'text-center form-control  mt-1','disabled']);!!}

      </div>
      <div >
        <span class="">Price: </span>
        {!! Form::label( $mybook->price,null,['class'=>'price']);!!}
      </div>

      <div class="form-group">

      {!! Form::selectRange('number', 1, 5,null,['class'=>'form-control','id'=>'daysno','name'=>'days','placeholder'=>'Number of Days']);!!}
     
      </div>

      <div class="form-group">
        <span class="info">Total Price : </span><span class="total" >0$</span>
      </div>

      <button type="submit" class="btn btn-primary">Done</button>
     
   
    {!! Form::close() !!}
    </div>
    <div class="popup"></div> 
    @endsection

 
@section('formscript')
  <script>

    $(".lease_form").css({
        top: "20%",
        transform:
            "rotateY(360deg) rotateY(360deg) rotateY(360deg) rotateY(360deg) rotateY(360deg) rotateY(360deg) rotateY(360deg)",
        transition: "all 1s",
    });
    $(".popup").show();

    $("#daysno").change(function()
    {
        console.log("hi")
       $(".total")[0].innerHTML=$("#daysno")[0].value*$(".price")[0].innerHTML
    });
    </script>


 @endsection