<section style="z-index: 100 ; position: fixed; right: 5%">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" onclick="this.parentNode.style.display = 'none'" data-dismiss="alert">×</button>
            <span>{{ $message }}</span>
        </div>
    @endif


    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" onclick="this.parentNode.style.display = 'none'" data-dismiss="alert">×</button>
            <span>{{ $message }}</span>
        </div>
    @endif


    @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-block">
            <button type="button" class="close" onclick="this.parentNode.style.display = 'none'" data-dismiss="alert">×</button>
            <span>{{ $message }}</span>
        </div>
    @endif


    @if ($message = Session::get('info'))
        <div class="alert alert-info alert-block">
            <button type="button" class="close" onclick="this.parentNode.style.display = 'none'" data-dismiss="alert">×</button>
            <span>{{ $message }}</span>
        </div>
    @endif


    @if ($errors->any())
        <div class="alert alert-danger">
            <button type="button" class="close" onclick="this.parentNode.style.display = 'none'" data-dismiss="alert">×</button>
            Please check the form below for errors
        </div>
    @endif

</section>
