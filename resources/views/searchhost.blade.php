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
        <h4>Pencarian Data</h4>
        @error("error")
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <form action="{{url("/search")}}" method="GET">
            @error('kolom[]')
                <div class="alert alert-danger" >{{$message}}</div>
            @enderror
            <table style="width:100%;" class="searchtable">
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kolom[]" value="hostname" checked onchange="toggleInput(this, 'keywordhostname')"">
                            <label class="form-check-label">
                            Host Name
                            </label>
                        </div>
                    </td>
                    <td style="width: 78%;padding-left:4%;">
                        <div class="search2">
                            <input type="text" name="keywordhostname" class="searchTerm" placeholder="Masukkan host name">
                        </div>
                    </td>
                </tr>
                @error('keywordhostname')
                <tr>
                    <td colspan="2">
                        <div class="alert alert-danger" >{{$message}}</div>
                    </td>
                </tr>
                @enderror
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input disabled" type="checkbox" name="kolom[]" value="label-odc" onchange="toggleInput(this, 'keywordlabel-odc')">
                            <label class="form-check-label">
                            Label ODC
                            </label>
                        </div>
                    </td>
                    <td style="width: 70%;padding-left:4%;">
                        <div class="search2">
                            <input type="text" disabled name="keywordlabel-odc" class="searchTerm disabled" placeholder="Masukkan Label ODC">
                        </div>
                    </td>
                </tr>
                @error('keywordlabel-odc')
                <tr>
                    <td colspan="2">
                        <div class="alert alert-danger" >{{$message}}</div>
                    </td>
                </tr>
                @enderror
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input disabled" type="checkbox" name="kolom[]" value="ea-rack" onchange="toggleInput(this, 'keywordea-rack')">
                            <label class="form-check-label">
                            Rack EA
                            </label>
                        </div>
                    </td>
                    <td style="width: 70%;padding-left:4%;">
                        <div class="search2">
                            <input type="text" disabled name="keywordea-rack" class="searchTerm disabled" placeholder="Masukkan EA Rack">
                        </div>
                    </td>
                </tr>
                @error('keywordea-rack')
                <tr>
                    <td colspan="2">
                        <div class="alert alert-danger" >{{$message}}</div>
                    </td>
                </tr>
                @enderror
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input disabled" type="checkbox" name="kolom[]" value="oa-rack" onchange="toggleInput(this, 'keywordoa-rack')">
                            <label class="form-check-label">
                            Rack OA
                            </label>
                        </div>
                    </td>
                    <td style="width: 70%;padding-left:4%;">
                        <div class="search2">
                            <input type="text" disabled name="keywordoa-rack" class="searchTerm disabled" placeholder="Masukkan OA Rack">
                        </div>
                    </td>
                </tr>
                @error('keywordoa-rack')
                <tr>
                    <td colspan="2">
                        <div class="alert alert-danger" >{{$message}}</div>
                    </td>
                </tr>
                @enderror
            </table>
            {{-- <div class="search2">
                <input type="text" name="keyword" class="searchTerm" placeholder="Masukkan keyword">
                <button type="submit" value="" name="search" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
                <br>
            </div> --}}
            {{-- <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kolom[]" value="label-odc" checked>
                <label class="form-check-label">
                Nama ODC
                </label>
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
            </div> --}}
            <input type="submit" value="Search" class="btn btn-danger" name="search">
        </form>
    </div>
    <img src="{{asset('images/indihomebanner.jpg')}}" alt="" class="banner">
</div>
@endsection

@section("extrajs")
<script>
    function toggleInput(checkbox, inputName) {
    const inputText = document.querySelector(`input[name="${inputName}"]`);
    if (checkbox.checked) {
        inputText.disabled = false;
        inputText.classList.remove('disabled');
        checkbox.classList.remove('disabled');
        inputText.disabled = false;
      } else {
        inputText.disabled = true;
        inputText.classList.add('disabled');
        checkbox.classList.add('disabled');
        inputText.disabled = true;

      }
    }
    </script>

@endsection
