@extends('./layout/admin')

@section('main')

<div class="card">
    <div class="card-body">
        <div class="pt-2" align="right">
            <a href="{{ url('pelanggan/create') }}" class="btn btn-success btn-sm" title="Tambah Data Pelanggan"><i class="ri-add-circle-fill"></i>Tambah</a>
        </div>
      <h5 class="card-title">Data Pelanggan</h5>
      <!-- Table with stripped rows -->
      @if (Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
      @endif
      <table class="table datatable">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
            <th>Email</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pelanggan as $pelanggans)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $pelanggans->nama }}</td>
                    <td>{{ $pelanggans->alamat }}</td>
                    <td>{{ $pelanggans->notlp }}</td>
                    <td>{{ $pelanggans->email }}</td>
                    <td>
                        <div class="pt-2">
                            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-pencil"></i></a>|
                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      <!-- End Table with stripped rows -->

    </div>
</div>
@endsection
