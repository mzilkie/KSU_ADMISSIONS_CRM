@extends ('prospect.layouts.master')

@section ('content')

      <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome to K-State Polytechnic Admissions Portal</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-12">

                                   @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach( $errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                   {!! Form::open(['class' => 'form-horizontal', 'method' => 'post', 'role' =>'form']) !!}
                                        
                                        @include ('layouts.informationsheet')

                                   {!! Form::close() !!}
 
                                </div>
                                <!-- /.col-lg-12 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
        <!-- /#page-wrapper -->


@endsection

