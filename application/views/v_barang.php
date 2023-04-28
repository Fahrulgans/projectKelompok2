<!--menambahkan page Product -->
<!-- Default box -->
<div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">

            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0">

                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead"><b></b></h2>
                                <p class="text-muted text-sm"><b>Nama Produk</b> </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                        Address: Demo Street 123, Demo City 04312, NJ</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                        Phone #: + 800 - 12 12 23 52</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                                <img src="<?php base_url() ?>bootstrap/dist/img/user1-128x128.jpg" alt="user-avatar"
                                    class="img-circle img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <button href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                            </button>
                            <button type="submit" class="btn btn-sm btn-primary swalDefaultSuccess">
                                <i class="fas fa-shopping-cart"></i> Add Card
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- SweetAlert2 -->
            <script src="<?php base_url() ?>bootstrap/plugins/sweetalert2/sweetalert2.min.js"></script>
            <script>
                $(function () {
                    var Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });

                    $('.swalDefaultSuccess').click(function () {
                        Toast.fire({
                            icon: 'success',
                            title: 'Barang berhasi ditambahkan'
                        })
                    });
                });
            </script>