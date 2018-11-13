@extends('admin')
@section('content')

<div class="title_page"><h1>Carousel et Galerie</h1></div>
<div class="container">

    @include('back_front.SiteManage.carousel')

<div class="container">
                <h1>Galerie</h1>
                <hr>
                <br>
        
    <div id="content">
                    @include('back_front.SiteManage.table_gal')
    </div>
</div>
        
</div>

<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="modal_content"></div>
        </div>
    </div>

@endsection
