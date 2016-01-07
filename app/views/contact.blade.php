@extends('layouts.master')

@section('content')
<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Fill
                        <strong>in the following information</strong>
                    </h2>
                    <hr>
                    <form role="form" action="https://www.elformo.com/forms/cf08e9af-c03c-4576-a53b-139a89c4db7b" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for "name">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for "email">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for "phone">Phone Number</label>
                                <input type="tel" class="form-control" name="phone" id="phone">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label for="message">Message</label>
                                <textarea class="form-control" rows="6" name="message" id="message"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
@stop