<form method="POST" action="/tiket/create">
    @csrf
    <div class="row">


        {{-- <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Kode Ticket </label>
                <div class="form-group position-relative">
                    <input type="number" name="ticket_code" required class="form-control text-dark ps-5 h-58"
                        placeholder="Kode Tiket ">
                    <i
                        class="ri-phone-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Kategori Tiket</label>
                <div class="form-group position-relative">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ticket_id" id="category" value="vip"
                            required>
                        <label class="form-check-label" for="category">
                            VIP
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ticket_id" id="category" value="economy"
                            required>
                        <label class="form-check-label" for="category">
                            EKONOMI
                        </label>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12">
            <button type="submit" class="btn btn-success text-white mt-3">Simpan</button>
        </div>
    </div>


</form>
