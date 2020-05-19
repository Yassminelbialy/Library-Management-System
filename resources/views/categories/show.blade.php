
                        @foreach($book_specific_category as $book)
                        <div class="col-md-4">
                            <div class="card">
                                <div>
                                    <img class="card-img-top"  src="/images/{{ $book-> book_img}}" alt="Card image cap" />
                                </div>
                                <div class="card-body">
                                    <div book_id="{{$book->id}}" class="rate">
                                        <i data-value="1" class="far fa-star fa-2x"></i>
                                        <i data-value="2" class="far fa-star fa-2x"></i>
                                        <i data-value="3" class="far fa-star fa-2x"></i>
                                        <i data-value="4" class="far fa-star fa-2x"></i>
                                        <i data-value="5" class="far fa-star fa-2x"></i>
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



