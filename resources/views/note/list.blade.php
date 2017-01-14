@extends('layouts.app')

@section('title')
<title>List Certificate | Certnote</title>
@endsection

@section('main_container')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Users <small>Some examples to get you started</small></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

<!-- TABLE START -->
     <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>My Note <small>Domains</small></h2>
            <div class="clearfix"></div>
	  </div>
          <div class="x_content">
            <p class="text-muted font-13 m-b-30">
              The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p>
            <table id="datatable-buttons" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Domain(FQDN)</th>
                  <th>Port No.</th>
                  <th>MEMO</th>
                  <th>Created</th>
                  <th>Modified</th>
                </tr>
              </thead>

              <tbody>
                <?php $no=1; ?>
                @foreach($notes as $note)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$note->fqdn}}</td>
                  <td>{{$note->port}}</td>
                  <td>{{$note->memo}}</td>
                  <td>{{$note->created_at}}</td>
                  <td>{{$note->updated_at}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<!-- TABLE END -->

<!-- /page content -->


@endsection
