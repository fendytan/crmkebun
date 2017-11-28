@extends('frontend.layouts.app')

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>
                        <!-- <i class="fa fa-dashboard"></i> {{ __('navs.frontend.dashboard') }} -->
                        <i class="fa fa-dashboard"></i> Status Kendaraan
                        </strong>
                </div><!--card-header-->
                
                <div class="container">
                    <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
			                <th>No. Polisi</th>
			                <th>Status</th>
			                <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicles as $vehicle)
    		            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
			                <td>{{ $vehicle['registration_number'] }}</td>
			                @if ($vehicle['status'] == 0)
				                <td>DI KEBUN</td>
				                <td><a href="/vehicle/departure/{{ $vehicle['id'] }}" class="btn btn-default" type="button">Pergi</a></td>
			                @else
				                <td>DI LUAR</td>
				                <td><a href="/vehicle/arrival/{{ $vehicle['id'] }}" class="btn btn-default" type="button">Kembali</a></td>
			                @endif
		                </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>


            </div><!-- card -->
        </div><!-- row -->
    </div><!-- row -->
@endsection
