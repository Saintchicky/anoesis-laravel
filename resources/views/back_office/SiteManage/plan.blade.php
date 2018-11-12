@extends('admin')
@section('content')



<div class="title_page" id="Up"><h1>PLAN</h1></div>
<div class="container">
       <br>
       <div id="content">
           @include('back_front.SiteManage.table_plan')
       </div>
       
  
</div> 

<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="modal_content"></div>
    </div>
</div>

    

@endsection
