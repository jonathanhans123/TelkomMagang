@extends("adminlayout")

@section("content")
<div class="container-fluid" style="margin-top:120px;;height:calc(100% - 120px);background-image: url({{asset("images/background.jpg")}});background-repeat:no-repeat;background-size:cover;;">
    <div class="container" style="width:60%;">
        <form action="/host/add" method="post">
            @csrf
            <div style="float:left">
                <h4 style="opacity:60%;">Host Name</h4>
                <input type="text" name="hostname" id="" class="form-control" value="{{old('hostname')}}">
                @error('hostname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <br><br>
            <br><br>
            <br><br>

            <table class="tabledetail">
                <tr>
                    <td>
                        <h5 style="opacity:60%;">Label ODC</h5>
                        <input type="text" name="label-odc" id="" class="form-control" value="{{old('label-odc')}}">
                        @error('label-odc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                    <td>
                        <h5 style="opacity:60%;">Slot</h5>
                        <input type="number" name="slot" id="" class="form-control" value="{{old('slot')}}">
                        @error('slot')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                    <td>
                        <h5 style="opacity:60%;">Port</h5>
                        <input type="number" name="port" id="" class="form-control" value="{{old('port')}}">
                        @error('port')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5 style="opacity:60%;">Rack EA</h5>
                        <input type="text" name="ea-rack" id="" class="form-control" value="{{old('ea-rack')}}">
                        @error('ea-rack')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                    <td>
                        <h5 style="opacity:60%;">Slot</h5>
                        <input type="number" name="ea-slot" id="" class="form-control" value="{{old('ea-slot')}}">
                        @error('ea-slot')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                    <td>
                        <h5 style="opacity:60%;">Port</h5>
                        <input type="number" name="ea-port" id="" class="form-control" value="{{old('ea-port')}}">
                        @error('ea-port')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                    <td>
                        <h5 style="opacity:60%;">OTB</h5>
                        <input type="number" name="ea-otb" id="" class="form-control" value="{{old('ea-otb')}}">
                        @error('ea-otb')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5 style="opacity:60%;">Rack OA</h5>
                        <input type="text" name="oa-rack" id="" class="form-control" value="{{old('oa-rack')}}">
                        @error('oa-rack')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                    <td>
                        <h5 style="opacity:60%;">Slot</h5>
                        <input type="number" name="oa-slot" id="" class="form-control" value="{{old('oa-slot')}}">
                        @error('oa-slot')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                    <td>
                        <h5 style="opacity:60%;">Port</h5>
                        <input type="number" name="oa-port" id="" class="form-control" value="{{old('oa-port')}}">
                        @error('oa-port')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                    <td>
                        <h5 style="opacity:60%;">OTB</h5>
                        <input type="text" name="oa-otb" id="" class="form-control" value="{{old('oa-otb')}}">
                        @error('ea-otb')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5 style="opacity:60%;">Label Feeder</h5>
                        <input type="text" name="label-feeder" id="" class="form-control" value="{{old('label-feeder')}}">
                        @error('label-feeder')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </td>
                </tr>
            </table>
            <input type="submit" value="Confirm" class="btn btn-danger">
        </form>
    </div>
</div>
@endsection
