@extends('layouts/master')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="block block-rounded block-transparent bg-gd-sea">
                <div class="block-content">
                    <div class="py-20 text-center">
                        <h1 class="font-w700 text-white mb-10">GatePass</h1>
                        <h2 class="h4 font-w400 text-white-op">Gatepass History</h2>
                    </div>
                </div>
            </div>
            <!-- Default Elements -->
            <div class="block block-rounded">
                <div class="block-content bg-body-light">
                    <!-- Search -->
                    <!-- END Search -->
                </div>
                <div class="block-content">
                    <!-- Products Table -->
                    {{-- @if($surat_data <> '') --}}
                    <table class="js-table-checkable table table-hover js-table-checkable-enabled table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 100px;">No. Indeks</th>
                                <th class="">GO</th>
                                <th class="">PO</th>
                                <th class="">Tanggal</th>
                                <th class="">Transport Agent</th>
                                <th class="">Trucking No</th>
                                <th class="">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gate as $index => $d)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$d->GO}}</td>
                                <td>{{$d->PO}}</td>
                                <td>{{$d->tgl}}</td>

                                <td>
                                    {{$d->trans_agent}}
                                </td>
                                <td>
                                   {{$d->truck}}
                                </td>
                                <td>
                                    <a href="{{route('gatepass.show',$d->id)}}" class="btn btn-warning">Detail</a>
                                    {{-- <a href="gatepass/{{$d->id}}" class="btn btn-danger">Delete</a> --}}
                                </td>
                                
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
