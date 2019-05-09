
<div class="col-md-7 col-lg-9 order-2" style="background: white">

            <div class="row row-title">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h3 class="text-black">Danh Sách Ứng Viên</h3></div>
              </div>
            </div>
            <div class="row mb-5 filtersearch">
              @foreach($data as $d)
              <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6 mb-4" data-aos="fade-up">
                <div class=" border-unit">
                  <figure class="CV-image">
                    <a href="shop-single.html"style="margin-left: 0px">
                      <img src="{{$d->photography}}" alt="Image placeholder" class="img-unit" {{-- style="width:100%;height:auto;max-height: 148px" --}}>
                    </a>
                  </figure>
                  <div class="content-unit">
                    <h5 style="margin-bottom: 0px">
                      <a href="shop-single.html" style="color:black;font-weight: bold">{{$d->full_name}}</a>
                    </h5>
                    <div class="block-unit">
                      <p class="mb-0">{{$d->university}}</p>
                      {{-- <p class="mb-0">Ngành: Thương mại điện tử</p> --}}
                      <div>
                        {{-- <p class="mb-0 border-half-block">Năm tốt nghiệp:<span class="number-unit">2020</span>
                        </p> --}}
                        <p class="mb-0"> GPA: <span class="number-unit">{{$d->gpa}}</span></p>
                      </div>
                      <p class="mb-0 fix-text">{{$d->job_seeking}}</p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              
              {{-- </div>
                                   <div class="row link" style="width: 520px; margin-left: 225px; margin-right: -15px;">{!! $data->links() !!}</div> --}}

            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                 {{--  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul> --}}
                </div>
              </div>
            </div>
          </div>