@extends('layouts.template')
@section('judul', 'Tambah Mata Kuliah')

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
                        <form class="m-form m-form--fit m-form--label-align-right" action="{{route('matakuliah.store')}}" method="POST">
                                @csrf
                                    <div class="m-portlet__body">
                                        <div class="form-group m-form__group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Kode Mata Kuliah</label>
                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                <input type="text" name="kode_mk" class="form-control m-input">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Nama Mata Kuliah</label>
                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                <input type="text" name="nm_matakuliah" class="form-control m-input">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">SKS</label>
                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                <select class="form-control m-input" name="sks">
                                                        <option value="1">1 SKS</option>
                                                        <option value="2">2 SKS</option>
                                                        <option value="3">3 SKS</option>
                                                        <option value="4">4 SKS</option>
                                                        <option value="5">5 SKS</option>
                                                        <option value="6">6 SKS</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Program Studi</label>
                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                <input type="text" class="form-control m-input" placeholder="{{ $prodi }}" disabled>
                                                <input type="hidden" name="prodi_id" class="form-control m-input" value="{{ $prodi_id }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__foot m-portlet__foot--fit">
                                        <div class="m-form__actions  m-form__actions">
                                            <div class="col-lg-9 ml-lg-auto">
                                                <button type="submit" class="btn btn-primary">Simpan</button>&nbsp; &nbsp;
                                                <a class="btn btn-secondary" href="{{ route('matakuliah.prodi', $prodi_id) }}">Batal</a>
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