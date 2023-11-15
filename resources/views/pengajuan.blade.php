@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="form-group">
        <h3><a href="?pages=suratketmhs&amp;act=add"><span class="label label-primary" name="add">Buat Surat</span></a></h3>
    </div>
    <div class="box-body table-responsive">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="example1_info">
            <thead>
                <tr role="row"><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                        No
                    : activate to sort column ascending" style="width: 17.5781px;">
                        <font color="black">No
                    </font></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                        Nama/NIM
                    : activate to sort column ascending" style="width: 148.578px;">
                        <font color="black">Nama/NIM
                    </font></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                        Alamat
                    : activate to sort column ascending" style="width: 85.3281px;">
                        <font color="black">Alamat
                    </font></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                        Tempat/Tgl Lahir
                    : activate to sort column ascending" style="width: 88.2812px;">
                        <font color="black">Tempat/Tgl Lahir
                    </font></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                        Semester
                    : activate to sort column ascending" style="width: 59.8125px;">
                        <font color="black">Semester
                    </font></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                        Tahun Ajaran
                    : activate to sort column ascending" style="width: 50.9531px;">
                        <font color="black">Tahun Ajaran
                    </font></th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                        Alasan Surat
                    : activate to sort column descending" style="width: 189.641px;" aria-sort="ascending">
                        <font color="black">Alasan Surat
                    </font></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                        Tracking
                    : activate to sort column ascending" style="width: 350px;">
                        <font color="black">Tracking
                    </font></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                        Status
                    : activate to sort column ascending" style="width: 57.4062px;">
                        <font color="black">Status
                    </font></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                        AKSI
                    : activate to sort column ascending" style="width: 29.2188px;">
                        <font color="black">AKSI
                    </font></th></tr>
            </thead>
        </div>
</div>
<div>
</div>
@endsection

