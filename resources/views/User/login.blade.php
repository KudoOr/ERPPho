@extends('Layout.login')
@section('content')
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
                <form role="form" method="post">
                    <fieldset>
                    @include('Element.error')
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </fieldset>
                </form>
                    
            </div>
        </div>
@stop