<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Advertisement</h2>

            </div>
          </div>

          @foreach($data as $ad)

          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img hight="300px" width="150px" src="/adimage/{{$ad->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4 style="font-size:">{{$ad->field}}</h4></a>
                <h6>Nu:{{$ad->price}}</h6>
                <p>{{$ad->description}}</p>


              </div>
            </div>
          </div>
          @endforeach

          <div class="d-flex justify-content-center">{!! $data->links() !!}</div>

        </div>
      </div>
    </div>
