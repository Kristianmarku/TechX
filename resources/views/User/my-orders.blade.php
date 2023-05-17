@extends('layouts.user.main')
@section('title', 'My Orders')

 <!-- Additional CSS Files -->
 <link rel="stylesheet" href="{{ asset('css/my-orders.css') }}">
 <link rel="stylesheet" href="{{ asset('css/table.css') }}">

@section('content')

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>My Orders</h3>
          <span class="breadcrumb"><a href="{{ route('home') }}">Home</a>  >  My Orders</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                {{-- 
                  
                        Add my orders here
                    --}}

                    <div class="container-abf">
                      <div class="item-abf">
                        <div class="image-abf">
                          <img src="image3.jpg" alt="err" />
                        </div>
                        <div class="text-abf">
                          <h3>Tastiere lofitex MX keys mini</h3>
                          <h4>Cmimi: 108.50$</h4>
                          <h4>Shuma:1</h4>
                        </div>
                        <div class="code-abf">
                          <h3>Kodi i produktit:</h3>
                          <h5>34532</h5>
                        </div>
                        <div class="subtotal-abf">
                          <h3>Nentotali:</h3>
                          <h5>12$</h5>
                        </div>
                      </div>
                      <div class="progresBar-abf">
                        <div class="progres-text-abf">
                          <h4>E hapur</h4>
                          <h4>E verifikuar</h4>
                          <h4>Dërgesa gati</h4>
                          <h4>E nisur</h4>
                          <h4>E realizuar</h4>
                        </div>
                        <progress value="50" max="100"></progress>
                      </div>
                    </div>

                    <style>


.container-abf {
  display: flex;
  background-color: rgb(255, 255, 255);
  box-shadow: 0 2px 6px -2px rgba(0, 0, 0, 0.151);
  padding: 3rem 0rem;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  border-radius: 6px;
  width: 100%;
  margin-bottom: 2rem
}

.progresBar-abf {
  width: 50%
}

.container-abf progress {
  width: 100%;
  height: 0.7rem;
  border-radius: 6px;
  margin: 0.5rem 0;
  background-color: #eee;
  border: none;

}

.progres-text-abf {
  display: flex;
  justify-content: space-between;
  width: 100%;
}

.progres-text-abf h4 {
  font-size: 0.8rem;
  font-weight: 500;
}
/*item*/

.item-abf {
  display: flex;
  width: 90%;
  margin: 0.5rem 0;
  padding: 0.6rem 1rem;
  box-shadow: 0 2px 6px -2px rgba(0, 0, 0, 0.678);
  margin-bottom: 45px
  border-radius: 6px;
}

/*section S*/

.image-abf {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 5rem;
  height: 5rem;
}

.image-abf img {
  width: 90%;
  height: 70%;
  object-fit: cover;
  aspect-ratio: 1/1;
}

/*section S*/

.text-abf {
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 40vw;
  gap: 4px;
  border-right: 1px solid rgba(0, 0, 0, 0.096);
}

.text-abf h3 {
  font-size: 1rem;
  font-weight: 600;
}

.text-abf h4 {
  font-size: 0.8rem;
  font-weight: 500;
}

/*section S*/

.code-abf {
  border-right: 1px solid rgba(0, 0, 0, 0.096);
}

.code-abf,
.subtotal-abf {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 4px;
  width: 14rem;
}

.code-abf h3,
.subtotal-abf h3 {
  font-size: 0.9rem;
  font-weight: 600;
}

.code-abf h5, .subtotal-abf h5 {
  font-size: 0.9rem;
  font-weight: 500;
}

/*section S*/

                    </style>

                    <div class="table-wrapper">
                        <table class="fl-table">
                            <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>100</td>
                                <td>Today</td>
                                <td>Review</td>
                            </tr>
                    
                            <tbody>
                        </table>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
@endsection