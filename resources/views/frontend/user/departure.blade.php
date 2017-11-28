@extends('frontend.layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>
                    <!-- <i class="fa fa-dashboard"></i> {{ __('navs.frontend.dashboard') }} -->
                    <i class="fa fa-dashboard"></i> Form to Add
                </strong>
            </div>
            <!--card-header-->

            Nomor Polisi: {{ $vehicles['registration_number'] }}

            <form action="/vehicle/departure" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <div class="col-md-8 offset-md-2">
                    <input type="hidden" name="vehicle_id" id="vehicle_id" value="{{ $vehicles['id'] }}" style="display:none"></input>

                    <div class="form-group row">
                        <label for="example-date-input" class="col-3 col-form-label">Tgl. Berangkat</label>
                        <div class="col-9">
                            <input class="form-control" type="date" value="2017-11-22" name="date" id="date">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="document_id" class="col-3 col-form-label">No. SP</label>
                        <div class="col-9">
                            <input class="form-control" type="text" name="document_id" id="document_id">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="weight" class="col-3 col-form-label">Berat Timbangan</label>
                        <div class="col-9">
                            <input class="form-control" type="number" name="weight" id="weight">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="source_id" class="col-3 col-form-label">Dari</label>
                        <select class="col-9 form-control" name="source_id">
                            @foreach ($sources as $source)
                            <option value="{{ $source['id'] }}">{{ $source['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="destination_id" class="col-3 col-form-label">Tujuan</label>
                        <select class="col-9 form-control" name="destination_id">
                            @foreach ($destinations as $destination)
                            <option value="{{ $destination['id'] }}">{{ $destination['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </form>

        </div>
        <!-- card -->
    </div>
    <!-- row -->
</div>
<!-- row -->


@endsection