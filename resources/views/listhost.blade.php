@extends("adminlayout")

@section("extracss")

@endsection

@section("content")
<div class="container-fluid" style="margin-top:120px;;height:calc(100% - 120px);background-image: url({{asset("images/background.jpg")}});background-repeat:no-repeat;background-size:cover;;">

    <div class="container" style="width:60%">
        @if(count($DataHost)>0)
        <div class="alert alert-success">Berhasil ditemukan {{count($DataHost)}} data yang sesuai</div>
        @endif

        <table id="myTable" class="table" style="z-index:2;text-align:center;">
            <thead>
            <tr>
                <th>No</th>
                <th>Hostname</th>
                <th>Slot</th>
                <th>Port</th>
                <th>Label-ODC</th>
                <th style="width:50px;">Jumlah Pelanggan</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @forelse($DataHost as $data)
                <tr>
                    <td>{{$data->no}}</td>
                    <td>{{$data->hostname}}</td>
                    <td>{{$data->slot}}</td>
                    <td>{{$data->port}}</td>
                    <td>{{$data->{'label-odc'} }}</td>
                    <td>{{$data->{'jumlah-pelanggan'} }}</td>
                    <td>
                        <a href="{{url("host/detail/$data->no")}}"><input type="button" value="Detail" class="btn btn-detail"></a>
                        <a href="{{url("host/detail/edit/$data->no")}}"><input type="button" value="Edit" class="btn btn-danger"></a>
                    </td>
                </tr>
                @empty
                    <div class="alert alert-danger">Tidak ada data yang sesuai</div>

                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@section("extrajs")
<script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
</script>
@endsection
