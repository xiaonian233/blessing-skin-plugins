@extends('admin.master')

@section('title', 'Authme 数据对接')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Authme 数据对接
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">README.md</h3>
          </div><!-- /.box-header -->
          <div class="box-body table-responsive">
            @php
              $path = plugin('authme-integration')->getPath()."/README.md";
              $markdown = @file_get_contents($path);

              if (! $markdown) {
                echo "<p>无法加载插件根目录下的 README.md</p>";
              } else {
                echo app('parsedown')->text(mb_substr($markdown, 14));
              }
            @endphp
          </div>
        </div>
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection
