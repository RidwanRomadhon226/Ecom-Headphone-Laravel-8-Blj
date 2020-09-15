<div class="container">
  <div class="row mb-2">
    <dic class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">List Product</li>
        </ol>
      </nav>
    </dic>
  </div>

  <div class="row">
    <div class="col-md-9">
      <h2>List <strong>Headpone</strong></h2>
    </div>
    <div class="col-md-3">
      <div class="input-group mb-3">
        <input wire:model="search" type="text" class="form-control" placeholder="Search"  aria-describedby="basic-addon1">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">@</span>
          </div>
      </div>
    </div>
  </div>



    {{-- Pilih Products --}}

    <section class="products mb-5" >
      <div class="row mt-4">
        @foreach ($products as $product)
        <div class="col-md-3 mb-3">
          <div class="card">
            <div class="card-body text-center">
              <img class="img-fluid" src=" {{ url('assets/jersey') }}/{{ $product->gambar }} " />
              <div class="row mt-2">
                <div class="col-md-12">
                  <h5><strong>{{ $product->nama }}</strong></h5>
                  <h5>Rp. {{ number_format($product->harga) }}</h5>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-12">
                  <a class="btn btn-dark " href="#">Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
       
      </div>
    </section>
    <div class="row">
      <div class="col">
        {{ $products->links() }}
      </div>
    </div>
    {{-- Pilih Products selesai --}}

</div>
