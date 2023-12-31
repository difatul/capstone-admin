@extends('./layout/admin')

@section('main')

<div class="card">
    <div class="card-body">
        <div class="pt-2" align="right">
            <a href="{{ url('kesenian/create') }}" class="btn btn-success btn-sm" title="Tambah Data Kesenian"><i class="ri-add-circle-fill"></i>Tambah</a>
        </div>
      <h5 class="card-title">Data Kesenian</h5>
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
            <th>Nama Kesenian</th>
            <th>Asal Daerah</th>
            <th>Harga</th>
            <th>No. Telepon</th>
            <th>Email</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($kesenian as $row)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td> Rp. {{ number_format($row->harga, 0, ',', '.') }}</td>
                    <td>{{ $row->notelp }}</td>
                    <td>{{ $row->email }}</td>
                    <td> <div class="pt-2">
                        <a href="{{ route('kesenian.show', $row->id) }}" class="btn btn-warning btn-sm" title="Detil"><i class="bi bi-book"></i></a>|
                        <a href="{{ route('kesenian.edit', $row->id) }}" class="btn btn-primary btn-sm" title="Edit"><i class="bi bi-pencil"></i></a>|
                        <form action="{{ route('kesenian.destroy', $row->id) }}" method="POST" type="button"  class="btn btn-danger btn-sm p-0" onsubmit="return confirm ('Apakah Anda yakin ingin menghapus data kesenian?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm m-0" title="Hapus"><i class="bi bi-trash"></i></button>
                        </form>
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
