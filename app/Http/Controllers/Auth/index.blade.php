@extends('layoutadmin')

@section('content')
    <div class="container">
        <h1>Barang List</h1>
        @auth
            @if (Auth::user()->is_admin)
                <a href="{{ route('barangs.create') }}" class="btn btn-primary">Add Barang</a>
            @endif
        @endauth
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Kategori</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $barang->id }}</td>
                        <td>{{ $barang->id_kategori }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->stok }}</td>
                        <td>{{ $barang->harga }}</td>
                        <td>
                            <a href="{{ route('barangs.show', $barang->id) }}" class="btn btn-info">Show</a>
                            @auth
                                @if (Auth::user()->is_admin)
                                    <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                @endif
                            @endauth
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $barangs->links() }}
    </div>
@endsection
