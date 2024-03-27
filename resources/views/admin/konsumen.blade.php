@extends('admin.layouts.appAdmin')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <h4 class="fs-18 ">Tabel Konsumen</h4>

                        <button type="button" class="btn btn-primary text-white" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"> + Tambah Data</button>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                            aria-labelledby="preview-tab" tabindex="0">
                            <div class="default-table-area members-list">
                                <div class="table-responsive">
                                    <table class="text-center table align-middle" id="myTable">
                                        <thead>
                                            <tr class="">
                                                <th scope="col">No</th>
                                                <th scope="col">
                                                    Barcode
                                                </th>
                                                <th scope="col">
                                                    Nomer Rekening
                                                </th>
                                                <th scope="col">
                                                    Pembayaran
                                                </th>
                                                <th scope="col">
                                                    Nama
                                                </th>
                                                <th scope="col">
                                                    No Telepon
                                                </th>
                                                <th scope="col">
                                                    Waktu Pembelian
                                                </th>
                                                <th scope="col">
                                                    Alamat
                                                </th>
                                                <th scope="col">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div
                                                        class="d-flex justify-content-center text-center align-items-center flex-column ">
                                                        <div class="flex-shrink-0  ">
                                                            <img src="{{ asset('') }}assets/images/fake_barcode.png"
                                                                class=" w-75" alt="user" />
                                                        </div>
                                                        <div class=" mt-3">Code :
                                                            <h4 class="fw-semibold fs-16 mb-0">
                                                                bsd35h38h92
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </td>


                                                <td>
                                                    <span>082049534535</span>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="btn btn-success text-white ">
                                                            50K |
                                                            EKONOMI</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>Ananda Maulana W</span>
                                                </td>
                                                <td>
                                                    <span>081234567891011</span>
                                                </td>
                                                <td>
                                                    <span>2024-maret-21</span>
                                                </td>
                                                <td>
                                                    <span>Bangkalan</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown action-opt">
                                                        <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i data-feather="more-horizontal"></i>
                                                        </button>
                                                        <ul
                                                            class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:;">
                                                                    <i data-feather="share-2"></i>
                                                                    Share
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:;">
                                                                    <i data-feather="link-2"></i>
                                                                    Get
                                                                    Sharable
                                                                    Link
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:;">
                                                                    <i data-feather="edit-3"></i>
                                                                    Rename
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:;">
                                                                    <i data-feather="download"></i>
                                                                    Download
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:;">
                                                                    <i data-feather="trash-2"></i>
                                                                    Remove
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel"
        style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
        <div class="offcanvas-header bg-body-bg py-3 px-4 mb-4">
            <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">
                Form Tambah Konsumen
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">

            @include('admin.tambahKonsumen')

        </div>
    </div>
@endsection
