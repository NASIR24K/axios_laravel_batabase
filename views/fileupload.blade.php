<div class="container-fluid">
  <div class="row d-flex justify-content-center" >
      <div class="col-md-6 mt-5">
          <div class="card text-center">
              <div class="card-header">
                  <h2>laravel ajax file upload</h2>
                </div>
                  <div class="card-body">
                      <input type="file" class="form-control m-2" id="my_file_ID">
                      <button id="uploadID" onclick="OnUpload()" class="btn btn-block btn-primary m-2 col-md-12">upload</button>
                      <h3 id="Upload_percentange"></h3>
                  </div>
             
      </div>
      <div class="col-md-6 card text-center p-3 m-4">
        <table class="table table-bordered">
          <thead>
          <tr>
            <td>No</td>
            <td>download</td>
          </tr>
        </thead>
          <tbody class="tableData">
          </tbody>
        </table>
      </div>
  </div>
</div>
<link href={{URL::asset('js/bootstrap.min.css')}} rel="stylesheet">
<script type="text/javascript" src={{URL::asset('/js/custom.js')}}></script>
<script type="text/javascript" src={{URL::asset('/js/custom1.js')}}></script>
<script type="text/javascript" src={{URL::asset('/js/custom2.js')}}></script>


<script type="text/javascript" src={{URL::asset('/js/jquery-3.6.0.min.js')}}></script>
<script type="text/javascript" src={{URL::asset('js/axios.min.js')}}></script>
<script type="text/javascript" src={{URL::asset('js/popper.min.js')}}></script>
<script type="text/javascript" src={{URL::asset('js/bootstrap.min.js')}}></script>
