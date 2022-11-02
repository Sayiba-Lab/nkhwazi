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
    <th>EntryId</th>
    <th>Phone Number</th>
    <th>Direction/Type</th>
    <th>DeviceId</th>
    <th>TimeStamp</th>
  </thead>
  <tbody>

</tbody>

</table>

<script>
    $(()=>{
          fetchCalls()
    })

    async function fetchCalls(){
      try{
          let response = await fetch(BASE_URL+"/get_call_logs.php",{
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
                              <td>${row.phone_number}</td>
                              <td>${row.call_type}</td>
                              <td>${row.phoneId}</td>
                              <th>${row.call_date}</th>
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
