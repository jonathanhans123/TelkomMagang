@extends("adminlayout")

@section("content")

<div class="container-fluid">
    <div class="top"></div>
    <div class="bottom"></div>
    <div class="info card">
        <h4>Maintainance Telkom Access</h4>
        Website untuk mengolah data. qui sint voluptatum omnis corrupti nesciunt, amet debitis, eius eos ipsam aperiam ducimus animi nulla. Quidem mollitia quas rerum.
    </div>
    <div class="search card">
        <h4>Pencarian Data Advanced</h4>
        @error("error")
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <form action="{{url("/search")}}" method="GET">
            <div class="search2">
                <input type="text" name="keyword" class="searchTerm" placeholder="Masukkan keyword">
                <input type="submit" value="" name="search" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
                <br>
            </div>
            <div class="grid-container" style="margin-top:10px;">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kolom[]" value="label-odc" checked>
                    <label class="form-check-label">
                    Nama ODC
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kolom[]" value="ea-rack">
                    <label class="form-check-label">
                    Rack EA
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kolom[]" value="oa-rack">
                    <label class="form-check-label">
                    Rack OA
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kolom[]" value="slot">
                    <label class="form-check-label">
                    Slot
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kolom[]" value="port">
                    <label class="form-check-label">
                    Port
                    </label>
                </div>
            </div>
            <h5 style="color:grey;margin-top: 10px;">Optional</h5>

            <div class="grid-container2">
                <div class="form-group" style="display:flex;">
                    <label>Slot &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <input type="number" class="form-control" placeholder="Slot" name="slot">
                </div>
                <div class="form-group" style="display:flex;">
                    <label for="numberInput">Port &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                    <input type="number" id="numberInput" class="form-control" placeholder="Port" name="port">
                </div>
                <div class="form-group" style="display:flex;">
                    <label>EA Slot&nbsp;:</label>
                    <input type="number" class="form-control" placeholder="Slot" name="ea-slot">
                </div>
                <div class="form-group" style="display:flex;">
                    <label for="numberInput">EA Port&nbsp;:</label>
                    <input type="number" id="numberInput" class="form-control" placeholder="Port" name="ea-port">
                </div>
                <div class="form-group" style="display:flex;">
                    <label>OA Slot:</label>
                    <input type="number" class="form-control" placeholder="Slot" name="oa-slot">
                </div>
                <div class="form-group" style="display:flex;">
                    <label for="numberInput">OA Port:</label>
                    <input type="number" id="numberInput" class="form-control" placeholder="Port" name="oa-port">
                </div>
            </div>
            <input type="submit" value="Advanced Search" class="btn btn-danger" name="search">
        </form>
    </div>
    <img src="{{asset('images/indihomebanner.jpg')}}" alt="" class="banner">
</div>
@endsection
