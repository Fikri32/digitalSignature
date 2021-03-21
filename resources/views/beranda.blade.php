@extends('layouts.master')

@section('content')
<div class="bg-body-dark">
    <div class="content">
        <div class="row">
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center" href="">
                    <div class="block-content">
                        <p class="mt-5 mb-10">
                            <i class="fa fa-envelope-o text-gray fa-2x d-xl-none"></i>
                            <i class="fa fa-envelope-o text-gray fa-3x d-none d-xl-inline-block"></i>
                        </p>
                       
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

                </div>
            </div>
        </div>
        <!-- END Row #2 -->
    </div>
</div>
@stop

