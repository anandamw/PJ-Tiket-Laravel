<form method="POST" action="/customer/create">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Nama </label>
                <div class="form-group position-relative">
                    <input type="text" name="name" required class="form-control text-dark ps-5 h-58"
                        placeholder="Enter Name">
                    <i
                        class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Nomer Whatsapp </label>
                <div class="form-group position-relative">
                    <input type="number" name="whatsapp_number" required class="form-control text-dark ps-5 h-58"
                        placeholder="Enter Phone Number">
                    <i
                        class="ri-phone-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Alamat</label>
                <div class="form-group position-relative">
                    <input type="text" name="address" required class="form-control text-dark ps-5 h-58"
                        placeholder="Your Location">
                    <i
                        class="ri-map-pin-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                </div>
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

        <div class="col-lg-12">
            <button type="submit" class="btn btn-success text-white mt-3">Simpan</button>
        </div>
    </div>


</form>
