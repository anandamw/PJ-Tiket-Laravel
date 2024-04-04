<form method="POST" action="/payment/create">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Nama</label>
                <div class="form-group position-relative">
                    <select name="customer_id" class="form-select form-control ps-5 h-58"
                        aria-label="Default select example">
                        <option selected disabled class="text-dark">Pilih :</option>
                        @foreach ($dataCustomers as $item)
                            <option class="text-dark" value="{{ $item->customer_id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <i
                        class="ri-map-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Kategori Tiket</label>
                <div class="form-group position-relative">
                    @foreach ($dataTickets as $item)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ticket_id"
                                id="category{{ $item->ticket_id }}" value="{{ $item->ticket_id }}" required>
                            <label class="form-check-label" for="category{{ $item->ticket_id }}">
                                {{ $item->category }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Kode Payment </label>
                <div class="form-group position-relative">
                    <input type="number" name="payment_code" required class="form-control text-dark ps-5 h-58"
                        placeholder="Code Payment">
                    <i
                        class="ri-phone-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Harga</label>
                <div class="form-group position-relative">
                    <input type="text" name="price" required class="form-control text-dark ps-5 h-58"
                        placeholder="Your Location">
                    <i
                        class="ri-map-pin-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                </div>
            </div>
        </div>


        <div class="col-lg-12">
            <button type="submit" class="btn btn-success text-white mt-3">Simpan</button>
        </div>
    </div>


</form>
