@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Nilai Kriteria
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('nilai_kriterias.show_fields')
                    <a href="{!! route('nilaiKriterias.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
