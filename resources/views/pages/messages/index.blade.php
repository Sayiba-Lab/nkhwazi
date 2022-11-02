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
    <div class="col-12 text-right">
        <button type="submit" class="btn btn-theme">Advanced Search</button>
    </div>
    <div class="col-12"><hr></div>
</div>
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
    <th>DeviceId</th>
    <th>Address</th>
    <th>Type</th>
    <th>Content</th>
    <th>ReadSMS</th>
    <th>TimeStamp</th>
  </thead>
  <tbody>

</tbody>

</table>

<script>
    $(()=>{
          fetchTextMessages()
    })

    async function fetchTextMessages(){
      try{
          let response = await fetch(BASE_URL+"/get_text_messages.php",{
              method:"GET",
              headers:{
                  'Content-Type':"application/json"
              },
              mode:"no-cors"
          })
          response = await response.json()

          if(response.status == 'success'){
              let DOM = response.data.map(row=>{
                  return ` <tr>
                              <td>${row.entryId}</td>
                              <td>${row.phoneid}</td>
                              <td>${row.address}</td>
                              <td>${row.type}</td>
                              <td>${row.message}</td>
                              <th>${row.readSms}</th>
                              <th>${row.date}</th>
                          </tr>`;
              }).join('')
              $("#datatableDefault tbody").html(DOM)
          }else{
              alert(data.message)
          }
      }catch(err){
          console.log(err)
      }
    }
  </script>

@endsection
