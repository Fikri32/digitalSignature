@extends('layouts.master')

@section('content')
@php
    $formTitle = !empty($gate) ? 'Update' : 'New'
@endphp
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="block block-rounded block-transparent bg-gd-sea">
                <div class="block-content">
                    <div class="py-20 text-center">
                        <h1 class="font-w700 text-white mb-10">Gatepass</h1>
                        <h2 class="h4 font-w400 text-white-op">{{($formTitle)}} Data Gatepass</h2>
                    </div>
                </div>
            </div>
            <!-- Default Elements -->
            <div class="block block-rounded">
                <div class="block-content">
                    @if (!empty($gate))
                        {!! Form::model($gate,['url' => ['gatepass',$gate->id],'method' => 'PUT']) !!}
                        {!! Form::hidden('id') !!}
                    @else
                        {!! Form::open(['url' => 'gatepass','name' => 'dynamic_form']) !!}
                    @endif
                    <span id="result"></span>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-material form-material-primary">
                                        {!! Form::label('name','GO')!!}
                                        {!! Form::text('GO',null,['class' => 'form-control','placeholder' => 'GP No'])!!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-material form-material-primary">
                                        {!! Form::label('name','PO')!!}
                                        {!! Form::text('PO',null,['class' => 'form-control','placeholder' => 'PO No'])!!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-material form-material-primary">
                                        {!! Form::label('name','Tanggal')!!}
                                        {!! Form::date('tgl',null,['class' => 'form-control','placeholder' => 'Nama Barang'])!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-material form-material-primary">
                                        {!! Form::label('name','Transport Agent')!!}
                                        {!! Form::text('trans_agent',null,['class' => 'form-control','placeholder' => 'Transport Agent'])!!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-material form-material-primary">
                                        {!! Form::label('name','Truck')!!}
                                        {!! Form::text('truck',null,['class' => 'form-control','placeholder' => 'Transport Agent'])!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Barang</th>
                                        <th>Quantity</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center my-15">
                        <div class="col-md-12">
                            <button type="submit" name="save" id="save" class="btn btn-alt-primary btn-block"> Simpan Gatepass</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
    </div>
</div>
@stop

@push('scripts')
<script>
    $(document).ready(function(){
    
     var count = 1;
    
     dynamic_field(count);
    
     function dynamic_field(number)
     {
      html = '<tr>';
            html += '<td><select class="form-control" name="barang[]" id="barang"><option value="">Pilih Barang</option>@foreach($barang as $d)  <option value="{{ $d->id }}">{{ ucfirst($d->nama) }}</option>@endforeach</select></td>';
            html += '<td><input type="text" name="quantity[]" class="form-control" /></td>';
            html += '<td><input type="text" name="remarks[]" class="form-control" /></td>';
            if(number > 1)
            {
                html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
                $('tbody').append(html);
            }
            else
            {   
                html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
                $('tbody').html(html);
            }
     }
    
     $(document).on('click', '#add', function(){
      count++;
      dynamic_field(count);
     });
    
     $(document).on('click', '.remove', function(){
      count--;
      $(this).closest("tr").remove();
     });
    
 
    
    });
    </script>
@endpush