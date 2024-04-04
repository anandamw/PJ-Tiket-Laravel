@extends('admin.layouts.appAdmin')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <h4 class="fs-18 ">Tabel Payment</h4>

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
                                                    Nama
                                                </th>
                                                <th scope="col">
                                                    Kategori Tiket
                                                </th>
                                                <th scope="col">
                                                    Payment Code
                                                </th>
                                                <th scope="col">
                                                    Harga
                                                </th>
                                                <th scope="col">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($dataJoin as $itemData)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <span>{{ $itemData->name }}</span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $itemData->category }}</span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $itemData->payment_code }}</span>
                                                    </td>
                                                    <td>
                                                        <span>Rp. {{ $itemData->price }}</span>
                                                    </td>


                                                    <td>
                                                        <div class="dropdown action-opt">
                                                            <button class="btn bg p-0" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <ul
                                                                class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                                <li>
                                                                    <div class="dropdown-item" data-bs-toggle="offcanvas"
                                                                        data-bs-target="#offcanvasScrollingUpdate{{ $itemData->payment_id }}"
                                                                        aria-controls="offcanvasScrollingUpdate">
                                                                        <i data-feather="edit-3"></i>
                                                                        Edit
                                                                    </div>
                                                                </li>

                                                                <li>
                                                                    <div class="dropdown-item" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModal4{{ $itemData->payment_id }}">
                                                                        <i data-feather="trash-2"></i>
                                                                        Hapus
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                                {{-- modal --}}
                                                <div class="modal fade" id="exampleModal4{{ $itemData->payment_id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Hapus Data
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apa anda Yakin akan menghapus data dendan nama
                                                                {{ $itemData->name }}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger text-white"
                                                                    data-bs-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <a href="/payment/delete/{{ $itemData->payment_id }}"
                                                                    type="button" class="btn btn-primary text-white">
                                                                    Hapus Data
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @include('admin.payment.update')
                                            @endforeach
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
                Form Tambah Payment
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">

            @include('admin.payment.create')

        </div>
    </div>
@endsection
