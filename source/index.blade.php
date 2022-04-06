@extends('_layouts.master')

@section('title')
<title>DevConf</title>
@endsection

@section('body')
<!-- Full Page Image Header with Vertically Centered Content -->
<script type="text/javascript">
    path = window.location.pathname;
    if (window.location.pathname == "" || window.location.pathname == "/") {
          path = "/cz";
          break;
      }
    }
    if (window.location.hostname != "openhouse.redhat.com" && window.location.hostname != "localhost") {
       window.location.href = 'https://openhouse.redhat.com' + path; 
    }
  </script>
@endsection
