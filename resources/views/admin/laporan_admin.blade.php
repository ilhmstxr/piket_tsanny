@extends('master.admin')
@section('title', 'Dashboard Laporan')
@section('content-title', 'Laporan')
@section('content')
<div class="row">
        <div class="col-lg-6">
<<<<<<< HEAD
                <div class="card mb-4">
=======
                <div class="card mb-6">
>>>>>>> fc6d4c418440aceb73d8921fc7c86e5721f9554c
                <div style="font-weight: 500;" class="card-header bg-dark text-white">
			        <i class="fas fa-book me-1" style="margin-right: 5px;"></i>
			        Data Laporan
			    </div>
<<<<<<< HEAD
                <div>
                        <table class="table">
=======
                <div class="card mb-6">
                        <table class="table table-bordered table-responsive">
>>>>>>> fc6d4c418440aceb73d8921fc7c86e5721f9554c
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NISN</th>
                        <th scope="col">LAPORAN</th>
                        <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                        <td>Ammar muzhaffar</td>
                        <td>0054312345</td>
                        <td>Sudah Melaksanakan Piket</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info"><i class="fas fa-info"></i></a>
                            <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                        <td>Rafif</td>
                        <td>0051232112</td>
                        <td>Belum Melaksanakan Piket</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info"><i class="fas fa-info"></i></a>
                            <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                        <td>Ilham</td>
                        <td>0053212365</td>
                        <td>Sudah Melaksanakan piket</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info"><i class="fas fa-info"></i></a>
                            <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
            </div>
                </div>

<<<<<<< HEAD
            <div class="col-lg-8"> 
                <table class="table">

                </table>
            </div>
=======
                <div class="col-lg-6">
			<div class="card shadow mb-4" style="border: 1px solid #bbb;">
		        <div style="font-weight: 500;" class="card-header bg-dark text-white">
			        <i class="fas fa-book me-1" style="margin-right: 5px;"></i>
			        Laporan Siswa
			    </div>
			    <div id="project" class="card-body">
					<section class="text-center">
					    <h3>Pilih Siswa terlebih dahulu</h3>
					</section>
			    </div>
		    </div>
		</div>
>>>>>>> fc6d4c418440aceb73d8921fc7c86e5721f9554c
</div>
@endsection