@extends('layouts.master')

@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title"></h3>
            <div class="block-options">
          
            <button class="btn btn-rounded btn-info mr-10">
                <i class="fa fa-edit mx-5"></i>
                <span class="d-none d-sm-inline">Komentar</span>
            </button>
           
            <button class="btn btn-rounded btn-warning mr-10">
                <i class="fa fa-print mx-5"></i>
                <span class="d-none d-sm-inline"> Print Surat</span>
            </button>
            @if ($gate->status == 4)
            <button class="btn btn-rounded btn-success mr-10" disabled>
                <i class="si si-note mx-5"></i>
                <span class="d-none d-sm-inline"> Surat Sudah Di paraf</span>
            </button>
              @else
              <button class="btn btn-rounded btn-primary mr-10" onclick="paraf({{ $gate->id }})">
                <i class="si si-note mx-5"></i>
                <span class="d-none d-sm-inline"> Paraf Surat Gatepass</span>
            </button>
              @endif
            </div>
        </div>
        <div class="block-content">
            <div class="row mb-2">
                <div class="col-md">
                    <img src="{{asset('logo/new_logo.png')}}" class="mt-2 ml-5" style="width: 50%" alt="">
                    <div>
                        {{-- <p>PERFORMANCE FABRICS DIVISION</p> --}}
                    </div>
                </div>
                <div class="col-md">
                    <h3 class="text-center">GATE PASS</h3>
                    
                    <textarea name="" id="" cols="70" rows="4" disabled></textarea>
                </div>

                <div class="col-md-4">
                    <table class="table table-bordered">
                       
                        <tr>
                            <td>GO NO : {{$gate->GO}} </td>
                        </tr>
                        <tr>
                            <td>PO NO : {{$gate->PO}}</td>
                        </tr>
                        <tr>
                            <td>Date : {{$gate->tgl}}</td>
                        </tr>
                        
                    </table>    
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td >P/L No</td>
                        <td>Description</td>
                        <td>Unit</td>
                        <td>Quantity</td>
                        <td>Remarks</td>
                       
                    </tr>
                </thead>
                <tbody>
                   
                   @for ($i = 0; $i < count($data['gate']->barang); $i++)
                    <tr>
                        <td>{{$i + 1}}</td>
                        <td>
                          {{$data['gate']->barang[$i]->nama}}
                        </td>
                        <td>PCS</td>
                       
                        <td>{{$data['gatebar'][$i]->quantity}}</td>
                        <td>{{$data['gatebar'][$i]->remarks}}</td>
                    </tr>
                   
                    @endfor
                    <tr >
                        <td style="border-color: white"></td>
                        <td style="border-bottom-color: white"></td>
                        <td>Grand Total</td>
                        <td>-</td>
                    </tr>
                 
                   
                </tbody>
            </table>
            <div>
                <span for="">Transport Charges to be paid by : </span>
            </div>
            <br>
            <div class="row">
                <div class="col ml-50">
                    <span for="">Transport Agent : {{$gate->trans_agent}} </span>
                </div>
                <div class="col">
                    <span for="">Trucking  No :  {{$gate->truck}}</span>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <img style= "border-style: solid;width : 90%"  src="" alt="..." class="rounded-0">
                    <div class="ml-30">
                        <label class="text-center">Received By</label>
                    </div>
                </div>
                <div class="col">
                    <img style= "border-style: solid;width : 90%"  src="{{asset($gate->despatch_security)}}" alt="..." class="rounded-0">
                    <div class="text-center mr-30">
                        <label class="">Security</label>
                    </div>
                </div>
                <div class="col">
                    <img style= "border-style: solid;width : 90%"  src="{{asset($gate->despatch_spv)}}" alt="..." class="rounded-0">
                    <div class="ml-10">
                        <label class="">Despatch Supervisior</label>
                    </div>
                </div>
                <div class="col">
                    <img style= "border-style: solid;width : 90%"  src="{{asset($gate->despatch_manag)}}" alt="..." class="rounded-0">
                    <div class="ml-15">
                        <label class="">Despatch Manager</label>
                    </div>
                </div>
                <div class="col">
                    <img style= "border-style: solid;width : 90%"  src="{{asset($gate->authorized_sign)}}" alt="..." class="rounded-0">
                    <div class="ml-10">
                        <label class="">Authorized Signatory</label>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@include('gatepass.modal_paraf')

@stop
@push('scripts')
    @include('gatepass.script_paraf')
@endpush