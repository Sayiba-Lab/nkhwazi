@extends('layout.default')

@section('title', 'Form Elements')

@push('js')
<!-- required js -->

@endpush


    <!-- <script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
    <script src="/assets/js/demo/highlightjs.demo.js"></script>
    <script src="/assets/js/demo/sidebar-scrollspy.demo.js"></script> -->
@section('content')
<!-- required css / js -->
<link href="/assets/plugins/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" />
<script src="/assets/plugins/bootstrap-table/dist/bootstrap-table.min.js"></script>

<!-- html -->

<div class="row">
    <div class="col-4 text-right">
        <input type="text" name="deviceId" placeholder="Enter Device Id..." class="form-control">
    </div>
    <div class="col-3">
        <button type="submit" class="btn btn-outline-theme">Mark / Track</button>
    </div>
    <div class="col-12"><hr></div>
</div>
<div class="row">

    <div class="col-4">
        <h4>Media Preview Canvas</h4>

        <fieldset class="border border-secondary">
            <div id="image_preview">

            </div>
        </fieldset>

    </div>
    <div class="col-8">
        <table class="table" data-toggle="table"
        data-sort-class="table-active"
        data-sortable="true"
        data-search="true"
        data-pagination="true"
        data-show-refresh="true"
        data-show-columns="true"
        data-show-fullscreen="true"
        data-height="460">
        <thead>
            <th>Index</th>
            <th>Application</th>
            <th>Media Type</th>
            <th>Format</th>
            <th>TimeStamp</th>
        </thead>
        <tbody>

        </tbody>

        </table>

    </div>
</div>
<style>
    #image_preview{
        height:40vh;
    }
</style>
<script>
    $(()=>{
         // fetchMediaFiles()
    })

  </script>

@endsection
