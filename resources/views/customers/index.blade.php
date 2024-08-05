@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman Customer</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('customers.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">ACTIONS</th>
            </tr>
            <tr>
              @forelse ($customers as $index => $customer)
            <tr>
              <td class="text-center">
                {{ ++$index }}
              </td>
              <td>{{ $customer->nama }}</td>
              <td>{{ $customer->alamat }}</td>
              <td>{{ $customer->jenis_kelamin }}</td>
              <td class="text-center">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                  <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                  <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                </form>
              </td>
            </tr>
            @empty
            <div class="alert alert-danger">
              Data Customer Belum Ada.
            </div>
            @endforelse
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection
