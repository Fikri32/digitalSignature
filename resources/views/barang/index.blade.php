@extends('layouts/master')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="block block-rounded block-transparent bg-gd-sea">
                <div class="block-content">
                    <div class="py-20 text-center">
                        <h1 class="font-w700 text-white mb-10">Barang</h1>
                        <h2 class="h4 font-w400 text-white-op">Kelola Data Barang</h2>
                    </div>
                </div>
            </div>
            <!-- Default Elements -->
            <div class="block block-rounded">
                <div class="block-content bg-body-light">
                    <!-- Search -->
                @if (Auth::user()->hasrole('admin'))
                <a href="{{route('barang.create')}}" class="btn btn-primary mb-2">Tambah Barang</a>
                <!-- END Search -->
                @endif
                 
                </div>
                <div class="block-content">
                    <!-- Products Table -->
                    {{-- @if($surat_data <> '') --}}
                    <table class="js-table-checkable table table-hover js-table-checkable-enabled">
                        <thead>
                            <tr>
                                <th style="width: 100px;">No. Indeks</th>
                                <th class="d-none d-sm-table-cell">Nama</th>
                                <th class="d-none d-sm-table-cell">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $index => $d)
                            <tr>
                                <td>
                                    {{$index + 1}}
                                </td>
                                <td>{{$d->nama}}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- END Products Table -->
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
    </div>
</div>
@stop

@push('scripts')
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>
@endpush
