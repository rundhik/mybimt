@extends('layouts.template')
@section('judul', 'Tambah Ruang Kuliah')

@section('konten')
    
<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <div class="m-content">

            <!--Begin::Section-->
            <div class="row">
                <div class="col-xl-12">
                    
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--mobile">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        {{$subheader}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin: Body -->
                        <form class="m-form m-form--fit m-form--label-align-right" action="{{route('ruangan.store')}}" method="POST">
                                @csrf
                                    <div class="m-portlet__body">
                                        <div class="form-group m-form__group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Nama Ruangan</label>
                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                <input type="text" name="nm_ruangan" class="form-control m-input">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Lokasi</label>
                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                <select class="form-control m-input" name="lokasi">
                                                        <option value="IBMT Campus Lt. 1">IBMT Campus Lt. 1</option>
                                                        <option value="IBMT Campus Lt. 2">IBMT Campus Lt. 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__foot m-portlet__foot--fit">
                                        <div class="m-form__actions  m-form__actions">
                                            <div class="col-lg-9 ml-lg-auto">
                                                <button type="submit" class="btn btn-primary">Simpan</button>&nbsp; &nbsp;
                                                <a class="btn btn-secondary" href="{{ route('ruangan.index') }}">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            <!--end: Body -->
                        </div>
                    </div>
                    <!--end::Portlet-->

                </div>
            </div>

            <!--End::Section-->

        </div>
    </div>
</div>

<!-- end::Body -->

@endsection