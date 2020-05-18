@extends('layouts.app')

@section('content')
    <!-- Sound Started -->
    <audio class="bell" src="bell.mp3"></audio>
    <!-- PopUp Started -->

    <form class="lease_form h-50 col-sm-3 text-center">
      <span class="close_form">X</span>
      <div class="form-group mt-3">
        <span class="info">Book Price : </span><span>50$</span>
      </div>
      <div class="form-group">
        <input
          type="number"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          placeholder="Number of Days"
          value=""
          min="1"
        />
      </div>

      <div class="form-group">
        <span class="info">Total Price : </span><span>100$</span>
      </div>

      <button type="submit" class="btn btn-primary">Done</button>
    </form>

    <div class="popup"></div>
        <div class="col-md-9 col-sm-12">

        
              
        @for ($i = 0; $i <count($userbooks); $i++)

            <div class="container-fluid column">
              <div class="row flex-row flex-nowrap">
                <div class="col-md-4">
                  <div class="card card-block">
                    <div>
                      <img
                        class="card-img-top"
                        alt="Card image cap"
                      />
                    </div>
<p>{{$userbooks[$i]}}</p>
                      <h4 class="card-title">{{ $userbooks[$i]->title}} </h4>
                      <p class="card-text">
                        {{ $i->description}}
                      </p>
                  </div>
                </div>
                 @endfor
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection      
