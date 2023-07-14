@extends("adminlayout")

@section("content")
<div class="container-fluid" style="margin-top:120px;;height:calc(100% - 120px);background-image: url({{asset("images/background.jpg")}});background-repeat:no-repeat;background-size:cover;;">
    <div class="container" style="width:60%;">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div style="float:left">
            <h4 style="opacity:60%;">Host Name</h4>
            <h3>{{$DataHost->hostname}}</h3>
        </div>
        <div style="float:right">
            <h4 style="opacity:60%;">Jumlah Pelanggan</h4>
            <h3>{{$DataHost->{'jumlah-pelanggan'} }} </h3>
        </div>
        <br><br>
        <br><br>
        <br><br>

        <table class="tabledetail">
            <tr>
                <td>
                    <h5 style="opacity:60%;">Label ODC</h5>
                    <h4>{{$DataHost->{'label-odc'} }}</h4>
                </td>
                <td>
                    <h5 style="opacity:60%;">Slot</h5>
                    <h4>{{$DataHost->slot}} </h4>
                </td>
                <td>
                    <h5 style="opacity:60%;">Port</h5>
                    <h4>{{$DataHost->port}}</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h5 style="opacity:60%;">Rack EA</h5>
                    <h4>{{$DataHost->{'ea-rack'} }}</h4>
                </td>
                <td>
                    <h5 style="opacity:60%;">Slot</h5>
                    <h4>{{$DataHost->{'ea-slot'} }} </h4>
                </td>
                <td>
                    <h5 style="opacity:60%;">Port</h5>
                    <h4>{{$DataHost->{'ea-port'} }}</h4>
                </td>
                <td>
                    <h5 style="opacity:60%;">OTB</h5>
                    <h4>{{$DataHost->{'ea-otb'} }}</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h5 style="opacity:60%;">Rack OA</h5>
                    <h4>{{$DataHost->{'oa-rack'} }}</h4>
                </td>
                <td>
                    <h5 style="opacity:60%;">Slot</h5>
                    <h4>{{$DataHost->{'oa-slot'} }} </h4>
                </td>
                <td>
                    <h5 style="opacity:60%;">Port</h5>
                    <h4>{{$DataHost->{'oa-port'} }}</h4>
                </td>
                <td>
                    <h5 style="opacity:60%;">OTB</h5>
                    <h4>{{$DataHost->{'oa-otb'} }}</h4>
                </td>
            </tr>
        </table>
        <table id="myTable" class="table" style="text-align:center;">
            <thead>
            <tr>
                <th>No</th>
                <th>ONU ID</th>
                <th>Serial Number</th>
                <th>Status</th>
                <th>Nama ODP</th>
                <th style="width:50px;">Port ODP</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @forelse($DetailOdp as $data)
                <tr>
                    <td>{{$data->no}}</td>
                    <td>{{$data->{'onu-id'} }}</td>
                    <td>{{$data->{'onu-sn'} }}</td>
                    <td>
                        <?php
                            if($data->{'onu-status'}=="ONLINE"){
                                echo "<div style='background-color:green;border-radius:15px;padding:5px;color:white;'>".$data->{'onu-status'}."</div>";
                            }else if($data->{'onu-status'}=="DYING GASP"){
                                echo "<div style='background-color:rgb(255, 149, 0);border-radius:15px;padding:5px;color:white;'>".$data->{'onu-status'}."</div>";
                            }else{
                                echo "<div style='background-color:rgb(226, 0, 0);border-radius:15px;padding:5px;color:white;'>".$data->{'onu-status'}."</div>";
                            }
                        ?>
                    </td>
                    <td>{{$data->{'nama-odp'} }}</td>
                    <td>{{$data->{'port-odp'} }}</td>
                    <td>
                        <?php
                            $exist = false;
                            foreach($DataInet as $inet){
                                if ($inet->{'onu-id'}==$data->{'onu-id'} ){
                                    $exist = true;
                                }
                            }
                        ?>
                        @if($exist)
                        <a href="{{url("host/detail/internet/detail/$DataHost->no/".$data->{'onu-id'})}}"><input type="button" value="Detail" class="btn btn-detail"></a>
                        @else
                        Tidak ada Data Internet
                        @endif
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
