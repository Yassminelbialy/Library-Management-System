
                        @foreach($book_specific_category as $book)
                        <div class="col-md-4">
                            <div class="card">
                                <div>
                                    <img class="card-img-top"  src="/images/{{ $book-> book_img}}" alt="Card image cap" />
                                </div>
                                <div class="card-body">
                                <div book_id="{{$book->id}}" class="rate">
                                        {{!$count_rate_of_book=App\Rate::where('book_id', '=', $book->id)->get()->count()}}

                                        @if($count_rate_of_book ==0)

                                            @for($i=1; $i<=5; $i++)

                                                 <i data-value="{{$i}}" class="far fa-star fa-2x"></i>

                                            @endfor

                                        @else

                                            {{!$sum_values_rate = App\Rate::where('book_id', '=', $book->id)->get()->avg('rate_value')}}

                                            {{!$decimal_total_rate = substr($sum_values_rate, 0, 3)}}

                                            {{!$integer_total_rate = substr($sum_values_rate, 0, 1)}}

                                            <div hidden >
                                                 {{!$is_desimal = $decimal_total_rate - $integer_total_rate}}
                                             </div>

                                                @for ($i = 1; $i <= $integer_total_rate; $i++)

                                                    <i  data-value="{{$i}}" class="fas fa-star fa-2x"></i>

                                                @endfor

                                                @if ($is_desimal >= .3 && $is_desimal <= 8)

                                                    <i   data-value="{{$i}}" class="fas fa-star-half-alt fa-2x"></i>

                                                    @for ($i =  $integer_total_rate + 2; $i <= 5; $i++)

                                                        <i  data-value="{{$i}}" class="far fa-star fa-2x"></i>
                                                    @endfor

                                                    @else

                                                        @for ($i =  $integer_total_rate + 1; $i <= 5; $i++)

                                                            <i  data-value={{$i}} class="far fa-star fa-2x"></i>

                                                        @endfor


                                                @endif

                                                <div class="rate_div"> total rated is <span class="rate_numbers"> {{ $decimal_total_rate }}</span>  from  <span class="rate_numbers" >  {{$count_rate_of_book }}</span> Users </div>


                                            @endif
                                    </div>
                                    <h5 class="card-title"> <a href="/books/{{ $book->id }}">{{ $book ->title}}</a></h5>
                                    <p class="card-text">
                                    {{ $book-> author}}
                                    </p>
                                    <p class="card-text">
                                    {{ $book-> description}}
                                    </p>
                                    <div class="mb-3">
                                        <span class="badge badge-pill badge-primary p-2 mr-4">
                                            <span class="count_of_book">{{ $book-> amount }}</span>
                                            copies available
                                        </span>
                                        <i class="fas fa-heart fa-2x"></i>
                                    </div>
                                    <a href="#" class="w-100 rounded-pill lease_btn btn btn-success">Lease</a>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        {{ $book_specific_category->links() }}



