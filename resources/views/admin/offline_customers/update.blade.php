<div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
    id="offcanvasScrollingUpdate{{ $item->customer_id }}" aria-labelledby="offcanvasScrollingLabel"
    style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
    <div class="offcanvas-header bg-body-bg py-3 px-4 mb-4">
        <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">
            Form Tambah Konsumen
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-4">

        <form method="POST" action="/customer/update/{{ $item->customer_id }}">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <label class="label">Nama </label>
                        <div class="form-group position-relative">
                            <input type="text" name="name" value="{{ $item->name }}" required
                                class="form-control text-dark ps-5 h-58" placeholder="Enter Name">
                            <i
                                class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <label class="label">Jumlah Ticket </label>
                        <div class="form-group position-relative">
                            <input type="number" name="jumlah_tiket" value="{{ $item->jumlah_tiket }}" required
                                class="form-control text-dark ps-5 h-58" placeholder="Enter Name">
                            <i
                                class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <label class="label">Nomer Whatsapp </label>
                        <div class="form-group position-relative">
                            <input type="number" name="whatsapp_number" value="{{ $item->whatsapp_number }}" required
                                class="form-control text-dark ps-5 h-58" placeholder="Enter Phone Number">
                            <i
                                class="ri-phone-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <label class="label">Alamat</label>
                        <div class="form-group position-relative">
                            <input type="text" name="address" value="{{ $item->address }}" required
                                class="form-control text-dark ps-5 h-58" placeholder="Your Location">
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

    </div>
</div>

{{-- <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Country</label>
                <div class="form-group position-relative">
                    <select class="form-select form-control ps-5 h-58" aria-label="Default select example">
                        <option selected class="text-dark">United Kingdom</option>
                        <option value="1" class="text-dark">United States</option>
                        <option value="2" class="text-dark">Canada</option>
                        <option value="3" class="text-dark">France</option>
                    </select>
                    <i
                        class="ri-map-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                </div>
            </div>
        </div> --}}
