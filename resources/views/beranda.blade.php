@extends('layouts.master')

@section('content')
<div class="bg-body-dark">
    <div class="content">
        <div class="row">
            <div class="col-6 col-md-6 col-xl-6">
                <a class="block block-rounded text-center disabled">
                    <div class="block-content">
                        <p class="mt-5 mb-10">
                            <i class="fa fa-envelope-o text-gray fa-2x d-xl-none"></i>
                            <i class="fa fa-envelope-o text-gray fa-3x d-none d-xl-inline-block"></i>
                        </p>
                        <p class="font-w600 font-size-sm text-uppercase">{{count($gate)}} Gatepass passed</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-6 col-xl-6">
                <a class="block block-rounded text-center disabled">
                    <div class="block-content">
                        <p class="mt-5 mb-10">
                            <i class="fa fa-dropbox text-gray fa-2x d-xl-none"></i>
                            <i class="fa fa-dropbox text-gray fa-3x d-none d-xl-inline-block"></i>
                        </p>
                        <p class="font-w600 font-size-sm text-uppercase">{{count($barang)}} Total Items</p>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
</div>

<div class="content">
    <div class="row invisible" data-toggle="appear">
        <!-- Row #2 -->
        <div class="col-md-12">
            <div class="block block-rounded block-bordered">
                {{-- <div class="block-header block-header-default border-b">
                    <h3 class="block-title">
                        Grafik Surat <small>2019</small>
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="pull-all pt-50">
                        <!-- Lines Chart Container -->
                        <canvas id="grafik-surat"></canvas>
                    </div>
                </div> --}}
                
                <div class="block-content">
                    <div class=" text-center">
                        <h4>Gatepass History</h4>
                    </div>
                   
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
                                    <a href="{{route('gatepass.detail',$d->id)}}" class="btn btn-warning">Detail</a>
                                    {{-- <a href="gatepass/{{$d->id}}" class="btn btn-danger">Delete</a> --}}
                                </td>
                                
                            </tr>
                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Row #2 -->
    </div>
</div>
@stop

