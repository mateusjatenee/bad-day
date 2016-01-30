@extends('layouts.base')

      @section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron pages-banner">
  <div class="container vertical-center">
    <h1 class="display-3 page-title">
      Top Stories
    </h1>

  </div>
</div>


    <div class="container-fluid">
      <!-- Example row of columns -->
      @include('pages.partials._top_stories')

      <hr>

    </div> <!-- /container -->

    @endsection
