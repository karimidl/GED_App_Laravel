@extends('layouts.app')
@section('content')
<div class="container">
   {{-- <a href=""> <button type="button" class="btn btn-outline-primary btn-lg">Nouveau utilisateur</button></a>

    <form class="form-inline" style="float: right" action="" method="GET">
        <button class="btn btn-outline-primary" style="margin-right: 5px"><span class="glyphicon glyphicon-refresh"></span> Actualiser</button>

      <input class="form-control mr-sm-2" type="search" placeholder="Search" id="tt" name="search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
<style>
    .form-inline .form-control {

    width: 255px;

}
</style>

<div class="container">
    <div class="row">
        <div class="col-md-4" style="margin-left:255px">
            <form method="POST" enctype="multipart/form-data" action="{{ route('documents.store') }}">
                @csrf
                <div class="form-group">
                    <div class="custom-file">

                        {{-- <label class="custom-file-label" for="customFile">Choisir document</label> --}}
                        <input type="file" style="border: 1px solid #000;width: 100%" name="name" />


                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Ajouter</button>
            </form>

        </div>
    </div>
    <div  style="float: left;margin-top: 55px;margin-left: 254px">
            <form class="form-inline" style="float: right" action="" method="GET">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Chercher</button> &nbsp;
                <input type="search" id="form1" class="form-control" placeholder="..............." aria-label="Search" />
            </form>
    </div>
</div>

@endsection
