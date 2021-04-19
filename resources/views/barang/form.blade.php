@extends('layouts.master')

@section('content')
@php
    $formTitle = !empty($barang) ? 'Update' : 'New'
@endphp
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="block block-rounded block-transparent bg-gd-sea">
                <div class="block-content">
                    <div class="py-20 text-center">
                        <h1 class="font-w700 text-white mb-10">Barang</h1>
                        <h2 class="h4 font-w400 text-white-op">{{($formTitle)}} Data Barang</h2>
                    </div>
                </div>
            </div>
            <!-- Default Elements -->
            <div class="block block-rounded">
                <div class="block-content">
                    @if (!empty($barang))
                    {!! Form::model($barang,['url' => ['barang',$barang->id],'method' => 'PUT','class' => 'form-horizontal form-label-left']) !!}
          
                    {!! Form::hidden('id') !!}
                      
                  @else
                        {!! Form::open(['url' => 'barang']) !!}
                    @endif

                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-material form-material-primary">
                                {!! Form::label('name','Nama')!!}
                                {!! Form::text('nama',null,['class' => 'form-control','placeholder' => 'Nama Barang'])!!}
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center my-15">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-alt-primary btn-block"> Simpan Barang</button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
            <!-- END Default Elements -->
        </div>
    </div>
</div>
@endsection

