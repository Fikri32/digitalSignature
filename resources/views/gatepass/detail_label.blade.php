@extends('layouts.master')

@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title"></h3>
            {{-- <div class="block-options">
            @role('spv|manager|authorized_manager|security')
            <button class="btn btn-rounded btn-info mr-10"  onclick="komentar({{ $gate->id }})">
                <i class="fa fa-edit mx-5"></i>
                <span class="d-none d-sm-inline">Komentar</span>
            </button>
           @endrole
            <button class="btn btn-rounded btn-warning mr-10" onClick="window.print()">
                <i class="fa fa-print mx-5"></i>
                <span class="d-none d-sm-inline"> Print Surat</span>
            </button>
            @if ($gate->status == 4)
            <button class="btn btn-rounded btn-success mr-10" disabled>
                <i class="si si-note mx-5"></i>
                <span class="d-none d-sm-inline"> Surat Sudah Di paraf</span>
            </button>
              @else
              @role('spv|manager|authorized_manager|security')
              <button class="btn btn-rounded btn-primary mr-10" onclick="paraf({{ $gate->id }})">
                <i class="si si-note mx-5"></i>
                <span class="d-none d-sm-inline"> Paraf Surat Gatepass</span>
            </button>
              @endrole
              @endif
            </div> --}}
        </div>
       
        <div class="block-content ">
           
            <div class="form-group row justify-content-center">
                <b>TO :</b>
                
            </div>
            <div class="form-group row justify-content-center">
                <b>PT.ASIA PACIFIC FIBERS,TBK</b>
            </div>
            <div class="form-group row justify-content-center">
              
            </div>
            <div class="form-group row justify-content-center">
                <b>ATTN : PALTI HUTAPEA</b>
            </div>
            <div class="form-group row justify-content-center">
                <b>SUB : BOX 1</b>
            </div>
            <div class="form-group row justify-content-center">
                <b>MASKER EARLOOP LOGO APF - 750 PCS</b>
            </div>
            <div class="form-group row justify-content-center">
                <p>FROM:</p>
            </div>
            <div class="form-group row justify-content-center mr-3 pr-3 ">
                <textarea style="border:none" name="" id="" cols="50" rows="7" class="text-center mr-4 pr-4" disabled >
                    ASIA PACIFIFC FIBERS.TBK
                    PERFORMANCE FABRIC DIVISIONS
                    DESA KIARAPAYUNG
                    KEC.KLAR KAB.KARAWANG
                    41371-INDONESIA
                    PH:+62 267 434017
                </textarea>
            </div>
       
           
        </div>
    </span>
    </div>
    
</div>
@include('gatepass.modal_paraf')
@include('gatepass.modal_komentar')

@stop
@push('scripts')
    @include('gatepass.script_paraf')
    @include('gatepass.script_komentar')

    <script>
        $(document).ready(function(){
            var x = document.getElementById("myTable").rows[0].cells[0].length;
            var r = $("#quantity").text();
            var d = x * r;
            console.log(d);
        });
    </script>
@endpush