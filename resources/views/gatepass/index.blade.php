@extends('layouts/master')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="block block-rounded block-transparent bg-gd-sea">
                <div class="block-content">
                    <div class="py-20 text-center">
                        <h1 class="font-w700 text-white mb-10">GatePass</h1>
                        <h2 class="h4 font-w400 text-white-op">Surat Gatepass Masuk</h2>
                    </div>
                </div>
            </div>
            <!-- Default Elements -->
            <div class="block block-rounded">
                <div class="block-content bg-body-light">
                    <!-- Search -->
                    @if (Auth::user()->hasrole('admin'))
                    <a href="{{route('gatepass.create')}}" class="btn btn-primary mb-2">Tambah Gatepass</a>
                    @endif
                  
                    <!-- END Search -->
                </div>
                <div class="block-content">
                    <!-- Products Table -->
                    {{-- @if($surat_data <> '') --}}
                    <table class="js-table-checkable table table-hover js-table-checkable-enabled table-bordered">
                        <thead>
                            <tr class="text-center">
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
                            <tr class="text-center">
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
                                    <a href="{{route('gatepass.detail',$d->id)}}" class="btn btn-warning">Detail</a>
                                    {!! Form::open(['url' => 'gatepass/'. $d->id,'class' => 'delete','style' => 'display:inline-table']) !!}
                                    {!! Form::hidden('_method','DELETE') !!}
                                    {!! Form::submit('Delete',['class' => 'btn btn-danger'])!!}
                                    {!! Form::close()!!}
                                    <a href="{{route('gatepass.label',$d->id)}}" class="btn btn-success">Label</a>
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
