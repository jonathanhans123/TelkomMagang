@extends("adminlayout")

@section("content")
<div class="container-fluid" style="margin-top:120px;background-color:rgb(176, 0, 0);height:calc(100% - 120px);">
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
        <h2>Detail ODP</h2>
        <table class="tabledetail">
            <tr>
                <td>
                    <h4 style="opacity:60%;">IP Address</h4>
                    <h3>{{$DetailOdp->{'ip-olt'} }}</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h5 style="opacity:60%;">ONU ID</h5>
                    <h4>{{$DetailOdp->{'onu-id'} }}</h4>
                </td>
                <td>
                    <h5 style="opacity:60%;">ONU Serial Number</h5>
                    <h4>{{$DetailOdp->{'onu-sn'} }}</h4>
                </td>
                <td>
                    <h5 style="opacity:60%;">ONU Status</h5>
                    <h4>{{$DetailOdp->{'onu-status'} }}</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h5 style="opacity:60%;">Nama ODP</h5>
                    <h4>{{$DetailOdp->{'nama-odp'} }}</h4>
                </td>
                <td>
                    <h5 style="opacity:60%;">Port ODP</h5>
                    <h4>{{$DetailOdp->{'port-odp'} }}</h4>
                </td>
            </tr>
        </table>
        <h2>Data Internet</h2>
        <table class="tabledetail">
            <tr>
                <td>
                    <h5 style="opacity:60%;">Last Online</h5>
                    <h4>{{$DataInet->{'last-online'} }}</h4>
                </td>
                <td>
                    <h5 style="opacity:60%;">Email</h5>
                    <h4>{{$DataInet->{'inet'} }}</h4>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
