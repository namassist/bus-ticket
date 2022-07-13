@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Detail Pemesanan
        </div>

        <div class="card-body">
            <div class="form-group">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                ID
                            </th>
                            <td>
                                {{ $booking->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Rute Perjalanan
                            </th>
                            <td>
                                {{ $booking->ride->route ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Nama
                            </th>
                            <td>
                                {{ $booking->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Email
                            </th>
                            <td>
                                {{ $booking->email }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                NO Telepon
                            </th>
                            <td>
                                {{ $booking->phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Status
                            </th>
                            <td>
                                {{ App\Booking::STATUS_SELECT[$booking->status] ?? '' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-primary" href="{{ route('admin.bookings.index') }}">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
