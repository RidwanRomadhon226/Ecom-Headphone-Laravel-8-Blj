<div class="container">
    {{-- The best athlete wants his opponent at his best. --}}
    {{-- <h1>Test</h1> --}}

    {{-- Content Banner --}}
    <div class="banner">
      <img src="{{ url('assets/slider/slider1.png') }}" alt="Banner"/>
    </div>
    {{-- Content Banner Selesai --}}


    {{-- Pilih Merk --}}

    <section class="pilih-merk mt-4" >
      <h3><strong>Pilih Merk</strong></h3>
      <div class="row mt-4">
        @foreach ($merks as $merk)
        <div class="col">
          <div class="card shadow">
            <div class="card-body text-center">
              <img class="img-fluid" src=" {{ url('assets/liga') }}/{{ $merk->gambar }} " />
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>

    {{-- Pilih Merk selesai --}}


    {{-- Pilih Products --}}

    <section class="products mt-5 mb-5" >
      <h3><strong>Pilih Bast Products</strong></h3>
      <div class="row mt-4">
        @foreach ($products as $product)
        <div class="col-md-3">
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

    {{-- Pilih Products selesai --}}

</div>
