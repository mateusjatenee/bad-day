@extends('layouts.base')

      @section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
      @include('home.partials._hero')

    <div class="container">
      <!-- Example row of columns -->
      @include('home.partials._top_stories')

      <hr>

    </div> <!-- /container -->
      @include('home.partials._login_modal')
    @endsection
