@extends('layout')

@section('title') Journy @endsection
 @section('content')
<style>
    body {
        color: white;
    }
    p {
        margin-left: 2em;
        margin-right: 2em;
    }
    .homepage_top_image {
        background: url('https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg');
        width: 100vw;
        height: 80vh;
        position: absolute;
        background-size: cover;
        display: flex;
        justify-content: center;
    }

    .column {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .column a {
        margin-bottom: 20px;
    }

    .logo {
        background-size: cover;
    }
</style>

<div class="homepage_top_image jumbotron-fluid">
    <div class="column justify-content-center">
        <a href="/">
            <img src="/img/logo_main.png" alt="logo_main" border="0">
        </a>
        <form class="form-inline" style="position:relative" action="{{action('LocationController@index')}}" method="get" >
            <input class="form-rounded  font-weight-bold mr-auto " style="background: #fff; margin-left:auto; margin-right:0;" type="search"
                placeholder="Search" name="continent" aria-label="Search"/>
                <!-- <input type="submit"/> -->
                <div class="form-group">
        <button type="submit" class="btn btn-outline-light">
          <i class="fa fa-search"></i>
        </button>
      </div>
        </form>
        <h3>Motto: We bring together travelers and locals alike.</h3>
        <p>Short desc: We bridge the gap between travelers, local people, and many of the hot spots & small businesses. We provide travelers with a variety of fun options so they can create their own unique travel experience steeped in local customs and traditions.</p>
        <p>Beware, this site is still under construction. However, you can review its main features. Start by typing Asia in a search bar, or check our Login section</p>
        <p>“Little by little one travels far”- J.R.R Tolkien </p>

    </div>
</div>


@endsection