@extends('layout.site')

@section('title','Post')

@section('pageheader','Post')

@section('conteudo')
        <!-- Project One -->
<div class="row">
    <div class="col-md-7">
        <a href="{{ route('site.blog.detalhe') }}">
            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
        </a>
    </div>
    <div class="col-md-5">
        <h3>Project One</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        <a class="btn btn-primary" href="{{ route('site.blog.detalhe') }}">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<!-- /.row -->

<hr>

<!-- Project Two -->
<div class="row">
    <div class="col-md-7">
        <a href="{{ route('site.blog.detalhe') }}">
            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
        </a>
    </div>
    <div class="col-md-5">
        <h3>Project Two</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
        <a class="btn btn-primary" href="{{ route('site.blog.detalhe') }}">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<!-- /.row -->

<hr>

<!-- Project Three -->
<div class="row">
    <div class="col-md-7">
        <a href="{{ route('site.blog.detalhe') }}">
            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
        </a>
    </div>
    <div class="col-md-5">
        <h3>Project Three</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
        <a class="btn btn-primary" href="{{ route('site.blog.detalhe') }}">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<!-- /.row -->

<hr>

<!-- Project Four -->
<div class="row">

    <div class="col-md-7">
        <a href="{{ route('site.blog.detalhe') }}">
            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
        </a>
    </div>
    <div class="col-md-5">
        <h3>Project Four</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
        <a class="btn btn-primary" href="{{ route('site.blog.detalhe') }}">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<!-- /.row -->

<hr>

<!-- Project Five -->
<div class="row">
    <div class="col-md-7">
        <a href="{{ route('site.blog.detalhe') }}">
            <img class="img-responsive" src="http://placehold.it/700x300" alt="">
        </a>
    </div>
    <div class="col-md-5">
        <h3>Project Five</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident ex quisquam hic odio repellendus atque porro distinctio quae id laboriosam facilis dolorum.</p>
        <a class="btn btn-primary" href="{{ route('site.blog.detalhe') }}">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<!-- /.row -->

<hr>

<!-- Pagination -->
<div class="row text-center">
    <div class="col-lg-12">
        <ul class="pagination">
            <li>
                <a href="{{ route('site.blog.detalhe') }}">&laquo;</a>
            </li>
            <li class="active">
                <a href="{{ route('site.blog.detalhe') }}">1</a>
            </li>
            <li>
                <a href="{{ route('site.blog.detalhe') }}">2</a>
            </li>
            <li>
                <a href="{{ route('site.blog.detalhe') }}">3</a>
            </li>
            <li>
                <a href="{{ route('site.blog.detalhe') }}">4</a>
            </li>
            <li>
                <a href="{{ route('site.blog.detalhe') }}">5</a>
            </li>
            <li>
                <a href="{{ route('site.blog.detalhe') }}">&raquo;</a>
            </li>
        </ul>
    </div>
</div>
<!-- /.row -->
@stop